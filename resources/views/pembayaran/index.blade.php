@extends("layouts.app")

@section("content")
    <h1>Data Pembayaran</h1>
    <a href={{ route('pembayaran.create') }} class="btn btn-success">Tambah Pembayaran</a>
    <div class="col-sm-12">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No-Paket</th>
                    <th>Nama Paket</th>
                    <th>Harga Paket</th>
                    <th>Keterangan</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pakets as $paket)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $paket->no_paket }}</td>
                        <td>{{ $paket->nama_paket }}</td>
                        <td>{{ $paket->harga_paket}}</td>
                        <td>{{ $paket->keterangan }}</td>
                        <td>
                            <a href="{{route('paket.edit', $paket->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td><form action="{{ route('paket.destroy', $paket->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@stop

