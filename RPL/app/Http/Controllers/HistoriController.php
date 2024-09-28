<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Histori;
use PhpParser\Node\Stmt\Return_;

class HistoriController extends Controller
{
    public function store(Request $request)
    {
        $histori = new histori();
        $histori->Pemakaian = $request->input('pemakaian');
        $histori->budget = $request->input('budget');

        $histori->save();

        return redirect('/index')->with('success', 'Data berhasil disimpan');
    }
}
