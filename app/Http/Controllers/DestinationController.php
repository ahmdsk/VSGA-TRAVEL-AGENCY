<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index() {
        $data['title'] = 'Data Destinasi';
        $data['destinations'] = Destination::with(['location'])->orderByDesc('created_at')->get();

        return view('dashboard.destinations.index', $data);
    }
}
