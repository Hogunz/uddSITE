<?php

namespace App\Http\Controllers;

use App\Models\Testimony;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestimonyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonies = Testimony::get();
        return view('admin.testimonies.index', compact('testimonies'));
    }

    public function academics()
    {
        $testimonies = Testimony::all();
        return view('academics', compact('testimonies'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonies.create');
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
            'name' => 'required|string|max:255',
            'image' => 'required|image',
            'course' => 'required',
            'latin' => 'nullable',
            'position' => 'required',
            'place' => 'required',
            'content' => 'required',
        ]);

        $imagePath = $request->file('image')->store('public');
        $imageName = basename($imagePath);

        $testimony = new Testimony;
        $testimony->name = $request->input('name');
        $testimony->image = $imageName;
        $testimony->course = $request->input('course');
        $testimony->latin = $request->input('latin');
        $testimony->position = $request->input('position');
        $testimony->place = $request->input('place');
        $testimony->content = $request->input('content');

        $testimony->user_id = Auth::id();
        $testimony->save();

        return redirect()->route('testimonies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function show(Testimony $testimony)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimony $testimony)
    {
        return view('admin.testimonies.edit', compact('testimonies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimony $testimony)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'course' => 'nullable',
            'latin' => 'nullable',
            'position' => 'nullable',
            'place' => 'nullable',
            'content' => 'nullable',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('events', 'public');
            $testimony->image = $imagePath;
        }

        $testimony->name = $request->name;
        $testimony->course = $request->course;
        $testimony->latin = $request->input('latin');
        $testimony->position = $request->input('position');
        $testimony->place = $request->input('place');
        $testimony->content = $request->input('content');
        $testimony->save();

        return redirect()->route('testimonies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimony $testimony)
    {
        $testimony->delete();
        return redirect()->route('testimonies.index');
    }
}
