<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

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
        			<h3>Add Brand</h3>
        			<form action="/admin/brand" method="POST" enctype="multipart/form-data">
        			<fieldset>
    					<div class="form-group">
      						<label>Brand Name</label>
      						<input type="text" class="form-control" name="brandName" placeholder="Brand Name">
    					</div>

    					<div class="form-group">
      						<label>Brand Website</label>
      						<input type="text" class="form-control" name="brandWebsite" placeholder="Website">
    					</div>

    					<div class="form-group">
							<input type="file" name="brandPicture">
    					</div>

    					<div class="form-group">
      						<label>Description</label>
      						<textarea class="form-control" rows="3" name="brandPointRules" placeholder="Point Rules"></textarea>
    					</div>

    					<div class="form-group">
      						<label>Company</label>
      						<select class="form-control" name="companyIdFK" id="">
								@foreach ($company as $data1)
								<option value="{{$data1->companyId}}">{{$data1->companyName}}</option>
								@endforeach
							</select>
    					</div>

    					<div class="form-group">
      						<label>Posted By</label>
      						<select class="form-control" name="brandEnteredById" id="">
							@foreach ($users as $data2)
								<option value="{{$data2->userId}}">{{$data2->userName}}</option>
							@endforeach
							</select>
    					</div>

    					<div class="form-group">
      						<label>Branch</label>
      						<select class="form-control" name="branchIdFK" id="">
							@foreach ($branch as $data3)
								<option value="{{$data3->branchId}}">{{$data3->branchName}}</option>
							@endforeach
							</select>
    					</div>
  					</fieldset>
  					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<input class="btn btn-primary" type="submit" value="Submit">
        			</form>
      			</div>
    		</div>
  		</div>
  		<div class="col-xs-6 col-md-4"></div>
	</div>
</div>
