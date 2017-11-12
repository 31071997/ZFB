<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{  asset('css/app.css') }}">
</head>
<body>
	<script type="text/javascript">
		function printer()
		{
			window.print();
		}
	</script>
	<div>
@foreach($card as $card)
	<p>{{ $programmingCv->first_name }}{{ $programmingCv->last_name }} you are selected as a candidate for the post of {{ $programmingCv->select_post }}. please be present in your interview with a print of this card.
    <hr></p> 
    <button onclick="printer()">print</button>
@endforeach
</div>
</body>
</html>