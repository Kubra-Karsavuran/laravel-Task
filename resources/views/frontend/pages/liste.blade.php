@extends('frontend.layout.layout')
@section('content')


<!-- section -->
<div class="container">
    Seçilen Kategori : <?php echo $kategori->kategori_name; ?>
@if (!empty($veri) && $veri->count() > 0)
<?php $sayac=0; foreach ($veri as $value) { $sayac++; ?>
    <div class="row">
        <div style="text-align: center" class="col-4"> <h1> <b> <?php echo $sayac; ?></b>  </h1> </div>
        <div class="col-4" style="text-align: center">
            <p>Kitap Adı : <?php echo $value->kitap_name; ?> </p>
            <p>Kitap Yazarı :  <?php echo $value->kitap_yazari; ?> </p>


            <hr>
        </div>
        <div class="col-4"></div>
    </div>
<?php } ?>
@endif



@if (empty($veri) || $veri->count() < 1 )
    <div class="row">
        <div class="col-4">   </div>
        <div class="col-4" style="text-align: center">
            <p style="color:red;">Kayıtlı Veri Malesef Bulunamadı</p>
        </div>
        <div class="col-4"></div>
    </div>
@endif


</div>
@endsection
