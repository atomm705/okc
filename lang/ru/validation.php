<?php

return [

    'accepted' => 'Поле :attribute має бути прийняте.',
    'accepted_if' => 'Поле :attribute має бути прийняте, якщо :other є :value.',
    'active_url' => 'Поле :attribute має бути дійсною URL-адресою.',
    'after' => 'Поле :attribute має бути датою після :date.',
    'after_or_equal' => 'Поле :attribute має бути датою після або рівною :date.',
    'alpha' => 'Поле :attribute може містити лише літери.',
    'alpha_dash' => 'Поле :attribute може містити лише літери, цифри, дефіси та підкреслення.',
    'alpha_num' => 'Поле :attribute може містити лише літери та цифри.',
    'array' => 'Поле :attribute має бути масивом.',
    'before' => 'Поле :attribute має бути датою до :date.',
    'before_or_equal' => 'Поле :attribute має бути датою до або рівною :date.',
    'between' => [
        'array' => 'Поле :attribute має містити від :min до :max елементів.',
        'file' => 'Розмір файлу в полі :attribute має бути від :min до :max кілобайт.',
        'numeric' => 'Поле :attribute має бути між :min та :max.',
        'string' => 'Довжина поля :attribute має бути від :min до :max символів.',
    ],
    'boolean' => 'Поле :attribute має бути true або false.',
    'confirmed' => 'Підтвердження для поля :attribute не співпадає.',
    'date' => 'Поле :attribute має бути дійсною датою.',
    'date_equals' => 'Поле :attribute має бути датою, рівною :date.',
    'email' => 'Поле :attribute має бути дійсною електронною адресою.',
    'exists' => 'Вибране значення для :attribute недійсне.',
    'file' => 'Поле :attribute має бути файлом.',
    'image' => 'Поле :attribute має бути зображенням.',
    'integer' => 'Поле :attribute має бути цілим числом.',
    'max' => [
        'array' => 'Поле :attribute не може містити більше ніж :max елементів.',
        'file' => 'Розмір файлу в полі :attribute не може перевищувати :max кілобайт.',
        'numeric' => 'Поле :attribute не може бути більше ніж :max.',
        'string' => 'Поле :attribute не може містити більше ніж :max символів.',
    ],
    'min' => [
        'array' => 'Поле :attribute має містити щонайменше :min елементів.',
        'file' => 'Розмір файлу в полі :attribute має бути не менше :min кілобайт.',
        'numeric' => 'Поле :attribute має бути не менше :min.',
        'string' => 'Поле :attribute має містити щонайменше :min символів.',
    ],
    'required' => 'Поле :attribute є обов’язковим.',
    'unique' => 'Значення поля :attribute вже зайняте.',

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'Користувацьке повідомлення',
        ],
    ],

    'attributes' => [],
];
