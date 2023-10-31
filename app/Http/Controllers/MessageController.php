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
}
