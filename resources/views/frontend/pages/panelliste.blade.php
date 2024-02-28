@extends('frontend.layout.layout')
@section('content')


<!-- section -->
<div class="container">
@if (!empty($veri) && $veri->count() > 0)
<?php $sayac=0; foreach ($veri as $value) { $sayac++; ?>
    <div class="row">
        <div style="text-align: center" class="col-4"> <h1> <b> <?php echo $sayac; ?></b>  </h1> </div>
        <div class="col-4" style="text-align: center">
            <p>Kitap Adı : <?php echo $value->kitap_name; ?> </p>
            <p>Kitap Yazarı :  <?php echo $value->kitap_yazari; ?> </p>

            <button type="button" class="btn btn-info"><a href="{{route('kitap.guncelle', $value->id)}}" style="color: white; text-decoration:none;">Kitap Guncelle</a></button>
            <button type="button" class="btn btn-danger"><a href="{{route('kitap.sil', $value->id)}}" style="color: white; text-decoration:none;">Kitabı Sil</a></button>

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
