@extends('main')

@section('title', '| All Posts')

@section('content')

	<div class="row">
		<div class="col-md-10">
			<h1>All Posts</h1>
		</div>

		<div class="col-md-2">
			<a href="{{ route('posts.create')}}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New Post</a>
		</div>
		<hr>
	</div>

	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th>Body</th>
					<th>Created At</th>
					<th></th>
				</thead>

				<tbody>
					
					@foreach($posts as $post)

						<tr>
							<th>{{ $post->id }}</th>
							<td>{{ str_limit($post->title, 20) }}</td>
							<td>{{  str_limit($post->body, 50) }}</td>
							<td>{{ $post->created_at->diffForHumans() }}</td>
							<td>
							<a href="{{route('posts.show', $post->id)}}" class="btn btn-default">View</a> <a href="{{route('posts.edit', $post->id)}}" class="btn btn-default">Edit</a>
							</td>
						</tr>

					@endforeach

				</tbody>
			</table>
		</div>
	</div>

@endsection