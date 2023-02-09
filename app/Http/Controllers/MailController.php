<?php

namespace App\Http\Controllers;

use App\Mail\Admin;
use App\Mail\Order;
use App\Models\Order as Message;
use Encore\Admin\Grid\Displayers\Input;
//use App\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as FacadesMail;



class MailController extends Controller
{
    //

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'description' => ''
        ]);

        // $email = $request->email;

        // save the form to database
        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->description = $request->description;
        $message->save();
        // echo $email;

        $mailData = [
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "description" => $request->description
        ];


        $user = $request->email;

        $admin = 'alexanderemmanuel1719@gmail.com';
        FacadesMail::to($user)->send(new Order($mailData));
        FacadesMail::to($admin)->send(new Admin($mailData));
        return redirect('/')->with('success', "Thanks, We would get to you as soon as possible  ");
    }
}
