@extends("layouts.app")

@section("content")
    <h1>Data Pelanggan</h1>
    <a href={{ route('costumer.create') }} class="btn btn-success">Tambah Pelanggan</a>
    <div class="col-sm-12">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No-Costumer</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Nama Agen</th>
                    <th>Nama Paket</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($costumers as $costumer)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $costumer->no_costumer }}</td>
                        <td>{{ $costumer->nama }}</td>
                        <td>{{ $costumer->alamat}}</td>
                        <td>{{ $costumer->no_telepon }}</td>
                        <td>{{ $costumer->no_agent }}</td>
                        <td>{{ $costumer->paket->nama_paket }}</td>
                        <td>
                            <a href="{{route('costumer.edit', $costumer->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td><form action="{{ route('costumer.destroy', $costumer->id) }}" method="post">
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

