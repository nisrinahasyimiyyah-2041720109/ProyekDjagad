@extends('layout.dashboard.main')
@section('content')

  <div class="col-lg-8 mx-5 mt-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Data User</h1>
      </div>
      <form method="post" action="/admin/datauser" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
                <label for="user_id">Nama User*</label>
                <select name="user_id" id="user_id" class="form-control select2" required>
                    @foreach($users as $id => $user)
                        <option value="{{ $id }}" {{ old('user_id') == $id ? 'selected' : '' }}>{{ $user }}</option>
                    @endforeach
                </select>
                @if($errors->has('user_id'))
                    <p class="help-block">
                        {{ $errors->first('user_id') }}
                    </p>
                @endif
            </div>
        <div class="mb-3">
          <label for="telepon" class="form-label">Telepon</label>
          <input type="text" class="form-control @error('telepon') is-invalid @enderror" id="telepon" name="telepon" value="{{ old('telepon') }}">
            @error('telepon')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}">
              @error('alamat')
              <div class="invalid-feedback">
              {{ $message }}
              </div>
              @enderror
          </div>
          <div class="mb-3">
            <label for="kavling" class="form-label">Kavling</label>
            <input type="text" class="form-control @error('kavling') is-invalid @enderror" id="kavling" name="kavling" value="{{ old('kavling') }}">
              @error('kavling')
              <div class="invalid-feedback">
              {{ $message }}
              </div>
              @enderror
          </div>
          <div class="mb-3">
            <label for="tipe" class="form-label">tipe</label>
            <input type="tipe" class="form-control @error('tipe') is-invalid @enderror" id="tipe" name="tipe">
              @error('tipe')
              <div class="invalid-feedback">
              {{ $message }}
              </div>
              @enderror
          </div>
          <div class="mb-3">
            <label for="spk" class="form-label">spk</label>
            <input type="spk" class="form-control @error('spk') is-invalid @enderror" id="spk" name="spk">
              @error('spk')
              <div class="invalid-feedback">
              {{ $message }}
              </div>
              @enderror
          </div>
          <div class="mb-3">
            <label for="progres" class="form-label">progres</label>
            <input type="progres" class="form-control @error('progres') is-invalid @enderror" id="progres" name="progres">
              @error('progres')
              <div class="invalid-feedback">
              {{ $message }}
              </div>
              @enderror
          </div>
          <div class="mb-3">
            <label for="cicilan" class="form-label">cicilan</label>
            <input type="cicilan" class="form-control @error('cicilan') is-invalid @enderror" id="cicilan" name="cicilan">
              @error('cicilan')
              <div class="invalid-feedback">
              {{ $message }}
              </div>
              @enderror
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>

  <script>

    function previewImage(){
      const image = document.querySelector('#photo');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
      }

    }
    
  </script>

@endsection