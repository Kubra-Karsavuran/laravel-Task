<?php

namespace App\Http\Controllers;


use App\Models\kitap;
use App\Models\kategori;
use Illuminate\Http\Request;

class PageListeController extends Controller
{

    // kategoriye uygun kıtaplar sayfada yansıtılacak
    public function kitap_liste($kategori_id){
        $data['veri']=kitap::where('kitap_kategori', $kategori_id)->get();
        $data['kategori']=kategori::where('id', $kategori_id)->first();
        return view('frontend.pages.liste', $data );
    }


    // kitap listelerini panelde ac
    public function yansit(){
        $data['veri']=kitap::all();
        return view('frontend.pages.panelliste', $data );
    }

    // kıtap silme işlemi
    public function kitapsil($sil_id){
        $kontrol=kitap::findOrFail($sil_id)->delete();
        return redirect()->back();
    }

    // kıtap guncelleme işlemi
    public function kitapguncelle($guncelle_id){

        $data['kitap']=kitap::where('id', $guncelle_id)->first();
        $data['veri']=kategori::all();

        $kate_id_al=kitap::where('id', $guncelle_id)->first();
        $data['kategori']=kategori::where('id', $kate_id_al->kitap_kategori)->first();

        return view('frontend.pages.kitapguncel', $data);

    }



    // guncelleme işlemi burda mevcut
    public function kitapguncelleform(Request $request){

        $workid=$request->kitap_guncel_id;
        $deneme=kitap::where('id',$workid)->update([
            'kitap_name'=>$request->kitapguncel_adi,
            'kitap_yazari'=>$request->kitapguncel_yazari,
            'kitap_kategori'=>$request->kitapguncel_kategori
        ]);

        if ($deneme==1) {
            $data['veri']=kitap::all();
            return view('frontend.pages.panelliste', $data );
        }else{
            $data['veri']=kitap::all();
            return view('frontend.pages.panelliste', $data );
        }
    }






}
