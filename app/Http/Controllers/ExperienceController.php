<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class ExperienceController extends Controller
{
  /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $experiences = Experience::get();
        return view('experience.index', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(auth()->user()->role =="spectator"){
            return abort(403, 'Denied Access');
        }
        return view('experience.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate(([
            'image' => 'required',
            'year' => 'required',
            'details' => 'required',
            'title' => 'required',
        ]));

        if($request->hasFile('image')){
            $image = $request->file('image');
            $imagePath = $image->store('img', 'public');
            $data['image'] = $imagePath;
        }


       Experience::create($data);
       return redirect()->route('experiences.index');
     
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        if(auth()->user()->role =="spectator"){
            return abort(403, 'Denied Access');
        }
        return view('experience.edit', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience): RedirectResponse
    {
        $data = $request->validate(([
            'image' => 'required',
            'year' => 'required',
            'details' => 'required',
            'title' => 'required',
        ]));

        if($request->hasFile('image')){
            $image = $request->file('image');
            $imagePath = $image->store('img', 'public');
            $data['image'] = $imagePath;
        }



       $experience->update($data);

       return redirect()->route('experiences.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience): RedirectResponse
    {
        //
        $experience->delete();

        return redirect()->route('experiences.index');
    }
}

