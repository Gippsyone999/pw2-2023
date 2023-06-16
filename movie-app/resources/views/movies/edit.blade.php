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
            Edit Data
        </div>
        <div class="card-body">
            <form method="POST" action="/movies/{{ $movies->id }}">
                @csrf
                @method('PUT')
                <label for="judul">Title:</label><br>
                <input type="text" id="judul" name="judul" value="{{ $movies->judul }}"><br><br>

                <label for="poster">Poster:</label><br>
                <input type="text" id="poster" name="poster" value="{{ $movies->poster }}"><br><br>

                <label for="genre_id">Genre:</label><br>
                <select id="genre_id" name="genre_id">
                    @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}" {{ $genre->id == $movies->genre_id ? 'selected' : '' }}>{{ $genre->nama }}</option>
                    @endforeach
                </select><br><br>

                <label for="negara">Country:</label><br>
                <input type="text" id="negara" name="negara" value="{{ $movies->negara }}"><br><br>

                <label for="tahun">Year:</label><br>
                <input type="text" id="tahun" name="tahun" value="{{ $movies->tahun }}"><br><br>

                <label for="rating">Rating:</label><br>
                <input type="text" id="rating" name="rating" value="{{ $movies->rating }}"><br><br>

                <input type="submit" value="Update Movie">
            </form>
        </div>
    </div>
@endsection