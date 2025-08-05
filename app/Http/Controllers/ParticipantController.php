<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;


class ParticipantController extends Controller
{
     public function addParticipant(){
        return view('ourteam.participant');
    }


      public function newUserview(){
        return view('ourteam.index');
    }

    public function createParticipant(Request $request){

        $post = new Participant();
        $post->name = $request->prodname;
        $post->description = $request->proddesc;
        $post->save();
        return back()->with('post_created', 'Post created successfully');

    }


    
     public function viewParticipants(){

        $part = Participant::orderBy('id','DESC')->get();
        return view('ourteam.allparticipants', compact('part'));
        //compact in this context takes the variable 'part' and displays the value in a table
    }
}
