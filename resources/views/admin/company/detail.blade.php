{{$company->companyId}} <br>
{{$company->companyName}} <br>
	@if ($company->companyLogoUrl)

	<img src="\images\companylogo\{{$company->companyLogoUrl}}" alt="" height="80px" width="80px"><br>

	@else

    <p>No image found</p>

	@endif
{{$company->companyPhone}} <br>
{{$company->companyWebsite}} <br>
{{$company->companyNotes}} <br>
{{$company->companyStatus}} <br>
{{$company->companyEnteredById}} <br>

<form action="/admin/company/{{$company->companyId}}" method="post">    
            <a href="/admin/company/{{$company->companyId}}/edit" type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i>Edit</a>

		<input type="hidden" name="_method" value="delete">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
        <button type="submit" class="btn btn-default btn-xs btn-danger" value="Delete"><i class="fa fa-thumbs-o-up"></i>Delete</button>

</form>