<?php

namespace App\Http\Controllers;

use App\models\Rute;
use Illuminate\Http\Request;

class RuteController extends Controller
{
    public function MenampilkanData()
    {
        return view('rutecontroller');
    }
    
    public function MenampilkanDataModel()
    {
        $namaSekolah = Rute::$namaSekolah;
        return view('rutemodel', compact('namaSekolah'));
    }


}
