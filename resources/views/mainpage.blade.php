@extends('master.layout')
@section('content')

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/hero-bg.jpg)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="hero-title mb-4">Your Biblioteca</h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="contact-mf">
                <div id="contact" class="box-shadow-full">
                  {{--<div class="row">
                    <div class="col-md-6"> --}}
                      <div class="title-box-2">
                        <h5 class="title-left">
                          List of Books
                        </h5>
                      </div>

                      {{--<button onclick="document.location='/add-student'" type="button" class="btn btn-primary">Add New Records</button><br><br>--}}

                      <div>
                          <table class="table table-striped table-dark">
                              <thead>
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Genre</th>
                                    <th scope="col">Date Published</th>
                                    <th scope="col">View</th>
                                    <th scope="col">Add Book</th>
                                </tr>
                              </thead>
                              <tbody>
                                {{--
                               @foreach($books as $index => $book)
                            <tr>
                              <td>{{ $book->title }}</td>
                              <td>{{ $book->author }}</td>
                              <td>{{ $book->genre }}</td>
                              <td>{{ $book->date_published }}</td>
                              <td>
                                <form action="{{route('book.show', $book->title) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger" style="background-color:blue; border:none">View</button>
                                </form>
                              </td>
                            </tr>
                            @endforeach
                            --}}
                                {{--<tr>
                                  <th scope="row">2</th>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>@fat</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Larry</td>
                                  <td>the Bird</td>
                                  <td>@twitter</td>
                                </tr>--}}
                              </tbody>
                            </table>
                      </div>
                  {{--  </div>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End Contact Section -->

  </main><!-- End #main -->

@endsection
