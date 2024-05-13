@extends('layouts.main')

@section('content')

<script src=""></script>

<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Registrasi</h4>
        <ul class="breadcrumbs">
          <li class="nav-home">
            <a href="{{ route('dashboard') }}">
              <i class="flaticon-home"></i>
            </a>
          </li>
          <li class="separator">
            <i class="flaticon-right-arrow"></i>
          </li>
          <li class="nav-item">
            <a href="#">Data tour</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-12 col-md-6" style="display: block; margin-left: auto; margin-right: auto;">
        <div id="reader" width="600px"></div>
    </div>
      </div>
      <form action="{{ url('/registrasi/store') }}" method="POST">
        @csrf
      <div class="row">
        <div class="col-12 form-control mt-5">
          <input type="text" name="nama_peserta" id="nama_peserta" class="form-control">
      </div>
      <div class="mt-3 col-12">
        <button class="btn btn-success mt-3" id="konfirmasi" style="display: block; margin-left: auto; margin-right: auto;">SUBMIT</button>
        </div>
      </form>
    </div>
  </div>
  
</div>

@push('scripts')
{{-- <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
 --}}
<script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
<script>
  
  
  
  function onScanSuccess(decodedText, decodedResult) {
  // handle the scanned code as you like, for example:
//   console.log(`Code matched = ${decodedText}`, decodedResult);
$('#nama_peserta').val(decodedText);

  }


function onScanFailure(error) {
  // handle scan failure, usually better to ignore and keep scanning.
  // for example:
//   console.warn(`Code scan error = ${error}`);
}

let html5QrcodeScanner = new Html5QrcodeScanner(
  "reader",
  { fps: 10, qrbox: {width: 250, height: 250} },
  /* verbose= */ false);
html5QrcodeScanner.render(onScanSuccess, onScanFailure);

// let id = decodedText
  
//   csrf_token = $('meta[name="csrf-token"]').attr('content');

// 	Swal.fire({
// 	  title : 'contoh',
// 	  text : 'contoh1',
// 	  type : 'warning',
// 	  showCancelButton : true,
// 	  confirmbuttonColor : '#3085d6',
// 	  cancelButtonColor : '#d33',
// 	  confirmButtonText : 'contoh2' 
// 	}).then((result) => {
// 		if(result.value){
// 		  $.ajax({
// 			url : "{{ route('qrcode') }}",
// 			type : 'POST',
// 			data : {
// 				'_method' : 'DELETE',
// 				'_token'  : csrf_token,
// 				'qr_code' : id
// 			},
// 			success: function(response){
// 			  Swal.fire({
// 				icon  : 'success',
// 				type  : 'success',
// 				title : 'success',
// 				text  : 'contoh3'
// 			  });
// 			},
// 			error: function(xhr){
// 			  Swal.fire({
// 				type  :'error',
// 				title : 'contoh4',
// 				text  :'contoh5'
// 			  })
// 			}
// 		  })
// 		}
//   })



    </script>
@endpush

@endsection

