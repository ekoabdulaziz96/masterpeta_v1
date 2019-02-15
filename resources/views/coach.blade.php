@extends('welcome')
@section('content')
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="card col-md-8">
                    <div class="card-header">
                        Form Pendaftaran
                    </div>
                    <div class="card-body">
                        {!! Form::open(array('url' => 'coach/register')) !!}
                            Nama Lengkap        :
                            {{Form::text('nama')}}<br>
                            Nama Panggilan      :
                            {{Form::text('panggilan')}}<br>
                            Email               :
                            {{Form::text('email')}}<br>
                            Nomor Telephone     :
                            {{Form::text('telp')}}<br>
                            Pekerjaan Sekarang  :
                            {{Form::text('c_job')}}<br>
                            Riwayat Pekerjaan   :
                            {{Form::text('h_job')}}<br>
                            Pendidikan Terakhir :
                            {{Form::text('l_stud')}}<br>
                            Keahlian            :
                            {{Form::text('keahlian')}}<br>
                            Rencana materi yang akan diberikan:
                            {{Form::text('materi')}}<br><br>
                            Cantumkan Sertifikat keahlian jika memilikinya (format jpg/jpeg): 
                                {{Form::file('sertif')}}<br><br>

                            {!! Form::submit('Daftar Sekarang') !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection