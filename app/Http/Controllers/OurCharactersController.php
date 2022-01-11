<?php

namespace App\Http\Controllers;

use App\Models\OurCharacters;
use Illuminate\Http\Request;

class OurCharactersController extends Controller
{
    public function showAll(){
        return OurCharacters::all();
    }

    public function create(Request $request){
        OurCharacters::create([
            'title'=> $request->title,
            'icon'=> $request->icon,
            'description' => $request->description
        ]);

        return response()->json([
            'message' => 'Element added to our characters',
            'status' => 200
        ]);
    }

    public function update(Request $request, $id){
        OurCharacters::find($id)->update([
            'title'=> $request->title, 
            'icon' => $request->icon, 
            'description' => $request->description
        ]);

        return response()->json([
            'message'=> 'Our character updated',
            'status' => 200
        ]);
    }

    public function delete($id){
        OurCharacters::find($id)->delete();
        return Response()->json([
            'message'=> 'Our Character Deleted',
            'status' => 200
        ]);
    }
}
