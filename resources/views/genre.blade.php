<style>
    .genre-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.genre-item {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.genre-item a {
    color: #fff;
    text-decoration: none;
}

.genre-item.active,
.genre-item:hover {
    background-color: #0056b3;
}
</style>

@extends('master.layout')
@section('content')

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

    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <h5 class="title-left text-center">
                        <strong>GENRE/CATEGORIES</strong>
                    </h5>
                </div>
                <br>
                <div class="genre-container d-flex flex-wrap justify-content-center">
                    @foreach($genres as $genre)
                        <div class="genre-item mx-2 my-1">
                        <a id="ctg-{{ strtolower($genre) }}" class="{{ Request::is('*'.$genre) ? 'active' : '' }}" href="{{ route('genre.show', strtolower($genre)) }}" title="{{ $genre }}">
                        {{ $genre }}
                        </a>
                        </div>
                    @endforeach
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
