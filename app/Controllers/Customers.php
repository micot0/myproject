<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
            [
                'full_name' => 'akosi Dela Cruz',
                'email'     => 'akosi@example.com',
                'phone'     => '09171234567'
            ],
            [
                'full_name' => 'jose Santos',
                'email'     => 'jose@example.com',
                'phone'     => '09138593728'
            ],
            [
                'full_name' => 'Pedro Reyes',
                'email'     => 'pedro@example.com',
                'phone'     => '09068463728'
            ],
            [
                'full_name' => 'Ana Garcia',
                'email'     => 'ana@example.com',
                'phone'     => '09846294722'
            ],
            [
                'full_name' => 'juas Mendoza',
                'email'     => 'juan@example.com',
                'phone'     => '09847285732'
            ]
        ];

        return view('customers', $data);
    }
}