@extends('welcome')

@section('content')
<div class="Header">
    <h1><center>Setting</center></h1>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">INI BAGIAN Setting</div>

                <div class="card-body">
                    @foreach($user as $row)
                        Nama : {{$row->name}}<br>
                        Email : {{$row->email}}<br>
                        <a href="#" type="button">Edit</a>    
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
