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
                <div class="title-box">
                  <h5 class="title-left">
                    Add New Books
                  </h5>
                  <br>
                  <div>
                    <form action="book" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="title"></label>
                          <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
                        </div>
                        <div class="form-group">
                            <label for="author"></label>
                            <input type="text" class="form-control" id="author" name="author" placeholder="Author" required>
                        </div>
                        <div class="form-group">
                            <label for="genre"></label>
                            <input type="text" class="form-control" id="genre" name="genre" placeholder="Genre" required>
                        </div>
                        <div class="form-group">
                            <label for="date_published"></label>
                            <input type="text" class="form-control" id="date_published" name="date_published" placeholder="Date Published" required>
                        </div>
                        <br>
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary text">
                           Save
                          </button>
                        </div>
                      </form>
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
