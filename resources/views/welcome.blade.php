@extends('layouts.main')

@section('contents')
    <div style="padding: 2rem; background-color: #f2f2f2; border-radius: 10px;">
        <h1 style="font-family: 'Arial', sans-serif; color: #333;">Halaman 
        <span style="font-family: 'LAB-Grotest'; color: #ff6600;">Home</span></h1>

        <div style="margin-top: 1rem;">
            @foreach ($categories as $category)
                <a href="/category/{{ $category['slug'] }}" style="padding: 0.5rem; margin-right: 1rem; background-color: #4caf50; color: #fff; text-decoration: none; border-radius: 5px; display: inline-block;">{{ $category['name'] }}</a>
            @endforeach
        </div>
        
        <div style="margin-top: 1rem;">
            <a href="/transaction" style="padding: 0.8rem; background-color: #4285f4; color: #fff; text-decoration: none; border-radius: 5px; display: inline-block;">Transaction</a>
        </div>
    </div>
@endsection
