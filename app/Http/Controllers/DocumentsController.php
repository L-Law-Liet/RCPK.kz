<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentsController extends Controller
{
    public function biot(){
        $data['breadcrumbs'] = ['БиОТ'];
        return view('docs.template', $data);
    }
    public function antiterror(){
        $data['breadcrumbs'] = ['Антитеррор'];
        return view('docs.template', $data);
    }
    public function paramedika(){
        $data['breadcrumbs'] = ['Парамедика'];
        return view('docs.template', $data);
    }
    public function ptm(){
        $data['breadcrumbs'] = ['ПТМ'];
        return view('docs.template', $data);
    }
    public function sez(){
        $data['breadcrumbs'] = ['СЭЗ'];
        return view('docs.template', $data);
    }
}
