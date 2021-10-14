<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => env('APP_NAME') . '| Dashboard',
        ];

        return view('dashboard.index', $data);
    }
}
