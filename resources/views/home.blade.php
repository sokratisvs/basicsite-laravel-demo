@extends('layouts.layout')


@section('content')

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Laravel demo</h1>
          <p class="lead text-muted">Here is a quick demo for Laravel</p>
          <p>
            <a href="#" class="btn btn-primary">Open </a>
            <a href="#" class="btn btn-secondary">Hide</a>
          </p>
        </div>
      </section>

      <div class="album text-muted">
        <div class="container">

          <div class="row">
            <div class="card">
              <img data-src="images/100px280?forest-1" alt="Card image cap">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <div class="card">
              <img data-src="images/100px280?forest-2" alt="Card image cap">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <div class="card">
              <img data-src="images/100px280?forest-2" alt="Card image cap">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>

        </div>
      </div>

    </main>

@endsection