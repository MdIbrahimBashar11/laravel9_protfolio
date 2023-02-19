<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\APost;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;


class Admin extends Controller
{

    //Admin dashbord
    public function admin() {
      $usertype = Auth::User()->usertype;
        
      if($usertype == '1') {
        return view('admin.index');
      } else {
        return redirect('/');
      }
       
    }
    
     //Post Add Vue
    public function add() {
        $usertype = Auth::User()->usertype;
        
        if($usertype == '1') {
          return view('admin.addPost');
        } else {
          return redirect('/');
        }
    }


     //Post Add
    public function addPost(Request $req) {
      $usertype = Auth::User()->usertype;
        
      if($usertype == '1') {

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
      } else {
        return redirect('/');
      }
    

    }
     //Post 
    public function myPost(){
     
        $usertype = Auth::User()->usertype;
        
        if($usertype == '1') {
          $post = APost::all();
          return view('admin.myPost', compact('post'));
        } else {
             return redirect('/');
        }
      }
     //Post Delete
      public function delete_post($id){
        $usertype = Auth::User()->usertype;
        
        if($usertype == '1') {
          $post = APost::find($id);
        $post->delete();
        return redirect()->back();
        } else {
             return redirect('/');
        }
      }
 
       //Post update
      public function update_post($id){

        $usertype = Auth::User()->usertype;
        
        if($usertype == '1') {
          $post = APost::find($id);
    
          return view('admin.updatePost', compact('post'));
        } else {
             return redirect('/');
        }
      }
    
      //Post update Confirm
      public function update_post_confirm(Request $req, $id){
        $usertype = Auth::User()->usertype;
        
        if($usertype == '1') {
          
          $post = APost::find($id);
          $path = 'post/img';
          $post->title = $req->name;
          $post->descriptions = $req->description;
  
          $image=$req->image;
          if($image) {
              $imageName = $image->getClientOriginalExtension();
              $req->image->move($path, $imageName);
              $post->image = $imageName;
          }
  
          $post->save();
          return redirect()->back()->with("message", "Update Post Successfully");


        } else {
             return redirect('/');
        }
      }
  
       //Message
      public function message(){
         $usertype = Auth::User()->usertype;
        
         if($usertype == '1') {
          $mesg = Message::all();
          return view('admin.message', compact('mesg'));
         } else {
              return redirect('/');
         }
      }


      //Message Delete
      public function delete_mesg($id){
        $usertype = Auth::User()->usertype;
        
        if($usertype == '1') {
          $mesg = Message::find($id);
          $mesg->delete();
          return redirect()->back()->with("message", "Message Deleted Successfully");
        } else {
             return redirect('/');
        }
     }
      
}
