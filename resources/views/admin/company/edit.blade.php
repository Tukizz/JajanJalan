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
        			<h3>Edit Company</h3>
        			<form action="/admin/company/{{$company->companyId}}" method="POST" enctype="multipart/form-data">
        			<fieldset>
    					<div class="form-group">
      						<label>Company Name</label>
      						<input class="form-control" type="text" name="companyName" placeholder="Nama Perusahaan" value="{{$company->companyName}}">
    					</div>

    					<div class="form-group">
      						<label>Company Logo</label>
      						<input class="form-control" type="file" name="companyLogoUrl">
      						@if ($company->companyLogoUrl)
    							<img src="\images\companylogo\{{$company->companyLogoUrl}}" alt="" height="80px" width="80px">
							@else
    							<img src="{{ URL::asset('images/default.jpg') }}">
							@endif
    					</div>

    					<div class="form-group">
    						<label>Company Contact</label>
							<input class="form-control" type="text" name="companyPhone" placeholder="Nomor Handphone" value="{{$company->companyPhone}}">
    					</div>

    					<div class="form-group">
      						<label>Company Website</label>
      						<input class="form-control" type="text" name="companyWebsite" placeholder="Website" value="{{$company->companyWebsite}}">
    					</div>
              <div class="form-group">
                  <label>Company Email</label>
                  <input class="form-control" type="email" name="companyEmail" placeholder="Website" value="{{$company->companyEmail}}">
              </div>

    					<div class="form-group">
      						<label>Company Notes</label>
      						<textarea name="companyNotes" class="form-control" rows="2">{{$company->companyNotes}}</textarea>
    					</div>

    					<div class="form-group">
    						<label>Status</label>
    						<br>
    							<input type="radio" name="companyStatus" id="optionsRadios2" value="Active" 
                  @if ($company->companyStatus == 'Active')
                    checked 
                  @endif
                  >
   									 Active						
                  <br>				
    							<input type="radio" name="companyStatus" id="optionsRadios2" value="Not Active"
                  @if ($company->companyStatus == 'Not Active')
                    checked 
                  @endif
                  >
   									 Not Active		
    					</div>

    					<div class="form-group">
      						<label>Entered By</label>
      						<input class="form-control" type="text" name="companyEnteredById" placeholder="Nama Penginput" value="{{$company->companyEnteredById}}">
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
