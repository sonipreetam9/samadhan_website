<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AdvertisementModel;
use Illuminate\Http\Request;

class SAdvertisementController extends Controller
{
    public function add_advertisement()
    {
        $ads=AdvertisementModel::orderBy('id','DESC')->get();
        return view('super_admin.add_advertisement',compact('ads'));
    }
   public function add_advertisement_post(Request $request)
{
    $request->validate([
        'post' => 'required|string',
    ]);

    $already = AdvertisementModel::where('advt_number', $request->post)->first();

    if ($already) {
        // ✅ return keyword added here
        return redirect()->back()->with('error', 'Advertisement already exists');
    } else {
        AdvertisementModel::create([
            'advt_number' => $request->post,
        ]);
        return redirect()->back()->with('success', 'Advertisement added successfully');
    }
}

}
