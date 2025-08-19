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

       public function edit(Participant $participant){

         return view('ourteam.edit', ['participant' => $participant]);

        
    }

         public function update(Participant $participant, Request $request){

     $request->validate([
'prodname' => 'required',
'proddesc' => 'required'
     ]);


     $participant->update([

        'name' => $request->prodname,
        'description' => $request->proddesc


     ]);

        //return back()->with('post_created', 'Post created successfully');

    return redirect()->route('rxx')->with('success', 'Data Updated Successfully');

        
    }

        public function destroy($id){

        $part = Participant::findOrFail($id);
        $part->delete();
        return redirect()->route('rxx')->with('success', 'Post deleted succesfully');
        
    }

}
