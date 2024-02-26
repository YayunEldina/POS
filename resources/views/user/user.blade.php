@extends('layouts.main')

@section('contents')
    <div style="padding: 2rem; background-color: #e6f7ff; border-radius: 10px;">
        <h1 style="font-family: 'Arial', sans-serif; color: #333;">ID: {{ $id }}</h1>
        <h1 style="font-family: 'Courier New', monospace; color: #ff6600;">Name: <span style="text-transform: capitalize; color: #4caf50;">{{ $username }}</span></h1>
    </div>
@endsection
