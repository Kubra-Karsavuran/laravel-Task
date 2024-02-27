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
            <form action="{{route('form.kaydet')}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Adınız:</label>
                  <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Soyadınız:</label>
                    <input type="text" class="form-control" name="surname">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Yaşınız:</label>
                    <input type="number" class="form-control" name="age">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" name="kabul">
                  <label class="form-check-label" for="exampleCheck1">Sözleşmeyi Kabul Ediyorum</label>
                </div>
                <button type="submit" class="btn btn-primary">Kaydet</button>
            </form>
            <br>
            <button type="submit"  class="btn btn-success"><a style="color:white; text-decoration:none;  " href="{{route('liste.ok')}}">Sözleşmeyi Kabul Edenler</a></button>
            <button type="submit"  class="btn btn-danger"><a style="color:white; text-decoration:none; " href="{{route('liste.no')}}">Sözleşmeyi Kabul Etmeyenler</a></button>

        </div>
        <div class="col-4"></div>
    </div>
</div>


@endsection
