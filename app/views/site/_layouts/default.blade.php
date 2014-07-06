<!DOCTYPE html>
<html lang="en" ng-app="siteApp">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>
		@section('title')
			
		@show
	</title>
	@include('site._partials.include')

</head>
<body>
	
	@include('site._partials.header')
	
	<div ng-view></div>
	
	@include('site._partials.footer')
	
</body>
</html>
