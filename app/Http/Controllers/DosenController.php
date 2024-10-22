<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
        public function index(){
            $nama="Riyan Juliansah";

            $pelajaran = ["Tkj bu nuni & Tkj pak ade","tkj bu  enjang","tkj pak aul"];

            return view('biodata',['nama' => $nama , 'matkul' => $pelajaran]);



        }
    }
