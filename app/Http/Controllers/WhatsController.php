<?php

namespace App\Http\Controllers;

use App\Schools;
use Illuminate\Http\Request;

class WhatsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $schools = Schools::all();

        return view('whats.index', compact('schools'));
    }
    
    public function add()
    {
        return view('whats.add');
    }

    public function save(Request $request) {
        Schools::create($request->all());
    }

    public function show(Schools $school) {
        return view('whats.show', compact('school'));
    }

}
