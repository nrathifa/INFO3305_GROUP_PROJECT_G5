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
                              <th scope="col">View</th>
                              <th scope="col">Edit</th>
                              <th scope="col">Delete</th>
                            </tr>
                          </thead>
                          <tbody>
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
                              <td>
                                <form action="{{route('book.edit', $book->title) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger" style="background-color:blue; border:none">Edit</button>
                                </form>
                              </td>
                              <td>
                                <form action="{{route('book.destroy', $book->title) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                        <a href="/add-book" class="btn btn-success text" role="button">Add New Book</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><

@endsection
