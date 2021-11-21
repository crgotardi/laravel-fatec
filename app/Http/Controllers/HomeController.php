<?php

namespace App\Http\Controllers;
use App\Models\Editora;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $editoras = Editora::all();
        return view('welcome')->with('editoras', $editoras);
    }
}
