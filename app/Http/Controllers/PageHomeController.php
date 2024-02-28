<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class PageHomeController extends Controller
{
    // ana sayfa aç
    public function index(){
        $data['veri']=kategori::all();
        return view('frontend/pages/index', $data);
    }

    // panel aç
    public function panel_open(){
        $data['veri']=kategori::all();
        return view('frontend.pages.form', $data);
    }



}
