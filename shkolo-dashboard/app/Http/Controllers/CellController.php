<?php

namespace App\Http\Controllers;

use App\Models\Cell;
use Illuminate\Http\Request;

class CellController extends Controller
{
    public function index() { 
        
        $cells = Cell::all();
        return view('cells.index', ['cells' => $cells]);

    }

    public function edit(Cell $cell){ 

        return view('cells.edit', ['cell' => $cell]);
        
    }

    public function update(Cell $cell, Request $request)
    {
        
        $data = $request->all();
        //Possible validation
        $cell->update($data);
    
        return redirect(route('cells.index'));
    }
}
