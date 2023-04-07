<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.dasboard');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show_postingan()
    {
        return view ('admin.postingan');
    }

    public function show_profil()
    {
        return view ('admin.profil');
    }

    public function show_beritaterkini()
    {
        return view ('admin.beritaterkini');
    }

    public function show_todolist()
    {
        return view ('admin.todolist');
    }
    public function show_randomshits()
    {
        return view ('admin.randomshits');
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
