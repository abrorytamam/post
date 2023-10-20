<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comment;

class commentcontroller extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
        'post_id' => 'required',
        'komentar' =>'required'
        
    ]);
    
    $komentar = comment::create([
        'post_id' => $request->post_id,
        'komentar' => $request->komentar
    ]);

    return redirect('/posts/show/'.$request->post_id)
    ->with(['success' => 'komentar berhasil ditambah']);
    }
}