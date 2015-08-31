<?php

namespace App\Http\Controllers;

class MoviesController extends Controller
{

    public function index()
    {
        $datas = [
            'title' => 'Liste des acteurs',
            'acteurs' => [
                ['nom' => 'Boyer', 'prenom' => 'Julien', 'age' => 45, 'ville' => 'Lyon'],
                ['nom' => 'Trilliat', 'prenom' => 'Jessy', 'age' => 21, 'ville' => 'Lyon'],
                ['nom' => 'Lesne', 'prenom' => 'Mathieu', 'age' => 37, 'ville' => 'Lyon'],
                ['nom' => 'dontknow', 'prenom' => 'Aurelien', 'age' => 25, 'ville' => 'Lyon'],
                ['nom' => 'De Brito', 'prenom' => 'Thais', 'age' => 12, 'ville' => 'Paris'],
                ['nom' => 'jesaispas', 'prenom' => 'Marjorie', 'age' => 26, 'ville' => 'Paris'],
                ['nom' => 'quelquechose', 'prenom' => 'Mustafa', 'age' => 31, 'ville' => 'Paris'],
            ]

        ];

        return view('Movies/index', $datas);
    }

    public function create()
    {
        return view('Movies/create');
    }

    public function read($id)
    {
        return view('Movies/read', ['id' => $id]);
    }

    public function update($id)
    {
        return view('Movies/update', ['id' => $id]);
    }

    public function delete($id)
    {
        return view('Movies/delete', ['id' => $id]);
    }
}