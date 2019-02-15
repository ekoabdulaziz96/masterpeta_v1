@extends('homeprofile')

@section('content')
<div class="header">
    <h1><center>Jasa Kami</center></h1>
</div>
<div class="container">
    <div class="">
        <p style="justify   ">Kami menyediakan .....</p>
        <a href="#">Baca Disini</a>
    </div>
</div>
<div class="container row justify-content-center">
    <div class="card-header col-md-8">
        Form Pemesanan Jasa
    </div>
    <div class="card-bodyrow justify-content-center">
        <div class="col-md-12">
            <form>
                <div class="form-group row">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group row">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-check row">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    INI BAGIAN JASA
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
