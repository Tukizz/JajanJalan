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
	<div class="comments">
		@foreach($brand->review as $comment)
			<p>Review By : {{$comment->user->userName}}</p>
			<p>Description : {{$comment->reviewDescription}}</p>
			<hr>
		@endforeach
	</div>

	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	{{Form::open(['route' => ['review.store',$brand->brandId], 'method' => 'POST']) }}
	
	<input type="text" name="reviewDescription">
	<input type="text" name="reviewById">
	<input type="submit" value="Submit">
	{{ Form::close() }}