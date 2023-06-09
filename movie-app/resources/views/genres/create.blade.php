@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Genres Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Genres</li>
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
            Genres Data
        </div>
        <div class="card-body">
            <form method="POST" action="/genres">
                @csrf
                <div>
                    <label for="Nama">Nama genre:</label>
                    <input type="text" id="Nama" name="Nama">
                </div>
                <div>
                    <label for="Deskripsi">Deskripsi:</label>
                    <input type="text" id="Deskripsi" name="Deskripsi">
                </div>
                <button type="submit">Add</button>
            </form>
        </div>
    </div>
@endsection