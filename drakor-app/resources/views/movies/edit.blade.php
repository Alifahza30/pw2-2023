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
            <form enctype="multipart/form-data" method="POST" action="/movies/{{ $movie->id }}">
                @csrf
                @method('PUT')
                <label for="title">Title:</label><br>
                <input type="text" id="title" name="title" value="{{ $movie->title }}"><br><br>

                <label for="poster">Poster:</label><br>
                <img style="width: 200px"  src="/assets/img/{{$movie->poster}}" alt="">
                <input type="file" id="poster" name="poster" value="{{ $movie->poster }}"><br><br>

                <label for="genre_id">Genre:</label><br>
                <select id="genre_id" name="genre_id">
                    @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}" {{ $genre->id == $movie->genre_id ? 'selected' : '' }}>{{ $genre->nama }}</option>
                    @endforeach
                </select><br><br>

                <label for="synopsis">Synopsis:</label><br>
                <input type="text" id="synopsis" name="synopsis" value="{{ $movie->synopsis }}"><br><br>

                <label for="release_date">Release Date:</label><br>
                <input type="date" id="release_date" name="release_date" value="{{ $movie->release_date }}"><br><br>

                <label for="countrie_id">Countrie:</label><br>
                <select id="countrie_id" name="countrie_id">
                    @foreach ($countries as $countrie)
                        <option value="{{ $countrie->id }}" {{ $countrie->id == $movie->countrie_id ? 'selected' : '' }}>{{ $countrie->nama }}</option>
                    @endforeach
                </select><br><br>

                <label for="rating">Rating:</label><br>
                <input type="text" id="rating" name="rating" value="{{ $movie->rating }}"><br><br>

                <input type="submit" value="Update Movie">
            </form>
        </div>
    </div>
@endsection