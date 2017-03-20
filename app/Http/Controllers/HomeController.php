<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Image;
use App\Models\Welcome;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $welcome = Welcome::first();
        $images = Image::all();
        $contact = Contact::first();
        return view('home', compact('welcome', 'images', 'contact'));
    }
}
