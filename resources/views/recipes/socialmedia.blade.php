<html>
<head>
<title>help</title>
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
    width:1263.5px;
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
    width:222.5px;
    display:block;
    text-align: center;
    padding:15px;
    font-size: 15px;
    font-weight:bold;
    }
    a:hover
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
    .t{
    color:greenyellow;
    font-weight:bold;
    text-align:center;
    top:65%;
    position:absolute;
left:32%;
border:3px gold ridge;

    }
    .ct{
    font-size:20px;
    text-align:center;
    left:42%;
    position:absolute;
    top:85%;
    }
    .disp{
    color:powderblue;
    text-align:center;
    text-decoration:none;
    }
    .tw{
        border:3px blue ridge;
        width:80%;
        
    }
    .ins{
        border:3px pink ridge;
        width:80%;
      
    }
    .fb{
        border:3px red ridge;
        width:80%;
     
    }
    .ph{
        border:3px silver ridge;
        width:80%;
     
    }
    .gm{
        border:3px lawngreen ridge;
        width:80%;
     
    }
    .field{
    background-color:silver;
    color:black;
    resize:none;
    outline-style:3px solid ridge;
    outline-color:goldenrod;
  

    }
    ::placeholder{
    color:black;
    font-size:20px;
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
}
.in1{
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
.in1:hover{
background-color:white;
}
.in2{
background-color:black;
color:gold;
position:absolute;
top:3.2%;
left:82%;
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
    <div class="img">
    <img src="https://miro.medium.com/max/3240/1*asR4qapWtOLpFLO-QQ0riQ.jpeg" width=1263.5px height=300px;>
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
<div class="t">
<h1>For any queries  Contact us at:</h1></div>
<div class="ct">
<div class="ph"><img src="https://icons-for-free.com/iconfiles/png/512/app+communication+interaction+mobile+phone+icon-1320137073876948243.png" height=50px width=50px><p class="disp"><br>+91 93603 57838</p></div> <br><br>
<div class="gm"><img src="https://cdn4.iconfinder.com/data/icons/free-colorful-icons/360/gmail.png" height=50px width=50px><a class="disp" target="_blank" href="mailto:cuisineheist@gmail.com"><br>cuisineheist</a></div> <br><br>   
<div class="tw"><img src="https://static01.nyt.com/images/2014/08/10/magazine/10wmt/10wmt-articleLarge-v4.jpg?quality=75&auto=webp&disable=upscale" height=50px width=50px><a class="disp" target="_blank" href="https://twitter.com/CuisineHeist"><br>@CuisineHeist</a></div> <br><br>
<div class="ins"><img src="https://i.pinimg.com/originals/2e/04/62/2e046280eed208eb4ee944e650736511.png" height=50px width=50px><a class="disp" target="_blank" href="https://www.instagram.com/cuisineheist"><br>insta with cuisine heist</a></div><br><br>
<div class="fb"><img src="https://png.pngtree.com/element_our/png_detail/20181011/facebook-social-media-icon-design-template-vector-png_126986.jpg" height=50px width=50px><a class="disp" target="_blank" href=""><br>join us at fb</a></div><br><br>
</div>

</body>
</html>