@extends("layouts.app")

@section("content")

<div class ="col-md-8 offset-md-2">
    <h3>Tambah Pembayaran</h3>

    @if ($errors->any())
        <div class="allert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
    @endif

    <form method="post" action="{{ route('pembayaran.store') }}">
        @csrf
        <div class="form-group">
          <label for="no_pembayaran">No-Pembayaran</label>
          <input type="text" class="form-control" name="no_pembayaran">
        </div>
        <div class="form-group">
          <label for="no_costumer">Nama Costumer</label>
          <select name="no_costumer" class="form-control">
              @foreach ($costumers as $costumer)
                <option value="{{ $costumer->id }}">{{ $costumer->nama}}</option>
              @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="tgl_pembayaran">Tanggal pembayaran</label>
          <input type="date" class="form-control" name="tgl_pembayaran">
        </div>
        <div class="form-group">
          <label for="bayar">Harga</label>
          <input type="text" class="form-control" name="bayar">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Simpan">
        </div>
      </form>
    </div>
@stop