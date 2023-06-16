@extends('layouts/main')

@section('content')
<h1 class="mt-4">Review film</h1>
<div class="d-flex justify-content-between mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Review</li>
    </ol>
    <a href="/reviews/create">
        <button class="btn btn-success" type="submit">Create Data</button>
    </a>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Review film
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Film</th>
                    <th>User</th>
                    <th>Rating</th>
                    <th>Review</th>
                    <th>Tanggal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Film</th>
                    <th>User</th>
                    <th>Rating</th>
                    <th>Review</th>
                    <th>Tanggal</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($reviews as $review)
                <tr>
                    <td>{{ $loop->iteration  }}</td>
                    <td>{{ $review->film }}</td>
                    <td>{{ $review->user }}</td>
                    <td>{{ $review->rating }}</td>
                    <td>{{ $review->review }}</td>
                    <td>{{ $review->tanggal }}</td>
                    <td>
                        <a href="/reviews/{{ $review->id }}/edit" class="btn btn-sm btn-warning"> Edit</a>
                        <form action="/reviews/{{ $review->id }}" method="POST">

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection