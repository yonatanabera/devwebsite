<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    
    public function showAll(){
        return ContactUs::all();
    }

    public function create(Request $request){

        ContactUs::create([
            'location' => $request->location,
            'phone_number' =>$request->phone_number,
            'email' => $request->email
        ]);

        return response()->json([
            'message' => 'Contact us information added',
            'status' => 200
        ]);
    }

    public function update(Request $request, $id){

        ContactUs::find($id)->update([
            'location' => $request->location,
            'phone_number' =>$request->phone_number,
            'email' => $request->email
        ]);

        return response()->json([
            'message' => 'Contact us information updated',
            'status' => 200
        ]);
    }

    public function delete($id){
        ContactUs::find($id)->delete();
        return response()->json([
            'message'=> 'Contact us information deleted',
            'status'=>200
        ]);
    }


}
