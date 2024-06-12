@extends('master.layout')

@section('content')
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div>
                  <div class="title-box rounded">
                    <h5 class="title-left">Add New Book</h5>
                                    <br>
                                    <div>
                                        <form method="POST" action="{{ route('add-book') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Title</label>
                                                <input type="text" class="form-control" id="title" name="title" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="author" class="form-label">Author</label>
                                                <input type="text" class="form-control" id="author" name="author" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="genre" class="form-label">Genre</label>
                                                <input type="text" class="form-control" id="genre" name="genre" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="date_published" class="form-label">Date Published</label>
                                                <input type="text" class="form-control" id="date_published" name="date_published">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Save</button>
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
