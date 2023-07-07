@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>TAMBAH DATA PELANGGAN</h3>
        <form action="{{ url('/pelanggan')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="">GOLONGAN</label>
                <select name="pel_id_gol" id="" class="form-control">
                    @foreach ($golongan as $gol)
                        <option value="{{$gol->gol_id}}">{{$gol->gol_nama}}</option>
                    @endforeach
                </select>    
            </div>
            <div class="mb-3">
                <label for="">User</label>
                <select name="pel_id_user" id="" class="form-control">
                    @foreach ($users as $user)
                        <option value="{{$user->user_id}}">{{$user->user_nama}}</option>
                    @endforeach
                </select>    
            </div>
            <div class="mb-3">
                <label for="">KODE PELANGGAN</label>
                <input type="text" name="pel_no" class="form-control" placeholder="Kode">
            </div>
            <div class="mb-3">
                <label for="">NAMA PELANGGAN</label>
                <input type="text" name="pel_nama" class="form-control" placeholder="Nama">
            </div>
            <div class="mb-3">
                <label for="">AlAMAT PELANGGAN</label>
                <input type="text" name="pel_alamat" class="form-control" placeholder="Alamat">
            </div>
            <div class="mb-3">
                <label for="">Nomor Hp PELANGGAN</label>
                <input type="text" name="pel_hp" class="form-control" placeholder="Nomor Hp">
            </div>
            <div class="mb-3">
                <label for="">NO KTP PELANGGAN</label>
                <input type="text" name="pel_Ktp" class="form-control" placeholder="No Ktp">
            </div>
            <div class="mb-3">
                <label for="">KETERAGAN PELANGGAN</label>
                <select class="form-control" name="pel_aktif" id="">
                    <option value="1">AKTIF</option>
                    <option value="0">TIDAK AKTIF</option>
            </div>
            <div class="mb-3">
                <input class="btn btn-secondary" type="submit" name="" id="" value="SIMPAN GESS">
            </div>
        </form>
    </div>
@endsection