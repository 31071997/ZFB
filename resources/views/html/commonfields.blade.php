<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <link href="{{asset('css/style.css')}}" rel="stylesheet"/>
        <link href="{{asset('css/specialstyle.css')}}" rel="stylesheet"/>
    </head>
    <body>
        <header><h1><center>SSquare Software Company</center></h1></header>
        <!--<section class="banner"><center><img src="{{asset('images/th.jpg')}}"/></center></section>-->
        <section class="menu_bar">
            <ul type="none">
                <li><a href='\homepage'>Home</a></li>
                <li><a href='\circular'>Circular</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
        </section>
        @yield('content')
        <footer><h4><center>Let's make it!!!...</center></h4></footer>
    </body>
</html>
    