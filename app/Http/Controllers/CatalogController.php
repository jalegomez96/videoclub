<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    //
    public function getIndex()
    {
        $arrayPeliculas = Movie::all();
        return view('catalog.index', array('arrayPeliculas' => $arrayPeliculas));
    }
    public function getShow($id)
    {
        $pelicula = Movie::findOrFail($id);
        return view('catalog.show', array('pelicula' => $pelicula));
    }
    public function getCreate()
    {
        return view('catalog.create');
    }
    public function getEdit($id)
    {
        $pelicula = Movie::findOrFail($id);
        return view('catalog.edit', array('pelicula' => $pelicula));
    }
    public function postCreate(Request $pelicula)
    {
        $p = new Movie;
        $p->title = $pelicula['title'];
        $p->year = $pelicula['year'];
        $p->director = $pelicula['director'];
        $p->poster = $pelicula['poster'];
        $p->synopsis = $pelicula['synopsis'];
        $p->save();
        return redirect('/catalog/show/' . $p->id);
    }
    public function putEdit(Request $pelicula)
    {
        $p = Movie::findOrFail($pelicula['id']);;
        $p->title = $pelicula['title'];
        $p->year = $pelicula['year'];
        $p->director = $pelicula['director'];
        $p->poster = $pelicula['poster'];
        $p->synopsis = $pelicula['synopsis'];
        $p->save();
        return redirect('/catalog/show/' . $p->id);
    }
}
