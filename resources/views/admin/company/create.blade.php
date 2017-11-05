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
        			<h3>Add Company</h3>
        			<form action="/admin/company" method="POST" enctype="multipart/form-data">
        			<fieldset>
    					<div class="form-group">
      						<label>Company Name</label>
      						<input class="form-control" type="text" name="companyName" placeholder="Nama Perusahaan">
    					</div>

    					<div class="form-group">
      						<label>Company Logo</label>
      						<input class="form-control" type="file" name="companyLogoUrl">
    					</div>

    					<div class="form-group">
    						<label>Company Contact</label>
							<input class="form-control" type="text" name="companyPhone" placeholder="Nomor Handphone">
    					</div>

    					<div class="form-group">
      						<label>Company Website</label>
      						<input class="form-control" type="text" name="companyWebsite" placeholder="Website">
    					</div>
              <div class="form-group">
                  <label>Company E-Mail</label>
                  <input class="form-control" type="text" name="companyEmail" placeholder="E-Mail">
              </div>

    					<div class="form-group">
      						<label>Company Notes</label>
      						<textarea name="companyNotes" class="form-control" rows="2"></textarea>
    					</div>

    					<div class="form-group">
      						<label>Entered By</label>
      						<input class="form-control" type="text" name="companyEnteredById" placeholder="Nama Penginput">
    					</div>

  					</fieldset>
  					<input type="hidden" name="companyStatus" value="Active">
  					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<input class="btn btn-primary" type="submit" value="Submit">
        			</form>
      			</div>
    		</div>
  		</div>
  		<div class="col-xs-6 col-md-4"></div>
	</div>
</div>
