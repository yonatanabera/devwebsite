<?php

namespace App\Http\Controllers;

use App\Models\OurClients;
use Illuminate\Http\Request;

class OurClientsController extends Controller
{
    public function showAll(){
        return OurClients::all();
    }

    public function create(Request $request){
        OurClients::create([
            'company_name' => $request->name,
            'company_logo' => $request->logo
        ]);

        return response()->json([
            'message' => 'Client Added',
            'status' => 200
        ]);
    }

    public function update(Request $request, $id){
        OurClients::find($id)->update([
            'company_name' => $request->name,
            'company_logo' => $request->logo
        ]);

        return response()->json([
            'message' => 'Client Updated',
            'status' => 200
        ]);
    }

    public function delete($id){
        OurClients::find($id)->delete();

        return Response()->json([
            'message'=>'Client Deleted',
            'status' => 200
        ]);
    }
}
