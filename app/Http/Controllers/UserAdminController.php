<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserAdminController extends Controller
{
    public function index() {
        $data['title'] = 'Data Admin';
        $data['admins'] = User::where('role', 'admin')->orderByDesc('name')->get();

        return view('dashboard.user_admin.index', $data);
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
        ], [
            'name.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        $addVisitor = User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password ?? 'admin'),
            'role' => 'admin',
        ]);

        if ($addVisitor) {
            return redirect()->back()->with('success', 'Data admin berhasil ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Data admin gagal ditambahkan');
        }
    }

    public function update(Request $request, $id) {
        $visitor = User::find($id);

        if (!$visitor) {
            return redirect()->back()->with('error', 'Data admin tidak ditemukan');
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
        ], [
            'name.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        $visitor->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->back()->with('success', 'Data admin berhasil diubah');
    }

    public function destroy($id) {
        $visitor = User::find(base64_decode($id));

        if (!$visitor) {
            return redirect()->back()->with('error', 'Data admin tidak ditemukan');
        }

        $visitor->delete();

        return redirect()->back()->with('success', 'Data admin berhasil dihapus');
    }
}
