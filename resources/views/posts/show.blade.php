@extends('main')

@section('title','| View new post')

@section('content')

<div class="row">
	<div class="col-md-8">
		<h1>{{ $post->title }}</h1>
		<p class="lead">{{ $post->body }}</p>
	</div>
	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
				<dt>Created At:</dt>
				<dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
			</dl>

			<dl class="dl-horizontal">
				<dt>Last updated:</dt>
				<dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
			</dl>
			<hr>
			<div class="row">
				<div class="col-sm-6">
					{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class'=>'btn btn-primary btn-block'))!!}
				</div>
				<div class="col-sm-6">
					{!! Form::open(['route'=>['posts.destroy', $post->id], 'method'=>'delete']) !!}
					
					{!! Form::submit('Delete', ['class'=>'btn btn-danger btn-block']) !!}
					
					{!! Form::close() !!}			
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-12">

				{!! Html::linkRoute('posts.index', '<< See All Posts', [], ['class'=>'btn btn-default btn-block']) !!}								
			</div>
		</div>
	</div>
</div>
<!-- End of  row -->

@endsection
