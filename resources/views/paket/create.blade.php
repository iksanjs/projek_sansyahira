@extends("layouts.app")

@section("content")

<div class ="col-md-8 offset-md-2">
    <h3>Tambah Paket</h3>

    @if ($errors->any())
        <div class="allert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
    @endif

    <form method="post" action="{{ route('paket.store') }}">
        @csrf
        <div class="form-group">
          <label for="no_paket">No-Paket</label>
          <input type="text" class="form-control" name="no_paket">
        </div>
        <div class="form-group">
          <label for="nama_paket">Nama Paket</label>
          <input type="text" class="form-control" name="nama_paket">
        </div>
        <div class="form-group">
          <label for="harga_paket">Harga</label>
          <input type="text" class="form-control" name="harga_paket">
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" id="keterangan" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Simpan">
        </div>
      </form>
    </div>
@stop