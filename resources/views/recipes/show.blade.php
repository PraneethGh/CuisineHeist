<html>
<head>
<style>
*
            {
            cursor: pointer;
            font-family:"Times New Roman", Times, serif;
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
*{
font-family:sans-serif;
cursor:pointer;
}
body{
background-color:black;
}
.recipe{
     color:lime;
}
.recipe1{
     color:lime;
     position:absolute;
     top:90%;
     left:0;
}
.show{
                margin-left:20px;
                color:cyan;
                position:absolute;
     top:120%;
     left:0;
     font-size:20px;
}
            
            
a{
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
.favourites{
color:;
font-size:22px;
text-decoration:none;
top:16%;
left:85%;
position:relative;
width:15%;
color:black;
background-color:lawngreen;

}
.favourites:hover{
background-color:gold;
color:black;
}
.recname{
/* top:60%;
left:4%; */
position:relative;
text-shadow:0px 2px crimson;
font-weight:bold;
font-size:40px;
text-align:center;
}
.api{
position:absolute;
top:92%;
left:40%;
text-align:center;
}
.field{
color:black;
background-color:gold;
font-weight:bold;
outline:none;
font-size:20px;
}
.sub{
    width:60%;
padding:10px 30px;
display:block;
margin:auto;
border-radius:30px;
border:0;
background:linear-gradient(to right,gold,yellow);
outline:none;

}


            ::placeholder {
            color:black;
            } 

            .disp1{
            text-decoration:none;
            color:gold;
            position:absolute;
            top:110%;
        left:43%;

        
            }
            .txt{
            color:gold;
            font-size:20px;
            border:2px solid lawngreen;
            font-weight:bold;
            }
.hd{
color:gold;
text-align:center;
position:absolute;
top:80%;
left:42%;
}
hr{
position:absolute;
top:75%;
width:100%;
left:0;
}
.redirect{
color:lawngreen; 
position:absolute;
top:90%;
left:37%;
text-align:center;
text-decoration:none;
border:3px dotted gold;
}
.redirect:hover{
color:black;
background-color:red;
border:3px solid silver;
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
            <li><a href="\">HOME</a></li>
            <li><a href="/food/create">ADD RECIPE</a></li>
            <li><a href="/home">ABOUT</a></li>
            <li><a href="\help">CONTACT</a></li>
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
            </div>
@if(!Auth::guest())
<button class="favourites" formaction="/food" ><a href="/add/{{$recipe->Rec_Id}}​​​​">Add to favourites</a></button> 
@else
<button class="favourites"><a href="/new-login">Login to Add to favourites</a></button> 
@endif



            <div >
                <div >
                   <h1 class="recname" style="color:#FF00FF;text-align:center;font-weight:bold">{{$recipe->Recipe_item}}</h1>
                   <div class="show">
                   <p class="recipe" style="font-size:30px; color:gold"><u>Categories</u></p><p>{{$recipe->Categories}}</p>

                   @php
                        $meas="(1 cup = 250 ML) ";
                        $ings=explode(';',$recipe->Ingredients);
                   @endphp
                   </br><br>
                   <p class="recipe" style="font-size:30px; color:gold"><u>Ingredients</u></p>
                   <li><i>{{$meas}}</i></li>
                   @foreach($ings as $ing)
                        <li>{{$ing}}.</li>
                   @endforeach

                   @php
                        $insts = explode('.',$recipe->Instructions);
                        array_pop($insts);
                   @endphp
                   </br><br>
                   <p class="recipe" style="font-size:30px; color:gold"><u>Instructions</u></p> 
                   @foreach($insts as $inst)
                         @php
                              $inst = ltrim($inst);
                              $inst = ucfirst($inst);
                         @endphp
                        <li>{{$inst}}.</li>
                   @endforeach
</div>
                </div>
               
            </div>
        </div>
<?php 
require_once 'C:\xampp\htdocs\vinayaga\googleapi/vendor/autoload.php';
require_once 'C:\xampp\htdocs\Geocoding.php';
use myPHPnotes\Geocoding;
if(isset($_GET['lname'])){
$Developer_Key="AIzaSyDBAnmOqAZ2c5zW2E5O0ijzx9WmbcWkaSs";
$client=new Google_Client();
$client->setDeveloperKey($Developer_Key);
$YouTube=new Google_Service_Youtube($client);
$place=$_GET['lname'];

$geo=new Geocoding("AIzaSyDBAnmOqAZ2c5zW2E5O0ijzx9WmbcWkaSs");

$coordinates=$geo->getCoordinates($place);

$var=(string)$coordinates["latitude"].",".(string)$coordinates["longitude"];
$dish=$recipe->{'Recipe_item'};
if(!$YouTube)
{echo "Error";}
else
 {echo "";}
 $queryParams = [
     'location' =>$var,
     'locationRadius' => '10mi',
     'q' =>$dish,
     'type' => 'video'
 ];
  $response = $YouTube->search->listSearch('snippet', $queryParams);}
    ?>
 <html>
 <body>
 @if(Auth::guest())
 <h2 style="color:gold"><a class="redirect" href="/new-login">Login to access youtube Api</a></h2>
 @else
  <h2 class="hd">Enter the Location</h2><br>
 
 <form method="GET">

 <div class="api">
 <input type="text" autocomplete="off" placeholder="Location..." class="field" name="lname"><br><br>
 <input type="submit" class="sub" value="submit">
                 
 </form>
 </div>
 <?php
 $str=[];
 $ct=0;
 if(isset($_GET['lname'])){ 
 foreach($response['items'] as $video){
    ?>
 <?php 
    if($ct<2){
    $str[$ct]=($video['id']['videoId']); $ct++;}?>
 <?php }}

 ?>
 <?php 
 if(isset($_GET['lname'])){ ?>
<div class="disp1">
<br><a class="txt" href="https://www.youtube.com/watch?v=<?php   echo $str[0]; ?>">Click here</a>
<a class="txt" href="https://www.youtube.com/watch?v=<?php  echo $str[1]; ?>">Click here</a>
</div>
 <?php } ?>
 @endif
  </body>
  </html>

    
