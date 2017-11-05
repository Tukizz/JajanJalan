<table border="1">
<tr>
	<td>Cabang ID</td>
	<td>Branch Name</td>
	<td>Branch Address</td>
	<td>Contact Name</td>
	<td>Contact No</td>
	<td>Branch Venue</td>

	<td>Resto Category</td>
	<td>Voucher</td>
	<td>Trading Hours</td>
	<td>News</td>
	<td>Point Rules</td>
	<td>Company Name</td>
	<td>Entered By Id</td>
	<td>Enteted By When</td>
	<td>Membership Valid From</td>
	<td>Membership Valid Until</td>

</tr>

<tr>
	<td>{{$branch->branchId}}</td>
	<td>{{$branch->branchName}}</td>
	<td>{{$branch->branchAddress}}</td>
	<td>{{$branch->branchContactName}}</td>
	<td>{{$branch->branchContactNo}}</td>
	<td>{{$branch->branchVenue}}</td>
	<td>{{$branch->category->categoryType}}</td>
	<td>{{$branch->branchVoucher}}</td>
	<td>{{$branch->branchTradingHours}}</td>
	<td>{{$branch->branchNews}}</td>
	<td>{{$branch->branchPointRules}}</td>
	<td>{{$branch->company->companyName}}</td>
	<td>{{$branch->user->userName}}</td>
	<td>{{$branch->created_at}}</td>
	<td>{{$branch->membershipValidFrom}}</td>
	<td>{{$branch->membershipValidUntil}}</td>

</tr>