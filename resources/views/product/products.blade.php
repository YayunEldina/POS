@extends('layouts.main')

@section('contents')
    <div style="padding: 2rem; background-color: #f9f9f9; border-radius: 10px;">
        <h1 style="font-family: 'Arial', sans-serif; color: #333;">Halaman <span style="text-transform: capitalize; font-family: 'Courier New', monospace; color: #ff6600;">{{ $category }}</span></h1>
        <ul>
            @foreach ($datas[$categoryUrl] as $product)
                <li>{{ $product }}</li>
            @endforeach
        </ul>
        <a href="{{ URL::previous() }}" style="text-decoration: none; padding: 0.5rem 1rem; background-color: #4285f4; color: #fff; border-radius: 5px; display: inline-block; margin-top: 1rem;">Kembali</a>
    </div>
@endsection
