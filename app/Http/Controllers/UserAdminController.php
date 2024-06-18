<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserAdminController extends Controller
{
    public function index() {
        $data['title'] = 'Data Admin';
        $data['admins'] = User::where('role', 'admin')->orderByDesc('name')->get();

        return view('dashboard.user_admin.index', $data);
    }
}
