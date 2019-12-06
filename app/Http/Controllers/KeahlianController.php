<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Keahlian;

class KeahlianController extends Controller
{
    public function index()

    {

        $keahlians = Keahlian::all();

        return view('keahlian.index', ['keahlians' => $keahlians]);

    }
}
