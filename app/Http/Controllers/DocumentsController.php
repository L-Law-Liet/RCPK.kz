<?php

namespace App\Http\Controllers;

use App\Models\Block;
use App\Models\BlockGoals;
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
        $data['block'] = Block::findOrFail(2);
        $data['goals'] = BlockGoals::where('block_id', $data['block']->id)->get();
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
        $data['block'] = Block::findOrFail(4);
        $data['goals'] = BlockGoals::where('block_id', $data['block']->id)->get();
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
        $data['block'] = Block::findOrFail(5);
        $data['goals'] = BlockGoals::where('block_id', $data['block']->id)->get();
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
        $data['block'] = Block::findOrFail(1);
        $data['goals'] = BlockGoals::where('block_id', $data['block']->id)->get();
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
        $data['block'] = Block::findOrFail(3);
        $data['goals'] = BlockGoals::where('block_id', $data['block']->id)->get();
        $data['breadcrumbs'] = [$bread];
        return view('docs.template', $data);
    }

    public function council(){
        $bread = 'Согласительная комиссия';
        switch (App::getLocale()){
            case 'kz':
                $bread = 'Келісу комиссиясы';
                break;
        }
        $data['block'] = Block::findOrFail(6);
        $data['goals'] = BlockGoals::where('block_id', $data['block']->id)->get();
        $data['breadcrumbs'] = [$bread];
        return view('docs.template', $data);
    }
}
