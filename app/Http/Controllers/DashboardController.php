<?php

namespace App\Http\Controllers;

use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        
        // Passer la variable $totalUsers à la vue
        return view('dashboard.index', [
            'totalUsers' => $totalUsers
        ]);
    }
}
