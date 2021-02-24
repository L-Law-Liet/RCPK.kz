<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentsController extends Controller
{
    public function biot(){
        $data['breadcrumbs'] = ['БиОТ'];
        return view('docs.biot', $data);
    }
    public function antiterror(){
        $data['breadcrumbs'] = ['Антитеррор'];
        return view('docs.antiterror', $data);
    }
    public function paramedika(){
        $data['breadcrumbs'] = ['Парамедика'];
        return view('docs.paramedika', $data);
    }
    public function ptm(){
        $data['breadcrumbs'] = ['ПТМ'];
        return view('docs.ptm', $data);
    }
    public function sez(){
        $data['breadcrumbs'] = ['СЭЗ'];
        return view('docs.sez', $data);
    }
}
