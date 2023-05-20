@extends('layouts.main')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Reviews Data</h1>
    <div class="d-flex justify-content-between mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Reviews</li>
        </ol>
        <a href="#">
            <button class="btn btn-success" type="submit">Create Data</button>
        </a>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Reviews Data
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>no</th>
                        <th>film</th>
                        <th>user</th>
                        <th>rating</th>
                        <th>reviews</th>
                        <th>tanggal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>no</th>
                        <th>film</th>
                        <th>user</th>
                        <th>rating</th>
                        <th>reviews</th>
                        <th>tanggal</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($reviews as $review)
                    <tr>
                        <td>{{ $review['no'] }} </td>
                        <td>{{ $review['film'] }} </td>
                        <td>{{ $review['user'] }} </td>
                        <td>{{ $review['rating'] }} </td>
                        <td>{{ $review['reviews'] }} </td>
                        <td>{{ $review['tanggal'] }} </td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection