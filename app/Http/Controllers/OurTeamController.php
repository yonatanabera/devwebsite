<?php

namespace App\Http\Controllers;

use App\Models\OurTeam;
use Illuminate\Http\Request;

class OurTeamController extends Controller
{
    public function showAll(){
        return OurTeam::all();
    }

    public function create(Request $request){
        OurTeam::create([
            'profile_picture'=> $request->profile_picture,
            'name'=> $request->name,
            'role' => $request->role,
            'description' => $request->description,
            'social_media' => $request->social_media,
        ]);

        return response()->json([
            'message' => 'Team Member Added',
            'status' => 200
        ]);
    }

    public function update(Request $request, $id){
        OurTeam::find($id)->update([
            'profile_picture'=> $request->profile_picture,
            'name'=> $request->name,
            'role' => $request->role,
            'description' => $request->description,
            'social_media' => $request->social_media,
        ]);

        return response()->json([
            'message' => 'Team Member Updated',
            'status' => 200
        ]);
    }

    public function delete($id){
        OurTeam::find($id)->delete();

        return response()->json([
            'message'=> 'Team Member Deleted',
            'status' => 200
        ]);
    }
}
