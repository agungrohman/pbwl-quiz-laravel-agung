@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>DAFTAR DATA PELANGGAN</h3>
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session ('success')}}
        </div>
        @endif
        <a class="btn btn-info btn-sm float-end" href="{{ url('pelanggan/create')}}">Tambah Data</a>
        <table class="table table-bordered">
            <tr>
                <td>NO</td>
                <td>GOLONGAN</td>
                <td>USER</td>
                <td>KODE</td>
                <td>NAMA</td>
                <td>ALAMAT</td>
                <td>NOMOR HP</td>
                <td>NOMOR KTP</td>
                <td>KETERANGAN</td>
                <td>EDIT</td>
                <td>HAPUS</td>
            </tr>
            @foreach ($rows as $row)
            <tr>
                <td>{{ $row->pel_id}}</td>
                <td>{{ $row->golongan->gol_nama}}</td>
                <td>{{ $row->users->user_nama}}</td>
                <td>{{ $row->pel_no}}</td>
                <td>{{ $row->pel_nama}}</td>
                <td>{{ $row->pel_alamat}}</td>
                <td>{{ $row->pel_hp}}</td>
                <td>{{ $row->pel_ktp}}</td>
                <td>{{ ($row['pel_aktif'] == 0)? 'Tidak Aktif':'Aktif'}}</td>
                <td><a class="btn btn-dark btn-sm float" href="{{url('pelanggan/' .$row->pel_id. '/edit')}}">Edit</a></td>
                <td>
                    <form action="{{url('pelanggan/' .$row->pel_id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm float" onclick="return confirm('Apakah yakin ingin dihapus')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection