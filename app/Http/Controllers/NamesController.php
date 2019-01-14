<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Name;

class NamesController extends Controller
{
    public function index()
    {
        $names = Name::where('first_name', 'like', '%e%')->get();
        dump($names);
    }

    public function show($id)
    {
        $names = Name::find($id);
        dd($names->fio);
    }
}
