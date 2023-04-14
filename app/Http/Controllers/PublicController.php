<?php

namespace App\Http\Controllers;

use Exception;
use App\Mail\TestMail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{

    public function index(){
        $products = Product::all();
        return view('welcome' , compact('products'));
    }



    public function submit(Request $request){
        $email = $request->email;
        // $name = $request->name;
        // $message = $request->message;

        // $user = compact('name' , 'email' , 'message');

        // try{
           Mail::to($email)->send(new TestMail($mailData)); 
        // }catch(Exception $e){
        //     return redirect(route('homepage'))->with('errorMessage' ,"C'e stato un problema con l'invio della mail. Per favore, riprova piu tardi");
        // }


        
        // dd('Controlla la tua mail');
        return redirect(route('homepage'))->with('message' ,'La tua email e stata correttamente inviata');
    }
}
