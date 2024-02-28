@extends('frontend.layout.layout')
@section('content')

<div class="container">
    <div class="row">
        @if (isset($yes))
            <div style="background-color: green">
                <h5 style="color: white;">{{  $yes }}</h5>
            </div>
        @endif

        @if (isset($no))
            <div style="background-color: green">
                <h5 style="color: white;">{{  $no }}</h5>
            </div>
        @endif
    </div>
</div>


<!-- section -->
<div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4"  >
            <h3 style="color: blue;">Kitap Kaydınızı Yapınız</h3>
            <form action="{{route('form.kaydet')}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Kitap Adı :</label>
                  <input type="text" class="form-control" name="kitap_adi">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kitap Yazarı :</label>
                    <input type="text" class="form-control" name="kitap_yazari">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kitap Kategorisi:</label>
                    <select name="kitap_kategori" class="form-select" aria-label="Default select example">

                        <option selected>Kategorinizi Seçin</option>
                        <?php foreach ($veri as $value) { ?>
                            <option value="{{$value->id}}">{{$value->kategori_name}}</option>
                        <?php } ?>

                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Kaydet</button>
            </form>
            <br>
            <button type="button" class="btn btn-success"><a href="{{route('kitap.islem.liste')}}" style="color: white; text-decoration:none;">Kitap Listesi</a></button>
        </div>
        <div class="col-4"></div>
    </div>
</div>


@endsection
