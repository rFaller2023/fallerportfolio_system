<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Webinar;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class BlogController extends Controller
{
  /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $blog = Blog::get();
        return view('blog.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate(([
            'image' => 'required',
            'title' => 'required',
            'content' => 'required',
        
        ]));

        if($request->hasFile('image')){
            $image = $request->file('image');
            $imagePath = $image->store('img', 'public');
            $data['image'] = $imagePath;
        }

       Blog::create($data);
       return redirect()->route('blogs.index');
     
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
    public function edit(Blog $blog)
    {
        
        return view('blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog): RedirectResponse
    {
        $data = $request->validate(([
            'image' => 'required',
            'title' => 'required',
            'content' => 'required',
        
        ]));

        if($request->hasFile('image')){
            $image = $request->file('image');
            $imagePath = $image->store('img', 'public');
            $data['image'] = $imagePath;
        }

        
       $blog->update($data);
       return redirect()->route('blogs.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog): RedirectResponse
    {
        //
        $blog->delete();

        return redirect()->route('blogs.index');
    }
}

