<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sendmessge;


class MessageController extends Controller
{


    public function SendMessge(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'title' => 'required',
            'name' => 'required',
            'text' => 'required',
        ]);

        if (isset($request)) {

            $msg = new sendmessge();
            $msg->title = strip_tags($request->title);
            $msg->name = strip_tags($request->name);
            $msg->email = strip_tags($request->email);
            $msg->text = strip_tags($request->text);
            $msg->status = false;
          
            $msg->save();

            return redirect()->back();


        }

}
    public function LireMessge($id)
    {
        $contents =  new sendmessge();
        $contents = $contents->where('id', $id)->first();
        $contents->update([
            'status' => 1,
        ]);

        return view('admin.index', ['temp' => 9 , 'content' => $contents]);

}
    public function isMessge()
    {
        $contents =  new sendmessge();
        $contents = $contents->where('status', 1)->where('status', );
        

        return view('admin.index', ['temp' => 9 , 'content' => $contents]);

}
}
