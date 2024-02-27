@extends('frontend.layout.layout')
@section('content')

<!-- section -->
<div class="container">
@if (!empty($veri) && $veri->count() > 0)
<?php $sayac=0; foreach ($veri as $value) { $sayac++; ?>
    <div class="row">
        <div style="text-align: center" class="col-4"> <h1> <b> <?php echo $sayac; ?></b>  </h1> </div>
        <div class="col-4" style="text-align: center">
            <p>İsim : <?php echo $value->name; ?> </p>
            <p>Soyisim :  <?php echo $value->surname; ?> </p>
            <p>Yaş :  <?php echo $value->age; ?> </p>
            <a href="{{route('veri.sil', $value->id )}}" class="btn btn-danger" >Sil</a>

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
