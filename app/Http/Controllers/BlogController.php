<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    

    public function showAll(){
        return Blog::all();
    }

    public function create(Request $request){

        if(isset($request->file)){
            $image=$request->file;
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->file->move('blogimages', $imagename); 
        }else{
            $imagename='';
        }

        Blog::create([
            'title' => $request->title, 
            'user_id' => Auth::id(),
            'category_id' => $request->category_id,
            'blog_photo' => $imagename, 
            'small_description' => $request->small_description, 
            'blog_content' => $request->blog_content
        ]);

        return response()->json([
            'message' => 'Blog Created',
            'status' => 200
        ]);
    }

    public function Update(Request $request, $id){

        if(isset($request->file)){
            $image=$request->file;
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->file->move('blogimages', $imagename); 
        }else{
            $imagename='';
        }

        Blog::find($id)->Update([
            'title' => $request->title, 
            'user_id' => Auth::id(),
            'category_id' => $request->category_id,
            'blog_photo' => $imagename, 
            'small_description' => $request->small_description, 
            'blog_content' => $request->blog_content
        ]);

        return response()->json([
            'message' => 'Blog Updated',
            'status' => 200
        ]);
    }

    public function showOne($id){
        return Blog::find($id);
    }

    public function delete($id){
        return response()->json([
            'message' => 'Blog Deleted Successfully',
            'status' => 200
        ]);
    }
}
