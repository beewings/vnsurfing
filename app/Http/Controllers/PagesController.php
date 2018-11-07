<?php

namespace App\Http\Controllers;
use App\Review;
use App\Image;
use App\Article;
use DummyFullModelClass;
use Illuminate\Http\Request;
use App\Booking;
use Mail;
use App\Http\Requests\BookingFormRequest;

class PagesController extends Controller
{
    public function home()
    {
        $reviews = Review::all();
        $images = Image::all();
        $articles = Article::all();
        return view('home', compact('reviews','images','articles'));

    }
    public function store(BookingFormRequest $request)
    {
        Booking::create([
            'name'=> request('name'),
            'phone'=> request('phone'),
            'gmail'=> request('gmail'),
            'country'=> request('country'),
            'date'=> request('date'),
            'option'=> request('option'),
            'adults'=> request('adults'),
            'children'=> request('children')
        ]);

        Mail::send('emails.emailbookings',[
            'phone'=> $request->phone,
            'name'=>$request->name,
            'gmail'=>$request->gmail,
            'country'=>$request->country,
            'date'=>$request->date,
            'option'=>$request->option,
            'adults'=>$request->adults,
            'children'=>$request->children

        ], function($mail) use ($request) {
            $mail->from($request->gmail,$request->name);
            $mail->to('nguyentienbeewings@gmail.com')->subject('Booking Contact');
        });

        return redirect('/');
    }
}
