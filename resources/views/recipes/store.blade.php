<html>
<head>
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
.recipe{
font-weight:bold;
letter-spacing:2px;
position:absolute;
top:59%;
left:43%;
text-shadow:2px 3px green;
border-top:2px solid red;
border-bottom:2px solid red;
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
            .rec{
            text-decoration:none;
            color:gold;
            text-align:center;
            font-size: 25px;
            font-weight:bold;
            position:relative;
            padding:10px 30px;
            left:39%;
            border:4px solid gold;
            width:100%;
            } 
            .rec:hover{
            color:black;
            background-color:darkgray;
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
                <li><a href="\">HOME</a></li>
                <li><a href="/food/create">ADD RECIPE</a></li>
                <li><a href="/home">ABOUT</a></li>
                <li><a href="\help">HELP</a></li>
                <li><a href="#">MY ACCOUNT</a>
                <ul class="drop">
                <li><a href="/profile">Profile</a></li>
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
                <div style="color:#7FFF00;text-align:center;font-size:22px">
                   <h2 class="recipe">RECIPES</h2>
                </div>

                @php
                    $flag=0;
                @endphp
                    @foreach($recipes as $recipe)
                    @php
                        if($recipe->Recipe_item==$search)
                        {
                            $flag=1;
                            $id=$recipe->Rec_Id;
                            break;
                        }
                    @endphp
                    @endforeach
                @php    
                    if($flag==1)
                    {
                        header('Location: /food/'.$id);
                        exit();
                    }
                    
                @endphp

                @php
                    $cat=explode(',',$kings);
                @endphp
                
                @foreach($recipes as $recipe)
                        @php 
                            $hi=explode(',',$recipe->Categories);  
                            foreach($hi as $h){
                                $h = trim($h);
                            }
                            $flag=0;
                        @endphp
                            @foreach($cat as $dog)
                            @php
                                if(in_array($dog,$hi,TRUE))
                                {
                                    $flag=1;
                                }
                                else
                                {
                                    $flag=0;
                                    break;
                                }
                            @endphp
                            @endforeach
                        @if($flag==1)
                            <div >
                                <br><br><br><br><br><a class="rec" href="\food\{{$recipe->Rec_Id}}">{{$recipe->Recipe_item}}</a><br>
                        </div>
                        @endif  
                @endforeach

           
</html>
    
