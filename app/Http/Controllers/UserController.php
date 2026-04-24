<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$users = [
        //    [
        //        'id' => 1,
        //        'name' => 'John Doe',
        //        'email' => 'john@example.com',
        //        'role' => 'admin',
        //    ],
        //    [
        //        'id' => 2,
        //        'name' => 'Jane Doe',
        //        'email' => 'jane@example.com',
        //        'role' => 'user',
        //    ],
        //    [
        //        'id' => 3,
        //        'name' => 'Jane Doe',
        //        'email' => 'jane@example.com',
        //        'role' => 'user',
        //    ],
        //    [
        //        'id' => 4,
        //        'name' => 'Jane Doe',
        //        'email' => 'jane@example.com',
        //        'role' => 'user',
        //    ],
        //    [
        //        'id' => 5,
        //        'name' => 'Jane Doe',
        //        'email' => 'jane@example.com',
        //        'role' => 'user',
        //    ],
        //];
        $users = User::All();
        return view('Users', compact('users'));
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