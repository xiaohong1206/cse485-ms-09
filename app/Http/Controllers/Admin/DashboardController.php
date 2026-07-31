<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
   public function index()
    {
    $stats = [
        'categories' => 3,
        'products' => 8,
        'inventory_value' => 41380000
    ];

    return view('admin.dashboard', compact('stats'));
    }

    public function about()
    {
        return view('admin.about');
    }
}