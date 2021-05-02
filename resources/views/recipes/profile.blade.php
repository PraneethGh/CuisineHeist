<html>
<head>
<title>my profile</title>
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
    .user{
    text-align:center;
    color:gold;
    text-shadow:1px 5px orange;
    font-size:70px;
    top:57%;
    left:35%;
    position:absolute;
    border:10px solid orangered;
    font-weight:bold;
    padding:15px 60px;
    background-color:blueviolet;
    }
    .user:hover{
    background-color:black;
    border:10px dotted goldenrod;
    color:orange;
    }
    .f{
    top:94%;
    left:38%;
    text-align:center;
    color:crimson;
    position:absolute;
    border-bottom:4px solid greenyellow;
    border-top:4px solid greenyellow;
    font-size:45px;

    }
    .fav{
    position:absolute;
    top:115%;
    left:30%;
    text-align:center;
    border:10px solid gold;
   
    }
    .fav th{
    color:gold;
    border:3px solid silver;
    padding:15px 40px;
    text-align:center;
    font-weight:bold;
    }

   .fav td{
    color:lawngreen;
    border:3px solid silver;
    padding:10px 30px;
    text-align:center;
    font-weight:bold;
    }
    hr{
    position:absolute;
    top:90%;
 width:100%;
 border-color:springgreen;
    }
   .fav td:hover{
    border:3px dotted orange;
    background-color:lightblue;
    color:black;
    font-weight: bold;
    }
    .fav td a:hover{
    color:black;
    font-weight:bold;
    }
    .mr{
    color:crimson;
    top:200%;
    left:40%;
    position:absolute;
    border-bottom:4px solid greenyellow;
    border-top:4px solid greenyellow;
    font-size:45px;
    }
    .mrtab{
    text-align:center;
    top:220%;
    left:30%;
    position:absolute;
    border:10px solid chocolate;

    }
    .mrtab th{
    color:yellowgreen;
    border:3px solid silver;
    padding:15px 40px;
    text-align:center;
    font-weight:bold;
    }

   .mrtab td{
    color:blueviolet;
    border:3px solid silver;
    padding:10px 30px;
    text-align:center;
    font-weight:bold;
    }
    .mrtab td:hover{
    border:3px dotted red;
    background-color:lawngreen;
    color:black;
    font-weight: bold;
    }
    .mrtab td a:hover{
    color:black;
    font-weight:bold;
    }
a[href]{
    text-decoration:none;
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
    <img src="https://miro.medium.com/max/3240/1*asR4qapWtOLpFLO-QQ0riQ.jpeg" width=1263px height=300px;>
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

    <h1 class="user">{{Auth::user()->name}}</h1><br><br> <hr><!--Name of user should be displayed here. praneeth use the concept we used for about page-->
<h1 class="f">My Favourites</h1>

<div class="fav">
    <table  cellspacing="25">
<tr>
<th>DISH NAME</th>
<th>DISH CATEGORY</th>
</tr>
@foreach($fav as $fdish)

 @if($fdish->user_id==$id)
<tr>
<td><a href="/food/{{$fdish->d_id}}">{{$fdish->dish_name}}</a></td>
<td>{{$fdish->Categories}}</td>
</tr>
@endif
@endforeach
</table>   
</div>
<br><br>
<h1 class="mr">MY RECIPE</h1>
<div class="mrtab">
    <table cellpadding="5" cellspacing="15">
        <tr>
        <th>RECIPE NAME</th>
        <th>RECIPE CATEGORY</th>
        </tr>
        @foreach($cho as $rec)
        @if($rec->user_id==$id)
        <tr>
        <td><a href="/food/{{$rec->d_id}}">{{$rec->d_name}}</a></td>
        <td>{{$rec->Categories}}</td>
        </tr>
        @endif
        @endforeach
        </table>   
</div>
</body>
</html>