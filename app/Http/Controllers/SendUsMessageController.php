<?php

namespace App\Http\Controllers;

use App\Models\SendUsMessage;
use Illuminate\Http\Request;

class SendUsMessageController extends Controller
{
    public function showAll(){
        
        return SendUsMessage::all();
    }

    public function create(Request $request){
        SendUsMessage::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
          
        ]);

        return response()->json([
            'message' => 'Message sent ',
            'status' => 200
        ]);
    }

    public function update(Request $request, $id){
        SendUsMessage::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);

        return response()->json([
            'message' => 'Message Updated',
            'status' => 200
        ]);
    }

    public function delete($id){
        SendUsMessage::find($id)->delete();

        return response()->json([
            'message' => 'Send us message Deleted',
            'status' => 200
        ]);
    }
}
