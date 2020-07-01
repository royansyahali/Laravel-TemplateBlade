<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function Index(){
        return view('valueTable.index');
    }

    public function DataTable(){
        return view('valueTable.data-table');
    }
}
