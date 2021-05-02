

@extends('layouts.layout')

@section('content')

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
</div>
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
            </div><br>
            <div class="box">
            <div class="heading">
            <div class="style">
            <h1>CUISINE HEIST</h1>
            </div></div></div><br>
            
            
            <form action="/food" method="POST">
            @csrf
            <div class="search">
                <input list="dishes" name="search" placeholder="search..." class="text">
                <input type="submit" name="go" class="button" value="GO">
                <datalist id ="dishes">
                @foreach($recipes as $recipe)
                    <option value="{{$recipe->Recipe_item}}"></option>
                @endforeach
            </div>
                
            </form>
            
            <div class="categories1">
            <div class="style1">
            <h1>VEGETARIAN</h1></div>
            <img class="c1" src="https://daytonjewishobserver.org/wp-content/uploads/2019/08/HeavenlyThaali.jpg" height=300px width=300px>
            <div class="split">
            
            <form action="/food" method="post">
            @csrf
            <button class="sub" type="submit" name="name" value="Veg,South Indian">SOUTH INDIAN</button><br><br>
            <button class="sub" type="submit" name="name" value="Veg,North Indian">NORTH INDIAN</button>
            </form>
            
            </div>
            </div>
            <div class="categories2">
            <div class="style1">
            <h1>NON-VEGETARIAN</h1></div>
            <img class="c1" src="https://i.ytimg.com/vi/Q2Cq4nC0CP4/maxresdefault.jpg" height=300px width=300px>
            <div class="split">
            
            <form action="/food" method="post">
            @csrf
            <button class="sub" type="submit" name="name" value="Non Veg,South Indian">SOUTH INDIAN</button><br><br>
            <button class="sub" type="submit" name="name" value="Non Veg,North Indian">NORTH INDIAN</button>
            </form>
            
            </div>
            </div>
            <div class="categories3">
            <div class="style1">
            <h1>DESSERTS</h1></div>
            <img class="c1" src="https://i.pinimg.com/originals/a6/bf/38/a6bf3804ae055714e0655b64d7286fce.jpg" height=300px width=300px>
            <div class="split1">
            <form action="/food" method="post">
            @csrf
            <button class="sub2" type="submit" name="name" value="Deserts">VIEW</button><br><br>
            </form>
            </div>
            </div>
            <div class="categories4">
            <div class="style1">
            <h1>MUNCHIES</h1></div>
            <img class="c1" src="https://static.toiimg.com/thumb/59217136.cms?width=1200&height=900" height=300px width=300px>
            <div class="split1">
            <form action="/food" method="post">
            @csrf
            <button class="sub2" type="submit" name="name" value="Munchies">VIEW</button><br><br>
            </form>
            </div>
            </div>
        </div>

<?php
    if(isset($_POST['go']))
    {
        $flag=0;
        foreach($recipes as $recipe)
        {
            if($_POST['search']==$recipe->Recipe_item)
            {
                $flag=1;
                $id=$recipe->Rec_Id;
                break;
            }
        }
        if($flag==1)
            header("/food/$id");
        else
            echo "wrong";
    }
?>
@endsection
    
