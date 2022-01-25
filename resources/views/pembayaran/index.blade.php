@extends("layouts.app")

@section("content")
    <h1>Data Pembayaran</h1>
    <a href={{ route('pembayaran.create') }} class="btn btn-success">Tambah Pembayaran</a>
    <div class="col-sm-12">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No-Pembayaran</th>
                    <th>Nama Pelanggan</th>
                    <th>Tanggal Pembayaran</th>
                    <th>Bayar</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pembayarans as $pembayaran)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pembayaran->no_pembayaran }}</td>
                        <td>{{ $pembayaran->costumer->nama }}</td>
                        <td>{{ $pembayaran->tgl_pembayaran}}</td>
                        <td>{{ $pembayaran->bayar }}</td>
                        <td>
                            <a href="{{route('pembayaran.edit', $pembayaran->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td><form action="{{ route('pembayaran.destroy', $pembayaran->id) }}" method="post">
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

