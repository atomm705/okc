<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Exception;

class AppointmentController extends Controller
{
    public function index()
    {
        return view('main.appointment');
    }

    public function post(Request $request){

        $data = [
            'phone'      => $request->get('phone'),
            'name'       => $request->get('name'),
        ];
        $validator = Validator::make($request->all(), [
            'phone' => 'required',
            'name'  => 'required|string',
        ], [
            'phone.required' => 'Поле телефону є обовʼязковим.',
            'phone.regex'    => 'Формат телефону має бути у вигляді +380XXXXXXXXX.',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'validator' => $validator->errors()->toArray()]);
        }

        try {
            Mail::send('emails.admin_alert', $data, function (Message $mail) use ($data) {
                $mail->from('service@okc.com.ua', 'Технический "Ок Центр"');
                $mail->to('info@okc.com.ua', 'Ок Центр')->subject('Запись на прием ' . $data['name']);
            });
            return response()->json(['status' => true, 'message' => '<span class="admin-alert">Ваше повідомлення успішно відправлено, очікуйте зворотнього зв\'язку.</span>']);
        } catch (Exception $e) {
            Log::error($e);
            return response()->json(['status' => false, 'fatalError' => 'К сожалению из-за ошибки мы не смогли отправить ваше сообщение. Попробуйте позже или перезвоните нам.']);
        }

    }
}
