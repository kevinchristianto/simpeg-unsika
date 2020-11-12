<?php

namespace App\Controllers;

class Eselon extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Eselon',
            'eselon' => 'active'
        ];

        return view('admin/eselon', $data);
    }
}
