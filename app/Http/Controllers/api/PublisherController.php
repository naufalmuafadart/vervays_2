<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\ProfilePhoto;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function update(Request $request)
    {
        $publisher = Publisher::find($request->id);
        $publisher->name = $request->name;
        $publisher->description = $request->description;

        // Upload photo
        $profile_photo = $request->profile_photo;
        if ($profile_photo != null) {
            $newPPId = ProfilePhoto::getNewId();
            $file = $request->file('profile_photo');
            $fileName = $file->getClientOriginalName();
            $uploadDirectory = "image/profile_photos/".$newPPId;
            $file->move($uploadDirectory, $fileName);

            ProfilePhoto::insert($newPPId, $fileName);
            Publisher::updateProfilePhoto($request->id, $newPPId);
        }

        $publisher->save();
        return redirect()->route('dashboard-publisher');
    }
}
