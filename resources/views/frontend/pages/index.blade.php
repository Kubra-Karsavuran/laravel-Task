@extends('frontend.layout.layout')
@section('content')


<div class="container">
    <div class="row">
        <h3 style="color:blue;">Listelemek İstediğiniz Kitap Kategorisini Seçin</h3>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Kategoriler
            </button>
            <ul class="dropdown-menu">

            <?php foreach ($veri as $value) { ?>

                <li><a class="dropdown-item" href="{{route('kitap.liste', $value->id)}}">{{$value->kategori_name}}</a></li>

            <?php } ?>

            </ul>
        </div>
    </div>
</div>





@endsection

