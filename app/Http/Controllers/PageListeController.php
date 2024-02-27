<?php

namespace App\Http\Controllers;

use App\Models\veri;
use Illuminate\Http\Request;

class PageListeController extends Controller
{
    public function listeOk(){
        $data['veri']=veri::where('kabul','1')->get();
        return view('frontend.pages.liste', $data);
    }

    public function listeNo(){
        $data['veri']=veri::where('kabul','0')->get();
        return view('frontend.pages.liste', $data);
    }

    public function listeSil($sil_id){
        $kontrol=veri::findOrFail($sil_id)->delete();
        return redirect()->back();
    }


}
