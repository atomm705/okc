<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class PageController extends Controller
{
    public function index()
    {
        return view('main.index');
    }

    public function team(){

        return view('main.team');
    }

    public function about(){

        return view('main.about');
    }

    public function departments(){

        return view('main.departments');
    }

    public function contacts(){

        return view('main.contacts');
    }

    public function blog(){

        return view('main.blog');
    }


    public function timetable(){

        return view('main.timetable');
    }

    public function prices(Request $request, $tab = 'x-ray', $locale = 'en')
    {
       // $tabs = [
      //      'x-ray' => 'X-ray',
      //      'tomography' => 'Computer Tomography',
       //     'mri' => 'Magnetic Resonance Imaging',
       //     'lab-tests' => 'Laboratory Tests',
       //     'ultrasound' => 'Ultrasound Imaging',
       //     'pregnancy-care' => 'Pregnancy Care Services',
       //     'emergency' => 'Emergency Department Charges'
      //  ];

        // Получаем параметр tab из запроса, если его нет, то выбираем первый таб
      //  $tab = $request->get('tab', 'x-ray'); // Задаем 'x-ray' по умолчанию

      //  return view('main.prices', compact('tab', 'tabs'));
        app()->setLocale($locale);

        $tabs = [
            'x-ray' => 'X-ray',
            'tomography' => 'Computer Tomography',
            'mri' => 'Magnetic Resonance Imaging',
            'lab-tests' => 'Laboratory Tests',
            'ultrasound' => 'Ultrasound Imaging',
            'pregnancy-care' => 'Pregnancy Care Services',

        ];


        if (!array_key_exists($tab, $tabs)) {
            $tab = 'x-ray';
        }


        $dataForTab = $this->getDataForTab($tab);

        return view('main.prices', compact('tab', 'tabs', 'dataForTab'));
    }

    private function getDataForTab($tab)
    {

        switch ($tab) {
            case 'x-ray':
                return [
                    ['service' => 'X-ray', 'time' => '5-10', 'price' => '6,160.00'],

                ];
            case 'tomography':
                return [
                    ['service' => 'Computer Tomography', 'time' => '10-15', 'price' => '2,120.00'],

                ];
            case 'mri':
                return [
                    ['service' => 'Magnetic Resonance Imaging', 'time' => '10-15', 'price' => '2,120.00'],

                ];
            case 'ultrasound':
                return [
                    ['service' => 'ultrasound', 'time' => '10-15', 'price' => '2,120.00'],

                ];
            case 'pregnancy-care':
                return [
                    ['service' => 'pregnancy-care', 'time' => '10-15', 'price' => '2,120.00'],

                ];
            case 'emergency':
                return [
                    ['service' => 'emergency', 'time' => '10-15', 'price' => '2,120.00'],

                ];

            default:
                return [];
        }
    }

    public function testimonials(){

        return view('main.testimonials');
    }

    public function telemed(){

        return view('main.telemed');
    }







}
