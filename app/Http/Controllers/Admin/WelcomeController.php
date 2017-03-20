<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Welcome;

class WelcomeController extends Controller
{
    public function index()
    {
        $welcomes = Welcome::all();
        return view('admin.welcome.index', compact('welcomes'));
    }

    public function create()
    {
        return view('admin.welcome.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        $welcome = Welcome::first();

        if (!$welcome) {
            $welcome = new Welcome();
        }

        $welcome->title = request('title');
        $welcome->body = request('body');
        $welcome->save();

        return redirect()->route('welcome.show');
    }

    public function show()
    {
        $welcome = Welcome::first();

        if (! $welcome) {
            return redirect()->route('welcome.create');
        }

        return view('admin.welcome.show', compact('welcome'));
    }

    public function edit(Welcome $welcome)
    {
        return view('admin.welcome.edit', compact('welcome'));
    }

    public function delete(Welcome $welcome)
    {
        $welcome->delete();
        return redirect()->route('welcome.show');
    }
}
