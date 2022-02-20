<?php

namespace App\Http\Controllers\publisher;

use App\Http\Controllers\Controller;
use App\Models\Publisher;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $userId = session('id', 0);
        $publisherId = Publisher::getPublisherIdByUserId($userId);
        $data = [
            "name" => Publisher::getPublisherAttribute($publisherId, "name"),
            "created_at" => Publisher::getPublisherAttribute($publisherId, "created_at"),
            "description" => Publisher::getPublisherAttribute($publisherId, "description"),
            "profile_photo_url" => Publisher::getProfilePhotoURL($publisherId),
            "balance" => Publisher::getPublisherAttribute($publisherId, "balance")
        ];
        return view('pages.publisher.dashboard', $data);
    }

    public function edit(Request $request)
    {
        $userId = session('id', 0);
        $publisherId = Publisher::getPublisherIdByUserId($userId);
        $data = [
            "id" => $publisherId,
            "name" => Publisher::getPublisherAttribute($publisherId, "name"),
            "description" => Publisher::getPublisherAttribute($publisherId, "description"),
        ];
        return view('pages.publisher.edit', $data);
    }

    // public function test(Request $request)
    // {
    //     return Publisher::getPublisherIdByUserId(1);
    // }
}
