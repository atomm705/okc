<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        return view('main.appointment');
    }

    public function post(Request $request){
        $rules = [
            'phone' => ['required', 'regex:/^\+380\d{9}$/'],
        ];

        // Власні повідомлення
        $messages = [
            'phone.required' => 'Поле телефону є обовʼязковим.',
            'phone.regex' => 'Формат телефону має бути у вигляді +380XXXXXXXXX.',
        ];

        // Запускаємо валідацію
        $validator = Validator::make($request->all(), $rules, $messages);

        // Якщо не пройдено — повертаємо назад з помилками
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

    }
}
