<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function showAll(){
        return AboutUs::all();
    }
    
    public function create(Request $request){
        AboutUs::create([
            'description' => $request->description
        ]);

        return response()->json([
            'message' => 'Description added to about us', 
            'status' => 200
        ]);
    }

    public function update(Request $request, $id){
        AboutUs::find($id)->update([
            'description' => $request->description
        ]);

        return response()->json([
            'message' => 'Description Updated',
            'status' => 200
        ]);
    }

    public function delete($id){
        AboutUs::find($id)->delete();

        return response()->json([
            'message' => 'Description Deleted',
            'status' => 200
        ]);
    }


}
