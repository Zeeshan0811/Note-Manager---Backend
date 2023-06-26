<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Note::orderBy('created_at', 'desc')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            // 'user_id' => 'required'
        ]);

        // return Note::create($request->all() + ['user_id' => auth()->user()->id]);
        return Note::create($request->all() + ['user_id' => 1]);

        // $note_data['user_id'] = auth()->user()->id;
        // return Note::create($note_data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Note::find($id);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function view($slug)
    {
        return Note::find($slug);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $note = Note::find($id);
        $note->update($request->all());

        return $note;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Note::destroy($id);
    }


    /**
     * Search for the note title
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search($key)
    {
        return Note::where('title', 'like', '%' . $key . '%')->get();
    }
}
