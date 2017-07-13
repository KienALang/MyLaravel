@extends('main')

@section('title','| Contact')

@section('content')
<div class="row">
  <div class="col-md-12">            
    <h1>Contact Me</h1>
    <hr>
    <form>
      <div class="form-group">
        <label name="email">Email:</label>
        <input type="email" name="email" id="email" class="form-control">
      </div>

      <div class="form-group">
        <label name="subject">Subject:</label>
        <input type="tetx" name="subject" id="subject" class="form-control">
      </div>

      <div class="form-group">
        <label name="message">Message:</label>
        <textarea id="message" name="message" class="form-control" placeholder="Type your message here..."></textarea>
      </div>

      <input type="submit" name="submit" value="Send Message" class="btn btn-success">
    </form>              
  </div>
</div>
<!-- End of  row -->
@endsection