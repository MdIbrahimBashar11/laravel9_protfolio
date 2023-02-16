<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\APost;
use App\Models\Message;
class Admin extends Controller
{
    public function admin() {
        return view('admin.index');
    }
    
    public function add() {
        return view('admin.addPost');
    }

    public function addPost(Request $req) {
        $path = 'post/img';
        $post = new APost;

        $post->title = $req->name;
        $post->descriptions = $req->description;
        $image=$req->image; 
        $imageName = $image->getClientOriginalName();
        $image->move($path, $imageName);
        $post->image = $imageName;

        $post->save();
        return redirect()->back();

    }
    public function myPost(){
        $post = APost::all();
        return view('admin.myPost', compact('post'));
      }

      public function delete_post($id){
        $post = APost::find($id);
        $post->delete();
        return redirect()->back();
      }

      public function update_post($id){
        $post = APost::find($id);
    
        return view('admin.updatePost', compact('post'));
      }
    
      public function update_post_confirm(Request $req, $id){
        $post = APost::find($id);
        $path = 'post/img';
        $post->title = $req->name;
        $post->descriptions = $req->description;

        // $image=$req->image;
        // $imageName = $image->getClientOriginalName();
        // $image->move($path, $imageName);
        // $post->image = $imageName;

        $image=$req->image;
        if($image) {
            $imageName = $image->getClientOriginalExtension();
            $req->image->move($path, $imageName);
            $post->image = $imageName;
        }

        $post->save();
        return redirect()->back()->with("message", "Update Post Successfully");
      }

      public function message(){
         $mesg = Message::all();
         return view('admin.message', compact('mesg'));
      }

      public function delete_mesg($id){
        $mesg = Message::find($id);
        $mesg->delete();
        return redirect()->back()->with("message", "Message Deleted Successfully");
     }
      
}
