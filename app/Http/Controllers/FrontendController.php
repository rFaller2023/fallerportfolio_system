<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = DB::table('users')->where('email', 'rosemariefaller48@gmail.com')->get();

        $about = DB::table('abouts')->get();
        $skills = DB::table('skills')->get();
        $educationals = DB::table('educationals')->get();
        $experiences = DB::table('experiences')->get();
        $webinars = DB::table('webinars')->get();
        $blogs = DB::table('blogs')->get();
        return view('welcome', compact('about', 'user', 'skills', 'educationals', 'experiences', 'webinars', 'blogs'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
