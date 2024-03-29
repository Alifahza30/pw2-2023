@extends('layouts.main')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Reviews Data</h1>
        <div class="d-flex justify-content-between mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item active">Reviews</li>
            </ol>
            <a href="/reviews/create">
                <button class="btn btn-success" type="submit">Create Data</button>
            </a>
        </div>
        @if (session('succsess'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Reviews Data
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Movies</th>
                            <th>User</th>
                            <th>Date</th>
                            <th>Description</th>
                            <th>Rating</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Movies</th>
                            <th>User</th>
                            <th>Date</th>
                            <th>Description</th>
                            <th>Rating</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($reviews as $review)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $review->movies_id }}</td>
                                <td>{{ $review->users_id }}</td>
                                <td>{{ $review->date }}</td>
                                <td>{{ $review->deskripsi }}</td>
                                <td>{{ $review->rating }}</td>
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