@extends('layout.dashboard.main')
@section('content')
   
  
  
  <div class="table-responsive col-lg-8 mx-5 mt-4">
    <a href="/dashboard/product/create" class="btn btn-primary mb-3">Tambah Data User</a>
    <table class="table table-striped table-sm">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data User</h1>
      </div>
        @if (session()->has('success'))
      <div class="alert alert-success col-lg-12" role="alert">
        {{ session('success') }}
      </div>
      @endif
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nama</th>
          <th scope="col">Telepon</th>
          <th scope="col">Alamat</th>
          <th scope="col">Kavling</th>
          <th scope="col">Tipe</th>
          <th scope="col">SPK</th>
          <th scope="col">Progres</th>
          <th scope="col">Cicilan</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($user as $u)
        @if($u->role == 'admin')
          @continue
        @endif
        <tr>
          <td>{{ $u->id }}</td>
          <td>{{ $u->nama }}</td>
          <td>{{ $u->phone }}</td>
          <td>{{ $u->alamat }}</td>
          <td>{{ $u->kavling }}</td>
          <td>{{ $u->tipe }}</td>
          <td>{{ $u->spk }}</td>
          <td>{{ $u->progres }}</td>
          <td>{{ $u->cicilan }}</td>
          <td>
            <a href="/admin/datauser/{{ $u->id }}" class="badge bg-info" style="text-decoration: none;">Show</a>
            <a href="/admin/datauser/{{ $u->id }}/edit" class="badge bg-warning" style="text-decoration: none;">Edit</a>
            <form action="/admin/datauser/{{ $u->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin?')" >Delete</button>
            </form>
          </td>
        </tr>
        @endforeach    
      </tbody>
    </table>
    <div class="d-flex justify-content-center">
      {{ $user->links() }}
    </div>
  </div>

@endsection