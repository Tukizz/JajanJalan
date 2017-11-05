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
<?php 
	$userselected = $brand->brandEnteredById;
	$companyselected = $brand->companyIdFK;
	$branchselected = $brand->branchIdFK;
?>
<div class="container">
	<div class="row">
	<div class="col-xs-6 col-md-4"></div>
  		<div class="col-xs-6 col-md-4">
    		<div style="margin-top: 20px;" class="thumbnail">
      			<div class="caption">
        			<h3>Edit Brand</h3>
        			<form action="/admin/brand/{{$brand->brandId}}" method="POST" enctype="multipart/form-data" onSubmit="if(!confirm('Untuk upload gambar,silahkan upload satu persatu')){return false;}">
        			<fieldset>
    					<div class="form-group">
      						<label>Brand Name</label>
      						<input type="text" class="form-control" name="brandName" value="{{$brand->brandName}}">
    					</div>

    					<div class="form-group">
      						<label>Brand Website</label>
      						<input type="text" class="form-control" name="brandWebsite" value="{{$brand->brandWebsite}}">
    					</div>

    					<div class="form-group">
              <label for="">Gambar 1</label>
      					@if ($brand->brandPicture)
    						<img src="\images\brand\{{$brand->brandPicture}}" alt="" height="100" width="100px"><br>
						@else
    						<img src="{{ URL::asset('img/default.jpg') }}" alt="">
						@endif
							<input type="file" name="brandPicture"><br>
    					</div>
              <div class="form-group">
              <label for="">Gambar 2</label>
                @if ($brand->brandPicture2)
                <img src="\images\brand\{{$brand->brandPicture2}}" alt="" height="100" width="100px"><br>
            @endif
              <input type="file" name="brandPicture2"><br>
              </div>
              <div class="form-group">
              <label for="">Gambar 3</label>
                @if ($brand->brandPicture3)
                <img src="\images\brand\{{$brand->brandPicture3}}" alt="" height="100" width="100px"><br>
            @endif
              <input type="file" name="brandPicture3"><br>
              </div>
              <div class="form-group">
              <label for="">Gambar 4</label>
                @if ($brand->brandPicture4)
                <img src="\images\brand\{{$brand->brandPicture4}}" alt="" height="100" width="100px"><br>
            @endif
              <input type="file" name="brandPicture4"><br>
              </div>
              <div class="form-group">
              <label for="">Gambar 5</label>
                @if ($brand->brandPicture5)
                <img src="\images\brand\{{$brand->brandPicture5}}" alt="" height="100" width="100px"><br>
            @endif
              <input type="file" name="brandPicture5"><br>
              </div>

    					<div class="form-group">
      						<label>Description</label>
      						<textarea class="form-control" rows="3" name="brandPointRules">{{$brand->brandPointRules}}</textarea>
    					</div>

    					<div class="form-group">
      						<label>Company</label>
      						<select class="form-control" name="companyIdFK" id="">
							@foreach ($company as $data1)
								<option value="{{$data1->companyId}}" 
							<?php 
								if($companyselected == $data1->companyId){
									echo "selected";
								}
							?>
								>{{$data1->companyName}}
								</option>
							@endforeach
							</select>
    					</div>

    					<div class="form-group">
      						<label>Posted By</label>
      						<select class="form-control" name="brandEnteredById" id="">
							@foreach ($users as $data2)
								<option value="{{$data2->userId}}"
							<?php 
								if($userselected == $data2->userId){
									echo "selected";
								}
							?>
								>{{$data2->userName}}</option>
							@endforeach
							</select>
    					</div>

    					<div class="form-group">
      						<label>Branch </label>
      						<select class="form-control" name="branchIdFK" id="">
							@foreach ($branch as $data3)
								<option value="{{$data3->branchId}}"
							<?php 
								if($branchselected == $data3->branchId){
									echo "selected";
								}
							?>
								>{{$data3->branchName}}</option>
							@endforeach
							</select>
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