<?php

namespace App\Http\Controllers;

use App\Models\veri;
use Illuminate\Http\Request;

class PageFormController extends Controller
{
    public function formsave(Request $request){

        if ($request->kabul == "on") {
            $veri=new veri();
            $veri->name=$request->name;
            $veri->surname=$request->surname;
            $veri->age=$request->age;
            $veri->kabul="1";
            $kontrol=$veri->save();
            if ($kontrol==1) {
                $yes="İşleminiz Başarıyla Yapıldı";
                return view('frontend.pages.index', compact('yes'));
            }
            if ($kontrol!=1) {
                $no="Malesef Tekrar Deneyin";
                return view('frontend.pages.index', compact('no'));
            }

        }

        if ($request->kabul != "on") {
            $veri=new veri();
            $veri->name=$request->name;
            $veri->surname=$request->surname;
            $veri->age=$request->age;
            $veri->kabul="0";
            $kontrol=$veri->save();
            if ($kontrol==1) {
                $yes="İşleminiz Başarıyla Yapıldı";
                return view('frontend.pages.index', compact('yes'));
            }
            if ($kontrol!=1) {
                $no="Malesef Tekrar Deneyin";
                return view('frontend.pages.index', compact('no'));
            }
        }

    }
}
