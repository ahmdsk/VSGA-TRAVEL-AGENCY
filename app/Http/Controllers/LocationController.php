<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index() {
        $data['title'] = 'Data Lokasi';
        $data['locations'] = Location::orderByDesc('created_at')->get();

        return view('dashboard.locations.index', $data);
    }
}
