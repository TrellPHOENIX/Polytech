<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicants;

class ApplicantsController extends Controller
{
    public function index()
    {
        return view('/studentsForm');
    }
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|unique:posts|max:255',
            'tel' => 'required',
            'email' => 'required',
            'specialty' => 'required',
        ]);
        $post = new Applicants;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect('/studentsForm')->with('status', 'Blog Post Form Data Has Been inserted');
    }
}
