

@foreach($category as $post)
	<div class="col-md-3">
		<a href="/{{ $post->slug }}">
			<span>order: {{ $post->order }} - {{ $post->name }}</span>
		</a>
	</div>
@endforeach
