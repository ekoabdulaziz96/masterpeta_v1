@extends('welcome')

@section('content')


<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar-nav">
        @foreach($video as $row)
            <div class="collapse bd-links">
                <h3>Ini yang akan kita pelajari kali ini</h3>
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="/lesson/{{$row->id}}/{{$row->id_lesson}}/video={{$row->id}}">{{$row->judul}}</a>
                </li>
            </ul>
        @endforeach
    </nav>
</div>
<div style="margin-left:25%">
    <div class="container" id="konten">
        <!-- {{$row->link}} -->
            <embed controlslist="nodownload" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" style="width: 860px; height: 484px; left: 0px; top: 0px;" src="{{$row->link}}">
            <!-- <iframe width="640" height="360" src="{{$row->link}}"></iframe> -->
            <!-- <iframe width="560" height="315" src="{{$row->link}}Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
    </div>
</div>

<script>
    
</script>
@endsection