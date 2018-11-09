<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{

    public function index()
    {
        return view('contact');
    }

    /**
     * @param Request $request
     */
    public function sendemail(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required|max:255',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        $fullname = $request->nome;
        $email = $request->email;
        $message = $request->message;
        $phone = $request->phone;

        Mail::to('arielcallisaya00@gmail.com')->send(new OrderShipped($fullname, $email, $message,$phone));
        $request->session()->flash('contact', 'Su mensaje fue enviado con exito, Gracias!!');
        return redirect()->back();
    }

}
