<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function crop(Request $request)
    {
        $request->validate([
            'image'  => 'required|file|mimetypes:image/jpeg,image/png|max:6144',
            'target' => 'required|in:photo_full,photo_square',
        ]);

        // Розміри за target
        [$w, $h] = $request->target === 'photo_square' ? [520, 520] : [384, 410];

        $dirRel = 'assets/images/uploads/crop';
        $dirAbs = public_path($dirRel);
        if (!is_dir($dirAbs)) mkdir($dirAbs, 0755, true);

        $nameBase = Str::uuid()->toString()."_{$w}x{$h}";
        $destAbs  = $dirAbs . '/' . $nameBase . '.webp';

        $im  = new ImageManager(new Driver());
        $src = $request->file('image')->getRealPath();

        try {
            $im->read($src)->cover($w, $h)->toWebp(85)->save($destAbs);
        } catch (\Throwable $e) {
            Log::warning('WebP encode via GD failed: '.$e->getMessage());
            // Fallback через cwebp (потрібна утиліта в PATH)
            $tmpJpg = storage_path('app/tmp/'.$nameBase.'.jpg');
            if (!is_dir(dirname($tmpJpg))) mkdir(dirname($tmpJpg), 0755, true);
            $im->read($src)->cover($w, $h)->toJpeg(90)->save($tmpJpg);
            @shell_exec('cwebp -q 85 '.escapeshellarg($tmpJpg).' -o '.escapeshellarg($destAbs).' 2>&1');
            @unlink($tmpJpg);
            if (!file_exists($destAbs)) {
                return response()->json([
                    'status'  => false,
                    'message' => 'Немає підтримки WebP-енкоду (GD/Imagick) і відсутній cwebp.',
                ], 500);
            }
        }

        $pathRel = $dirRel . '/' . $nameBase . '.webp';

        return response()->json([
            'status' => true,
            'target' => $request->target,
            'url'    => asset($pathRel),
            'path'   => $pathRel,
        ]);
    }
}
