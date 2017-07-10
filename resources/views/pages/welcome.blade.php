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
    <div class="post">
      <h3>Post title</h3>
      <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
      <a href="#" class="btn btn-primary">Read More</a>
    </div>

    <hr>

    <div class="post">
      <h3>Post title</h3>
      <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
      <a href="#" class="btn btn-primary">Read More</a>
    </div>

    <hr>

    <div class="post">
      <h3>Post title</h3>
      <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
      <a href="#" class="btn btn-primary">Read More</a>
    </div>

    <hr>

    <div class="post">
      <h3>Post title</h3>
      <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
      <a href="#" class="btn btn-primary">Read More</a>
    </div>
  </div>

  <div class="col-md-3 col-md-offset-1">
    <h2>Sidebar</h2>
  </div>
</div>
@endsection
