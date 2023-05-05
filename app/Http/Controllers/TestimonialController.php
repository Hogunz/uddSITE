<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::get();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function academics()
    {
        $testimonials = Testimonial::get();
        return view('academics', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonials.create');
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

        $testimonial = new Testimonial;
        $testimonial->name = $request->input('name');
        $testimonial->image = $imageName;
        $testimonial->course = $request->input('course');
        $testimonial->latin = $request->input('latin');
        $testimonial->position = $request->input('position');
        $testimonial->place = $request->input('place');
        $testimonial->content = $request->input('content');

        $testimonial->user_id = Auth::id();
        $testimonial->save();

        return redirect()->route('testimonials.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
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
            $testimonial->image = $imagePath;
        }

        $testimonial->name = $request->name;
        $testimonial->course = $request->course;
        $testimonial->latin = $request->input('latin');
        $testimonial->position = $request->input('position');
        $testimonial->place = $request->input('place');
        $testimonial->content = $request->input('content');
        $testimonial->save();

        return redirect()->route('testimonials.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->route('testimonials.index');
    }
}
