<?php

namespace App\Http\Controllers;


use App\Models\kitap;
use App\Models\kategori;
use Illuminate\Http\Request;

class PageFormController extends Controller
{

    public function formsave(Request $request){

        if ($request->kitap_adi=="" || $request->kitap_yazari=="" || $request->kitap_kategori=="" ) {

            $data['olmadi']="Bir Sıkıntı Oluştu Tekrar Deneyiniz";
            return view('frontend.pages.form', $data);
        }

        if ($request->kitap_adi!="" || $request->kitap_yazari!="" || $request->kitap_kategori!="" ) {

            $veri=new kitap();
            $veri->kitap_name=$request->kitap_adi;
            $veri->kitap_yazari=$request->kitap_yazari;
            $veri->kitap_kategori=$request->kitap_kategori;
            $kontrol=$veri->save();

            if ($kontrol==1) {

                $data['yes']="İşleminiz Başarıyla Yapıldı";
                $data['veri']=kategori::all();
                return view('frontend.pages.form', $data);
            }
            if ($kontrol!=1) {

                $data['no']="Bir Sıkıntı Oluştu";
                $data['veri']=kategori::all();
                return view('frontend.pages.form', $data);
            }
        }



    }
}
