@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Movies Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Movies</li>
        </ol>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Movies Data
        </div>
        <div class="card-body">
            <form method="POST" action="/movies">
                @csrf
                <div>
                    <label for="judul">Title:</label>
                    <input type="text" id="judul" name="judul">
                </div>
                <div>
                    <label for="poster">Poster:</label>
                    <input type="text" id="poster" name="poster">
                </div>
                <div>
                    <label for="genre">Genre:</label>
                    <select id="genre" name="genre_id">
                        @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="negara">Country:</label>
                    <input type="text" id="negara" name="negara">
                </div>
                <div>
                    <label for="tahun">Year:</label>
                    <input type="text" id="tahun" name="tahun">
                </div>
                <div>
                    <label for="rating">Rating:</label>
                    <input type="text" id="rating" name="rating">
                </div>
                <button type="submit">Add</button>
            </form>
        </div>
    </div>
@endsection