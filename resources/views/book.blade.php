@extends('admin.home')
@section('content')

<div id="hero" class="hero route bg-image" style="background-image: url(assets/img/bookshelf.jpg)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="hero-title mb-4">Admin Page</h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="An Online Book Library"></span></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
</div><!-- End Hero Section -->
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
                      <h5 class="title-left">
                        List of Books
                      </h5>
                      <br>
                      <div>
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">Title</th>
                              <th scope="col">Author</th>
                              <th scope="col">Genre</th>
                              <th scope="col">Date Published</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($books as $book)
                            <tr>
                              <td>{{ $book->title }}</td>
                              <td>{{ $book->author }}</td>
                              <td>{{ $book->genre }}</td>
                              <td>{{ $book->date_published }}</td>
                              <td>
                                <form action="{{ route('delete', $book->title) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" style="margin-right: 5px;">Delete</button>
                                </form>

                                <form action="{{ route('edit', $book->title) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="btn btn-primary" style="margin-right: 5px;">Edit</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                          </tbody>
                        </table>
                        <a href="{{ route('add-book') }}" class="btn btn-success text" role="button">Add New Book</a>
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
