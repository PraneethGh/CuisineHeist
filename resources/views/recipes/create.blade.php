<html>
<head>
<title>add</title>
<style>
    *
    {
    cursor: pointer;
    font-family:sans-serif;
    }
    body
    {
    margin:0;
    background-color:black;
    }
    .img
    {
    margin:auto;
    }
    .nav
    {
    width:1277px;
    margin:auto;
    overflow:auto;
    }
    ul
    {
    margin:0;
    padding:0;
    list-style:none;
    }
    ul li
    {
    float:left;
    background-color:maroon;
    position: relative;
    }
   .nav a{
    text-decoration:none;
    color:gold;
    width:224.9px;
    display:block;
    text-align: center;
    padding:15px;
    font-size: 15px;
    font-weight:bold;
    }
    .nav a:hover
    {
    background-color:black;
    }
    ul li ul li{
    display:none;
    float:none;
    }
    ul li:hover ul li{
    display:block;
    }

    .fm{
    text-align:center;
    position:absolute;
    top:85%;
    left:31%;
    }
 
  label{
color:orange;
font-size:30px;
font-weight:bold;
  }

.cat{
    color:gold;
    font-size:25px;
    position:relative;
    border:3px ridge gold;
    border-radius:5px;
    padding:10px 40px;
    display:flex;
    font-weight:bold;
    }
.cat::before{
    content: "";
    height:20px;
    width:20px;
    border:3px ridge gold;
    border-radius:50%;
    margin-right:25px;
    font-weight:bold;

    }
    input[type="radio"]{
display:none;
}
    input[type="radio"]:checked + .cat{
    background-color:silver;
    color:black;
    font-weight:bold;
    }  

input[type="radio"]:checked + .cat::before {
background-color:gold;
height:12px;
width:12px;
border:8px solid black;
font-weight:bold;

} 
span{
color:aqua;
font-size:20px;
}
    

    .field{
        resize:none;
        color:silver;
        background-color:black;
        font-size:18px;

    }
    .field1{
    background-color:black;
color:silver;
font-size:20px;


    }
    .field1:focus{
    width: 100%;
    transition-duration: 0.3s ease-in-out;
    outline-color:gold;
}
    .field:focus{
    outline-color:gold;
    }
    .sub{
padding:10px 30px;
display:block;
width:60%;
border:0;
background-color:orange;
outline:none;
font-size:20px;
font-weight:bold;
color:black;
margin:auto;
}
.sub:hover{
background-color:black;
color:gold;
border:2px solid gold;
}
.hd{
text-align:center;
color:lawngreen;
font-weight:bold;
position:absolute;
left:35%;
top:65%;
border-bottom:2px solid red;
border-top:2px solid red;
}
.redirect{
color:lawngreen; 
left:35%;
position:absolute;
top:85%;
text-align:center;
text-decoration:none;
border:3px dotted gold;
}
.redirect:hover{
color:black;
background-color:red;
border:3px solid silver;
}
.in{
background-color:black;
color:gold;
position:absolute;
top:0%;
left:82%;
font-weight:bold;
width:18%;
text-align:center;
text-decoration:none;
}
.in:hover{
background-color:white;
}.in1{
background-color:black;
color:gold;
position:absolute;
top:0%;
left:81%;
font-weight:bold;
width:18%;
text-align:center;
text-decoration:none;
}
.in1:hover{
background-color:white;
}
.in2{
background-color:black;
color:gold;
position:absolute;
top:3.2%;
left:81%;
font-weight:bold;
width:18%;
text-align:center;
text-decoration:none;
}
.in2:hover{
background-color:white;
}
    </style>
</head>
<body>
@if (Route::has('login'))
          
          @auth
              <a class="in" href="{{ url('/home') }}">LOGGED IN</a>
           
          @else
              <a class="in1" href="/new-login">Login</a>

              @if (Route::has('register'))
                  <a class="in2" href="/new-register">Register</a>
              @endif
          @endauth

  @endif
    <body>
        <div class="img">
        <img src="https://miro.medium.com/max/3240/1*asR4qapWtOLpFLO-QQ0riQ.jpeg" width=1277px height=300px>
        </div>
        <div class="nav">
        <ul>
        <li><a href="/">HOME</a></li>
        <li><a href="/food/create">ADD RECIPES</a></li>
        <li><a href="/home">ABOUT</a></li>
        <li><a href="/help">CONTACT</a></li>
        <li><a href="#">MY ACCOUNT</a>
        <ul class="drop">
        <li><a href="/profile">My Profile</a></li>
        @if(!Auth::guest())
        <li><a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
        @endif
        </ul></li>
        </ul>
        </div><br>
        <div class="hd">
        <h1>ADD YOUR OWN RECIPE!</h1>
    
    </div>
@if(!Auth::guest())
<form class="fm" action="/" method="POST">
    @csrf
    <label>NAME OF THE DISH:</label><br><br><br>
    <input type="text" autocomplete="off" class="field1"  name="dname" ><br><br><br><br>


<label>CATEGORY OF THE DISH:</label><br><br><br>
<input type="radio" name="ct" id="vn" value="Veg,North Indian">
<label for="vn" class="cat" >Veg,North Indian</label><br>

<input type="radio"  id="vs" name="ct" value="Veg,South Indian">
<label for="vs" class="cat" >Veg,South Indian</label><br>


<input type="radio" id="nvn" name="ct" value="Non Veg,North Indian">
<label for="nvn" class="cat" >Non Veg,North Indian </label><br>

<input type="radio" id="nvs" name="ct" value="Non Veg,South Indian">
<label for="nvs" class="cat" >Non Veg,South Indian</label><br>

<input type="radio"  id="m" name="ct" value="Munchies">
<label for="m" class="cat">Munchies </label><br>

<input type="radio"  id="d" name="ct" value="Desserts">
<label for="d" class="cat">Desserts</label><br><br>
    <br><br><label>INGREDIENTS:</label><br><br><span>NOTE: At the end of Each step give a semi-colon(;)</span><br><br>
    <textarea class="field" id="b" name="ing" rows="30" cols="40"></textarea><br><br><br><br>
    <label>PROCEDURE:</label><br><br><span>NOTE: At the end of Each step give a fullstop(.)</span><br><br>
    <textarea class="field" id="b" name="proc" rows="35" cols="50"></textarea><br><br><br>
    
    <input type="submit" class="sub" value="ADD RECIPE">
    </form>
@else
<br><br><br><br><br>
<h1 ><a class="redirect" href="/new-login">Login to add Your Recipe</a></h1>
@endif
    </body>
    </html>

    
