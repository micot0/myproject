<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            [
                'full_name' => 'Michael Asuncion',
                'username'  => 'michael',
                'role'      => 'Administrator'
            ],
            [
                'full_name' => 'John Cruz',
                'username'  => 'john',
                'role'      => 'Cashier'
            ],
            [
                'full_name' => 'Mary Santos',
                'username'  => 'mary',
                'role'      => 'Cashier'
            ],
            [
                'full_name' => 'Paolo Reyes',
                'username'  => 'paolo',
                'role'      => 'Manager'
            ],
            [
                'full_name' => 'Angela Garcia',
                'username'  => 'angela',
                'role'      => 'Staff'
            ]
        ];

        return view('users', $data);
    }
}