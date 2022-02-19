<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function update(Request $request)
    {
        $publisher = Publisher::find($request->id);
        $publisher->name = $request->name;
        $publisher->description = $request->description;
        $publisher->save();
        return redirect()->route('dashboard-publisher');
    }
}
