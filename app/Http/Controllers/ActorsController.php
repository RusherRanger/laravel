<?php

namespace App\Http\Controllers;

class ActorsController extends Controller
{

    public function index()
    {
        return view('Actors/index');
    }

    public function create()
    {
        return view('Actors/create');
    }

    public function read($id)
    {
        return view('Actors/read', ['id' => $id]);
    }

    public function update($id)
    {
        return view('Actors/update', ['id' => $id]);
    }

    public function delete($id)
    {
        return view('Actors/delete', ['id' => $id]);
    }
}