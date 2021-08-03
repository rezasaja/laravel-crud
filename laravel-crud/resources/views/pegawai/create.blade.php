@extends('layouts.index')

@section('content')
    <br>
    <form method="POST" action="{{ url('pegawai') }}">
        @csrf
        Nama : <input type="text" name="nama"> <br>
        Tanggal lahir : <input type="date" name="tanggal_lahir"> <br>
        GELAR : <input type="text" name="gelar"> <br>
        NIP : <input type="text" name="NIP"> <br>

        <button type="submit">SIMPAN</button>
    </form>
@endsection
