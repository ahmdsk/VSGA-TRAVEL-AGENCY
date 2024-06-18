<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VisitorController extends Controller
{
    public function index() {
        $data['title'] = 'Data Pengunjung';
        $data['visitors'] = User::where('role', 'user')->orderByDesc('name')->get();

        return view('dashboard.visitor.index', $data);
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

        $addVisitor = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password ?? '12345'),
            'role' => 'user',
        ]);

        if ($addVisitor) {
            return redirect()->back()->with('success', 'Data pengunjung berhasil ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Data pengunjung gagal ditambahkan');
        }
    }

    public function update(Request $request, $id) {
        $visitor = User::find($id);

        if (!$visitor) {
            return redirect()->back()->with('error', 'Data pengunjung tidak ditemukan');
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

        $visitor->name = $request->name;
        $visitor->email = $request->email;

        if ($visitor->save()) {
            return redirect()->back()->with('success', 'Data pengunjung berhasil diubah');
        } else {
            return redirect()->back()->with('error', 'Data pengunjung gagal diubah');
        }
    }

    public function destroy($id) {
        $visitor = User::find(base64_decode($id));

        if (!$visitor) {
            return redirect()->back()->with('error', 'Data pengunjung tidak ditemukan');
        }

        if ($visitor->delete()) {
            return redirect()->back()->with('success', 'Data pengunjung berhasil dihapus');
        } else {
            return redirect()->back()->with('error', 'Data pengunjung gagal dihapus');
        }
    }
}
