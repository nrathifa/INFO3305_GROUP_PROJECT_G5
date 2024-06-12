@extends('master.layout')
@section('content')

<section id="edit" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="contact-mf">
                    <div id="contact" class="box-shadow-full">
                        <div class="row">
                            <div>
                                <div class="title-box rounded">
                                    <h5 class="title-left">Edit Book</h5>
                                    <br>
                                    <div>
                                        <form method="POST" action="{{ route('update', ['title' => $book->title]) }}">
                                            @csrf
                                            @method('POST')
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Title</label>
                                                <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="author" class="form-label">Author</label>
                                                <input type="text" class="form-control" id="author" name="author" value="{{ $book->author }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="genre" class="form-label">Genre</label>
                                                <input type="text" class="form-control" id="genre" name="genre" value="{{ $book->genre }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="date_published" class="form-label">Date Published</label>
                                                <input type="text" class="form-control" id="date_published" name="date_published" value="{{ $book->date_published }}" required>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
