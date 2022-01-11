<?php

namespace App\Http\Controllers;

use App\Models\Testimonials;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function showAll(){
        return Testimonials::all();
    }

    public function create(Request $request){
        Testimonials::create([
            'name' => $request->name,
            'profile_picuture' => $request->profile_picuture,
            'testimony' => $request->testimony
          
        ]);

        return response()->json([
            'message' => 'Testimonials Added ',
            'status' => 200
        ]);
    }

    public function update(Request $request, $id){
        Testimonials::find($id)->update([
            'name' => $request->name,
            'profile_picuture' => $request->profile_picuture,
            'testimony' => $request->testimony
        ]);

        return response()->json([
            'message' => 'Testimonials Updated',
            'status' => 200
        ]);
    }

    public function delete($id){
        Testimonials::find($id)->delete();

        return response()->json([
            'message' => 'Testimonials Deleted',
            'status' => 200
        ]);
    }
}
