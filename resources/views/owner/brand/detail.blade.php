	{{$brand->brandName}}<br>
	{{$brand->brandWebsite}}<br>
	@if ($brand->brandPicture)

	<img src="\images\brand\{{$brand->brandPicture}}" alt="" height="250px" width="250px"><br>

	@else

    <p>No image found</p>

	@endif

	{{$brand->brandPointRules}}<br>
	{{$brand->companyIdFK}}<br>
	{{$brand->brandEnteredById}}<br>
	{{$brand->created_at}}<br>

	<hr>
	<h1>Review User</h1>
	<hr>
	<div class="comments">
		@foreach($brand->review as $comment)
			<p>Review By : {{$comment->user->userName}}</p>
			<p>Description : {{$comment->reviewDescription}}</p>
			<hr>
		@endforeach
	</div>

	