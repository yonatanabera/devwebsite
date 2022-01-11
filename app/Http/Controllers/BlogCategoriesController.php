<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoriesController extends Controller
{
    //
    public function showAll(){
        return BlogCategory::all();
    }

    public function create(Request $request){
        BlogCategory::create([
            'category_name' => $request->category_name
        ]);

        return response()->json([
            'message' => 'Category Added',
            'status' => 200
        ]);
    }

    public function update(Request $request, $id){
        BlogCategory::find($id)->update([
            'category_name' => $request->category_name,
        ]);

        return response()->json([
            'message'=> 'Category Updated',
            'status' => 200
        ]);
    }

    public function delete($id){
        BlogCategory::find($id)->delete();

        return response()->json([
            'message' => 'Category Deleted',
            'status' => 200
        ]);
    }
}
