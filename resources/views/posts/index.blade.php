@extends('layouts.app')

@section('content')
<h1>Posts</h1>
@if(count($posts) > 1)
	<div class="card">
		<ul class="list-group list-group-flush">
			<div class="row">

			@foreach($posts as $post)
			@if(auth()->user()->id == $post->user_id)
				<div class="col-md-4">
					<img src="/storage/cover_images/{{$post->cover_image}}" alt="Post Image" style="width:200px;height: 100px">
				</div>
				<div class="col-md-8">
					<li class="list-group-item">
						<h3><a href="/posts/{{ $post->id }}">{{ $post->title}}</a> </h3>
						<small>Written on {{ $post->created_at}}</small>
					</li>
				</div>
				@endif
			@endforeach()			
			</div>
			
		</ul>
	</div>
@else

@endif
@endsection