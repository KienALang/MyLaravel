@extends('main')

@section('title','| Home')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="jumbotron">
      <h1>Welcome to My Blog!</h1>
      <p>Thank you so much for visiting. This is my test website built with Laravel. Please read my latest post!</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
    </div>
  </div>
</div><!-- End of  row -->
<div class="row">
  <div class="col-md-8">

    @foreach($posts as $post)

    <div class="post">
      <h3>{{ $post->title }}</h3>
      <p>{{ str_limit($post->body, 200) }}</p>
      <a href=" {{ url('blog/'. $post->slug) }} " class="btn btn-primary">Read More</a>
    </div>

    <hr>

    @endforeach
    
  </div>

  <div class="col-md-3 col-md-offset-1">
    <h2>Sidebar</h2>
  </div>
</div>
@endsection
