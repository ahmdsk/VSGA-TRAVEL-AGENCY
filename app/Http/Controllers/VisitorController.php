<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function index() {
        $data['title'] = 'Data Pengunjung';
        $data['visitors'] = User::where('role', 'user')->orderByDesc('name')->get();

        return view('dashboard.visitor.index', $data);
    }
}
