@extends('html.commonfields')
@section('title','Circular')
@section('content')
		<section class="fix maincontent">
            <center><a href='/register'><input type="button" value="Sign up"/></a><br/></center>
            <center><a href='/register'><input type="button" value="Admin register"/></a><br/></center>
            <center><a href='/login'><input type="button" value="Log in"/></a><br/></center>
            <center><a href='/Admin'><input type="button" value="Admin"/></a><br/></center>
			<!--<center><a href='/circular/ViewCircular'><input type="button" value="View Circular"/></a><br/></center>-->
			<center><a href='circular/schedule'><input type="button" value="View Schedule"/></a><br/></center>
		</section>
@endsection('content')