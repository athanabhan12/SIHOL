@extends('layouts.main')

@section('content')

<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Daftar Hadir Peserta</h4>
        <ul class="breadcrumbs">
          <li class="nav-home">
            <a href="#">
              <i class="flaticon-home"></i>
            </a>
          </li>
          <li class="separator">
            <i class="flaticon-right-arrow"></i>
          </li>
          <li class="nav-item">
            <a href="#">Daftar Hadir</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
              
            </div>
          </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="basic-datatables" class="display table table-striped table-hover" >
                  <thead>

                    <tr>
                    <th>No</th>
                    <th class="text-center">Infor Peserta</th>
                    <th>Status Hadir</th>
                    </tr>

                  </thead>
                  <tbody>

                    @foreach ($kehadiran as $pelanggan)
                        
                    <tr style="text-align: center;">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pelanggan->nama_peserta }}</td>
                        <td>HADIR</td>
                    </tr>

                    @endforeach


                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>

@endsection