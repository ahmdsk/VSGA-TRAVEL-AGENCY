<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function user_booking(Request $request)
    {
        $auth = Auth::user();

        $validator = Validator::make($request->all(), [
            'id_destinasi_pesan'    => 'required|exists:destinations,id',
            'email'                 => $auth ? 'nullable' : 'required|email|unique:users,email',
            'fullname'              => $auth ? 'nullable' : 'required',
            'check_in'              => 'required',
            'check_out'             => 'required',
            'total_guests'          => 'required|min:0'
        ], [
            'id_destinasi_pesan.required'   => 'Destinasi harus dipilih',
            'id_destinasi_pesan.exists'     => 'Destinasi tidak ditemukan',
            'email.required'                => 'Email harus diisi',
            'email.email'                   => 'Email tidak valid',
            'email.unique'                  => 'Email sudah terdaftar, silahkan gunakan email lain!',
            'fullname.required'             => 'Nama lengkap harus diisi',
            'check_in.required'             => 'Tanggal Check in harus diisi',
            'check_out.required'            => 'Tanggal Check out harus diisi',
            'total_guests.required'         => 'Jumlah tamu harus diisi',
            'total_guests.min'              => 'Jumlah tamu minimal 0'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        if (!$auth) {
            $user = User::where('email', $request->email)->first();
            if ($user) {
                return redirect()->back()->with('error', 'Email sudah terdaftar, silahkan gunakan email lain!');
            }

            $create_visitor = User::insertGetId([
                'name'      => $request->fullname,
                'email'     => $request->email,
                'password'  => bcrypt('12345')
            ]);

            Auth::loginUsingId($create_visitor);
        }

        $insert_booking = Booking::insert([
            'user_id'           => $auth->id ?? $create_visitor,
            'destination_id'    => $request->id_destinasi_pesan,
            'check_in'          => $request->check_in,
            'check_out'         => $request->check_out,
            'total_guests'      => $request->total_guests,
            'total_price'       => $request->total_price
        ]);

        if ($insert_booking) {
            return redirect()->back()->with('success', 'Berhasil melakukan pemesanan');
        } else {
            return redirect()->back()->with('error', 'Gagal melakukan pemesanan');
        }
    }

    public function history() {
        $auth = Auth::user();
        $data['title'] = 'Riwayat Pemesanan';
        $data['bookings'] = Booking::with('destination', 'destination.location')->where('user_id', $auth->id)->orderByDesc('id')->get();

        return view('booking_history', $data);
    }
}
