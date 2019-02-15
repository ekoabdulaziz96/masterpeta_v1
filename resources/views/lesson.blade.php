@extends('welcome')

@section('content')
<div class="Header">
    <h1><center>Katalog Pembelajaran</center></h1>
</div>
<div class="search-bar">
<center>
<input type="text" placeholder="Cari Kebutuhan Anda di Sini..">
<button>Cari</button>
</center>
</div><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @foreach($course as $row)
                <div class="card-header">{{$row->subjek}}</div>
                <div class="card-body">
                    <p>{{$row->deskripsi}}</p>
                    <a href="lesson/{{$row->id}}" type="button"> Klik Disini </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div><br>
@endsection
