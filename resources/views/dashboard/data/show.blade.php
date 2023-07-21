@extends('layout.dashboard.main')

@section('content')
  
<div class="container my-5">
    <div class="row justify-content-center align-items-center">
        <div class="card"  style="width: 30rem;">
            @if ($user->photo == null)
                
            @else
                <img src="{{ asset('storage/' . $user->photo) }}" class="card-img-top" alt="{{ $user->name }}">
            @endif
            
            <div class="card-header ">
              Detail  Member
            </div>
            <div class="card body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>ID :  </b>{{ $data->id }}</li>
                    <li class="list-group-item"><b>Nama : </b>{{ $data->nama }}</li>
                    <li class="list-group-item"><b>Telepon : </b>{{ $data->telepon }}</li>
                    <li class="list-group-item"><b>Alamat : </b>{{ $data->alamat }}</li>
                    <li class="list-group-item"><b>Kavling : </b>{{ $data->kavling }}</li>
                    <li class="list-group-item"><b>Tipe : </b>{{ $data->tipe }}</li>
                    <li class="list-group-item"><b>SPK : </b>{{ $data->spk }}</li>
                    <li class="list-group-item"><b>Progres : </b>{{ $data->progres }}</li>
                    <li class="list-group-item"><b>Cicilan : </b>{{ $data->cicilan }}</li>
            </div>
            <a class="btn btn-success mt-3 mb-3" href="/admin/datauser">kembali</a>
        </div>
    </div>
</div>


@endsection
