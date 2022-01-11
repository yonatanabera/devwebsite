<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function showAll(){
        return Portfolio::all();
    }

    public function create(Request $request){
        Portfolio::create([
            'image' => $request->image,
            'profile_title' => $request->profile_title,
            'category' => $request->category,
            'description' => $request->description
        ]);

        return response()->json([
            'message' => 'Portfolio Added',
            'status' => 200
        ]);
    }

    public function update(Request $request, $id){
        Portfolio::find($id)->update([
            'image' => $request->image,
            'profile_title' => $request->profile_title,
            'category' => $request->category,
            'description' => $request->description
        ]);

        return response()->json([
            'message' => 'Portfolio Updated',
            'status' => 200
        ]);
    }

    public function delete($id){
        Portfolio::find($id)->delete();

        return response()->json([
            'message' => 'portfolio Deleted',
            'status' => 200
        ]);
    }
}
