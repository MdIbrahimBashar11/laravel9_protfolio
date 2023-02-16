<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitorModel;
use App\Models\APost;
use App\Models\Message;

class HomeController extends Controller
{
  public function redirect(){
    $usertype = Auth::User()->usertype;
    if($usertype == '1') {
      return view('Layout.index');
    } else {
        $product = Product::paginate(9);
         return view('Layout.app');
    }
}
  //VIEW
   public function about() {
     return view('about.about');
   }
   public function protfolio() {
    return view('protfolio.protfolio');
  }
   public function contact() {
    return view('contact.contact');
  }

  //BLOG
  public function blog() {
    $posts = APost::paginate(6);
    
   return view('blog.blog', compact('posts'));
 }
  public function post_details($id) {
        $post = APost::find($id);
        return view('blog.post_details', compact('post'));
    }

    public function message(Request $req){
        $mesg = new Message;
        $mesg->name = $req->name;
        $mesg->email = $req->email;
        $mesg->subject = $req->subject;
        $mesg->message = $req->message;
        $mesg->save();

        return redirect()->back()->with("message", "Message Send Successfully");
    }
    
   


  }
