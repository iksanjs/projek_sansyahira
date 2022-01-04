@extends("layouts.app")

@section("content")

<div class ="col-md-8 offset-md-2">
    <h3>Tambah Pelanggan</h3>

    @if ($errors->any())
        <div class="allert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
    @endif

    <form method="post" action="{{ route('costumer.store') }}">
        @csrf
        <div class="form-group">
          <label for="no_costumer">No-Costumer</label>
          <input type="text" class="form-control" name="no_costumer">
        </div>
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" name="nama">
        </div>
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <input type="text" class="form-control" name="alamat">
        </div>
        <div class="form-group">
            <label for="no_telepon">No Telepn</label>
            <input type="text" class="form-control" name="no_telepon">
        </div>
        <div class="form-group">
            <label for="no_agent">No-Agent</label>
            <input type="text" class="form-control" name="no_agent">
        </div>
        <div class="form-group">
            <label for="no_paket">No-Paket</label>
            <input type="text" class="form-control" name="no_paket">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Simpan">
        </div>
      </form>
    </div>
@stop