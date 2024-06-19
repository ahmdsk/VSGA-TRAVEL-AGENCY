<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class ManagementBookingController extends Controller
{
    public function index() {
        $data['title'] = 'Data Pesanan';
        $data['bookings'] = Booking::with('destination', 'destination.location')->orderByDesc('id')->get();

        return view('dashboard.booking.index', $data);
    }

    public function confirm(Request $request) {
        $booking = Booking::find($request->id);
        if(!$booking) {
            return response()->json([
                'message' => 'Pesanan tidak ditemukan'
            ], 404);
        }

        $booking->status = $request->status;
        $booking->save();

        return response()->json([
            'message' => 'Pesanan berhasil diubah'
        ], 200);
    }
}
