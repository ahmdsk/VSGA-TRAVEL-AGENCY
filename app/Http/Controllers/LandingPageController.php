<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $data['destinations'] = Destination::with(['location'])->get();

        return view('app', $data);
    }
}
