<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DestinationController extends Controller
{
    public function index()
    {
        $data['title'] = 'Data Destinasi';
        $data['destinations'] = Destination::with(['location'])->orderByDesc('created_at')->get();
        $data['locations'] = Location::orderBy('name')->get();

        return view('dashboard.destinations.index', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'destination'   => 'required|string',
            'price'         => 'required',
            'location_id'   => 'required|exists:locations,id',
            'image'         => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        // if image not null
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();

            // save to public/images/destination
            $image->move(public_path('images/destination'), $image_name);

            // save to database full url
            $image_name = url('images/destination/') . '/' . $image_name;
        } else {
            $image_name = null;
        }

        $addDestination = Destination::insert([
            'name'          => $request->destination,
            'price'         => $request->price,
            'location_id'   => $request->location_id,
            'description'   => $request->description,
            'image'         => $image_name,
        ]);

        if ($addDestination) {
            return redirect()->back()->with('success', 'Data destinasi berhasil ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Data destinasi gagal ditambahkan');
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'destination'   => 'required|string',
            'price'         => 'required',
            'location_id'   => 'required|exists:locations,id',
            'image'         => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        $destination = Destination::find($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();

            // save to public/images/destination
            $image->move(public_path('images/destination'), $image_name);

            // save to database full url
            $image_name = url('images/destination/') . '/' . $image_name;

            // delete old image
            if ($destination->image) {
                unlink(public_path('images/destination/') . '/' . basename($destination->image));
            }
        } else {
            $image_name = $destination->image;
        }

        $updateDestination = $destination->update([
            'name'          => $request->destination,
            'price'         => $request->price,
            'location_id'   => $request->location_id,
            'description'   => $request->description,
            'image'         => $image_name,
        ]);

        if ($updateDestination) {
            return redirect()->back()->with('success', 'Data destinasi berhasil diubah');
        } else {
            return redirect()->back()->with('error', 'Data destinasi gagal diubah');
        }
    }

    public function destroy($id)
    {
        $destination = Destination::find(base64_decode($id));
        if (!$destination) {
            return redirect()->back()->with('error', 'Data destinasi tidak ditemukan');
        }

        if ($destination->image) {
            unlink(public_path('images/destination/') . '/' . basename($destination->image));
        }

        $destination->delete();

        return redirect()->back()->with('success', 'Data destinasi berhasil dihapus');
    }
}
