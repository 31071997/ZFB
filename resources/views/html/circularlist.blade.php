@extends('html.commonfields')
@section('title','Circularlist')
@section('content')
		<section class="fix maincontent">
            @extends('html.logout')
			<center><a href='/circular/ViewCircular/Programming&Testing'><input type="button" value="Department of Programming & testing"/></a><br/></center>
			<center><a href='/circular/ViewCircular/Graphics&Design'><input type="button" value="Department of Graphics & Desigining"/></a><br/><c/enter>
			<center><a href='/circular/ViewCircular/Planning&analysis'><input type="button" value="Department of Planning & Analysis"/></a><br/></center>
			<center><a href='/circular/ViewCircular/InterviewCard'><input type="button" value="Interview Card"/></a><br/></center>
		</section>
@endsection
