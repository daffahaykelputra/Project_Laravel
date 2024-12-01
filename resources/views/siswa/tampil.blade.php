@extends('layout')

@section('konten')
<div class="d-flex">
    <h4>List Siswa/Siswi</h4>
    <div class="ms-auto">
        <a class="btn btn-success" href="{{ route('siswa.tambah') }}" style="margin-bottom: 30px">Tambah Data</a>
    </div>
</div>
<!-- Menambahkan style CSS untuk mempertegas tabel -->
<style>
    table {
        width: 100%;
        border-collapse: collapse; 
    }
    td {
        border: 2px solid #000; 
        padding: 12px; 
        text-align: center; 
        font-weight: light; 
    }
    th {
        border: 2px solid #000; 
        padding: 12px; 
        text-align: center;
        background-color: #f4f4f4; 
    }
    td {
        background-color: #fff; 
    }
    tr:nth-child(even) {
        background-color: #f9f9f9; 
    }
</style>

<table class="table">
    <tr>
        <th>No</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No Hp</th>
        <th>Jenis Kelamin</th>
        <th>Hobi</th>
        <th>Aksi</th>
    </tr>
    @foreach ($siswa as $no=>$data)
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $data->nis }}</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->alamat }}</td>
        <td>{{ $data->no_hp }}</td>
        <td>{{ $data->jenis_kelamin }}</td>
        <td>{{ $data->hobi }}</td>
        <td>
            <a href="{{ route('siswa.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{ route('siswa.delete', $data->id) }}" method="post" style="display:inline;">
                @csrf
                <button class="btn btn-sm btn-danger">Hapus</button>
            </form>
        </td>
    </tr>   
    @endforeach
</table>
@endsection
