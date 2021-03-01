<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class DocumentsController extends Controller
{
    public function biot(){
        $bread = 'БиОТ';
        switch (App::getLocale()){
            case 'en':
                $bread = 'BiOT';
                break;
            case 'kz':
                $bread = 'БиОТ';
                break;
        }
        $data['breadcrumbs'] = [$bread];
        return view('docs.template', $data);
    }
    public function antiterror(){
        $bread = 'Антитеррор';
        switch (App::getLocale()){
            case 'en':
                $bread = 'Antiterror';
                break;
            case 'kz':
                $bread = 'Антитеррор';
                break;
        }
        $data['breadcrumbs'] = [$bread];
        return view('docs.template', $data);
    }
    public function paramedika(){
        $bread = 'Парамедика';
        switch (App::getLocale()){
            case 'en':
                $bread = 'Paramedika';
                break;
            case 'kz':
                $bread = 'Парамедика';
                break;
        }
        $data['breadcrumbs'] = [$bread];
        return view('docs.template', $data);
    }
    public function ptm(){
        $bread = 'ПТМ';
        switch (App::getLocale()){
            case 'en':
                $bread = 'PTM';
                break;
            case 'kz':
                $bread = 'ПТМ';
                break;
        }
        $data['breadcrumbs'] = [$bread];
        return view('docs.template', $data);
    }
    public function sez(){
        $bread = 'СЭЗ';
        switch (App::getLocale()){
            case 'en':
                $bread = 'SEZ';
                break;
            case 'kz':
                $bread = 'СЭЗ';
                break;
        }
        $data['breadcrumbs'] = [$bread];
        return view('docs.template', $data);
    }
}
