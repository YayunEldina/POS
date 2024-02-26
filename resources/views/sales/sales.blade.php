@extends('layouts.main')

@section('contents')
    <div style="padding: 2rem; background-color: #fff; border-radius: 10px; text-align: center;">
        <h1 style="font-family: 'Arial', sans-serif; color: #333;">Halaman <span style="font-family: 'Courier New', monospace; color: #ff6600;">Transaction</span></h1>
        <a href="{{ URL::previous() }}" style="text-decoration: none; padding: 0.5rem 1rem; background-color: #4285f4; color: #fff; border-radius: 5px;">Kembali</a>
    </div>
@endsection
