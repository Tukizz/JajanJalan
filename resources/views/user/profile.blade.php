
	@extends('layouts.app')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
	<div class="row">
	<div class="col-xs-6 col-md-4"></div>
  		<div class="col-xs-6 col-md-4">
    		<div style="margin-top: 20px;" class="thumbnail">
      			<div class="caption">
        			<h3>Profile User</h3>
        			<form action="{{ route('user.show', auth()->user()->userId) }}" method="POST" enctype="multipart/form-data">
        			<fieldset>
    					<div class="form-group">
      						<label>Name</label>
      						<input class="form-control" type="text" name="userName" placeholder="Nama" value="{{$user->userName}}">
    					</div>

    					<div class="form-group">
      						<label>Profile Picture</label><br>
							@if ($user->picture)
    							<img src="\images\user\{{$user->picture}}" alt="" height="120px" width="120px" style="border-radius:50%;"><br>
							@else
    							<img src="\images\default.jpg" alt="" height="120px" width="120px" style="border-radius:50%;"><br>
							@endif
      						<input class="form-control" type="file" name="picture">
    					</div>

    					<div class="form-group">
    						<label>Address</label>
							<input class="form-control" type="text" name="address" placeholder="Address" value="{{$user->address}}">
    					</div>

    					<div class="form-group">
      						<label>Facebook</label>
      						<input class="form-control" type="text" name="facebook" placeholder="Website" value="{{$user->facebook}}">
    					</div>

    					<div class="form-group">
      						<label>Twitter</label>
      						<input class="form-control" type="text" name="twitter" placeholder="Website" value="{{$user->twitter}}">
    					</div>
    					<div class="form-group">
      						<label>Path</label>
      						<input class="form-control" type="text" name="path" placeholder="Website" value="{{$user->path}}">
    					</div>

    					<div class="form-group">
      						<label>Instagram</label>
      						<input class="form-control" type="text" name="instagram" placeholder="Website" value="{{$user->instagram}}">
    					</div>

    					<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                		<h4><b>Password</b></h4>
                		<input class="form-control" placeholder="Password" name="password" type="password" required oninvalid="this.setCustomValidity('Please Verify Your Password')" oninput="setCustomValidity('')">
                		@if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
              			</div>
              			<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                			<h4><b>Confirm Password</b></h4>
                			<input class="form-control" placeholder="Password" name="password_confirmation" type="password" required oninvalid="this.setCustomValidity('Please Verify Your Password')" oninput="setCustomValidity('')">
              			</div>

  					</fieldset>
  					
  					<input type="hidden" name="_token" value="{{csrf_token()}}">
  					<input type="hidden" name="_method" value="put">
					<input class="btn btn-primary" type="submit" value="Submit">
        			</form>
      			</div>
    		</div>
  		</div>
  		<div class="col-xs-6 col-md-4"></div>
	</div>
</div>

@endsection
