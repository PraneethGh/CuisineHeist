<html>
<head>
<title>ABOUT</title>
<style>
body{
background:
url('https://images.pexels.com/photos/954677/pexels-photo-954677.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940') 
no-repeat center fixed;
background-size:cover;

}
p{
color:gold;
text-shadow:0 2px 2px yellow;
font-size:50px;
text-align:center;
font-weight:bold;
}
.sub{
padding:10px 30px;
display:block;
width:15%;
border:0;
background-color:orange;
outline:none;
font-size:15px;
font-weight:bold;
color:black;
margin:auto;

}
.abt{
height:295px;
width:600px;
text-align:center;
background-color:orange;
margin:auto;
color:black;
font-size:18px;
word-spacing:1px;
font-weight:bold;
}
.hd{
border:3px solid orange;
padding: 5px 10px;
font-weight:bold;
}
.out{
text-decoration:none;
display:block;
color:black;
font-weight:bold;
border:2px solid orange;
padding:10px 30px;
width:8%;
background-color:orange;
text-align:center;
position:absolute;
top:15%;
left:86%;

}
</style>

                        @guest
                            <li class="">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
              
                            
                            </li>
                        @endguest
                    </ul>
            
        <main class="py-4">
            <!-- @yield('content')  -->
        </main>
  
<p class="hd"><i>ABOUT CUISINE HEIST</i></p><br>
<form action="{{ url('/') }}">
<button  class="sub" type="submit">HEIST</button><br></form>
<div class="abt">
<marquee style="font-size:20px;color:lawngreen" direction="alternate" bgcolor="black" direction="right" scrolldelay=10>Welcome {{Auth::user()->name}}</marquee>
Cooking is one of the toughest arts to master.
There are so many procedures, ingredients and time
constraints to follow. There are many bachelors or even
students who are staying alone for work and academic
purposes. Eating outside food frequently is neither a
healthy option nor an affordable option for them. Especially, During this Covid pandemic, it isn't a wise option to go out to eat as well.
Cuisine Hesit will be the solution for their problems
and help them to taste some of the most sumptuous dishes.
It will serve as a guide on how to cook and will
provide recipes of many dishes. The dishes will range from
some of the very basic dishes that everyone will want to eat 
to even some complex yet delicious cuisines. The recipes of a
variety of dishes will be provided from different categories
such as non-vegetarian, vegetarian, South Indian style or
North Indian style. It will satisfy the taste
buds of everyone.

</div>

                                    <a class="out" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                
</head>
</html>