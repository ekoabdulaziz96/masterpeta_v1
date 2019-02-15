@extends('welcome')

@section('content')
<div class="container-header col-md-12">
    <h1><center>Mulailah Belajar dan Kejar Suksesmu!</center></h1>
</div><br>
@foreach($lesson as $row)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$row->chapter}}</div>
                    <div class="card-body">
                        <p>{{$row->deskripsi}}</p>
                        <a href="{{$id_course}}/{{$row->id}}" type="button">Mulai Belajar</a>
                    </div>
                </div>
        </div>
    </div>
</div><br>
@endforeach
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Discuss Room</div>
                    <div class="card-body">
                        <p>Diskusikan apa saja yang belum jelas bagi anda.</p>
                        <a href="discuss" type="button">Mulai Diskusi</a>
                    </div>
                </div>
        </div>
    </div>
</div><br>
@endsection
