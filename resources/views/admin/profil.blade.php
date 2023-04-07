@extends('admin/layout')

@section('content')
   <!-- Begin Page Content -->
   <div class="container-fluid">

    <!-- Page Heading -->


    <div class="container mb-5">
        <div class="row">
            <div id="poto" class="col-sm-5 text center">
                <img src="{{ asset('img/profil.jpg')}}" class="img-fluid img-responsive" alt="Responsive Image">
            </div>
            <div class="col-sm"></div>
            <div class="col-sm-6 align-self-center">
                <h3>About Me</h3>
                <hr style="height:2px; border:none; color:white; background-color:blue;">
                <p>Halo Saya Serafim Sitorus , saya adalah seorang mahasiswa Universitas Sumatra Utara Dari fakultas Ilmu Komputer dan Teknologi Informasi Program Studi Teknolgi Informasi </p>
                <p>Saya juga Seorang Petarung MMA</p>
            </div>
        </div>
    </div>

    <div><br></div>
    <div><br></div>
    <div><br></div>
    <div><br></div>
    

    <div class="col-sm-10 mb-5" style="margin: auto">
        <h3 class="text-center">SKILL</h3>
        <p style="font-size: 20px;">Mencintaimu</p>
          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        <p style="font-size: 20px;">css</p>
          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        <p style="font-size: 20px;">bootstrap</p>
          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        <p style="font-size: 20px;">php</p>
          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
      </div>

</div>
@endsection('content')