<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $post=Post::all();
        return view ('home.index',compact('post'));
    }

    public function upload_post(Request $request)
    {

        $data=new Post();
        $data->username=Auth::user()->name;
        $data->description=$request->description;

        /* IMAGE INSERT PART */
        $image=$request->image;
        if($image)
        {
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('Uploads/gallery/',$imagename);
        $image->path='Post' .$imagename;

        /* TO STORE IMAGE NAME IN THE DATABASE TABLE. */
        $data->image=$imagename;
        }

        $data->save();
        return redirect()->back();

    }

    public function view_post()
    {
        $name=Auth::user()->name;
        $post=Post::where('Username','=',$name)->get();

        return view('post_page',compact('post'));
    }

    public function delete_post($id)
    {
        $data=post::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function update_post($id)
    {
        $data=post::find($id);
        return view('updatepost',compact('data'));
    }

    public function confirm_update(Request $request,$id)
    {
        $post=post::find($id);
        $post->Description=$request->description;

        /* IMAGE INSERT PART */
        $image=$request->image;
        if($image)
        {
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('Uploads/gallery/',$imagename);
        $image->path='Post' .$imagename;

        /* TO STORE IMAGE NAME IN THE DATABASE TABLE. */
        $post->image=$imagename;
        }

        $post->save();
        return redirect()->back();

    }
}

