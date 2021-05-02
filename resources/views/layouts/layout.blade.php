<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CuisineHeist</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            /* html, body {
                font-size: 1;
                background-color: #fff;
                color: #636b6f;
                font-family: 'Roboto Condensed', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height:100vh
            }

            .flex-center {
                align-items: center;
                display: flex; 
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }*/

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            /*
            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }*/

            .links > a {
                color: blue;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            /*
            .m-b-md {
                margin-bottom: 30px;
            }
            footer{
                background: #eee;
                padding: 20px;
                text-align: center;
            } */
            
            /*Kishans CSS*/
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
            .heading{
            text-align:center;
            color:lawngreen;
            font-weight:bold;
            top:60%;
            left:36%;
            position: absolute;
            font-size:25px;
            }
            .search
            {
            position:absolute;
            top:85%;
            left:50%;
            transform:translate(-50%,-50%);
            background:lawngreen;
            height:40px;
            border-radius:30px;
            padding:10px;
            }
            .button 
            {
                text-decoration:none;
            align-items:center;
            color:black;
            width:60px;
            height:30px;
            border-radius:50%;
            background:lawngreen;
            display:flex;
            justify-content: center;
            transition:0.4s;
            font-weight:bold;
            }
            .text
            {
            border:none;
            background:none;
            outline:none;
            float:left;
            color:black;
            font-size:16px;
            transition:0.7s;
            line-height: 40px;
            width:0px;
            font-weight:bold;
            }
            .search:hover>.text{
            width:220px;
            }
            .search:hover>.button 
            {
            background:darkblue;
            height:70px;
            width:70px;
            color:silver;
            }
            ::placeholder {
            color:black;
            } 
            .style
            {
            font-weight:bold;
            animation: head 1.5s ease-in-out infinite alternate;
            text-align:center;
            }
            .style1
            {
            font-weight:bold;
            animation: head1 1.5s ease-in-out infinite alternate;
            text-align:center;
            }
            @keyframes head 
            {
            from 
            {
            color:black;
            text-shadow: 0 0 10px gold, 
            0 0 20px gold;
            left:0%;
            }
            to 
            {
            color:gold;
            text-shadow: 0 0 20px gold, 
            0 0 30px gold;
            left:43%;
            }
            }
            @keyframes head1 
            {
            from 
            {
            color:silver;
            text-shadow: 0 0 10px greenyellow, 
            0 0 20px greenyellow;
            }
            to 
            {
            color:lawngreen;
            text-shadow: 0 0 20px greenyellow, 
            0 0 30px greenyellow;
            }
            }
        
            .c1
            {
            transition: .7s ease;
            opacity:1;
            }
            .categories1:hover .c1{
            opacity: 0.2;
            }
            .categories1:hover .split{
            opacity:1;
            }
            .categories2:hover .c1{
            opacity: 0.2;
            }
            .categories2:hover .split{
            opacity:1;
            }
            .categories3:hover .c1{
            opacity: 0.2;
            }
            .categories3:hover .split1{
            opacity:1;
            }
            .categories4:hover .c1{
            opacity: 0.2;
            }
            .categories4:hover .split1{
            opacity:1;
            }
            .split{
            transition: .7s ease;
            opacity: 0;
            position: absolute;
            transform: translate(-50%, -50%);
            text-align:center;
            top:60%;
            left:50%;
            }
            .split1{
            transition: .7s ease;
            opacity: 0;
            position: absolute;
            transform: translate(-50%, -50%);
            text-align:center;
            top:60%;
            left:43%;
            }
            .sub{
            border-radius: 30px;
            width:85%;
            padding:10px 30px;
            display:block;
            margin:auto;
            border:0;
            background:linear-gradient(to right,gold,orange);
            outline:none;
            font-size:15px;
            font-weight:bold;
            color:black;
            }
            .sub2{
            border-radius:30px;
            width:140%;
            padding:18px 30px;
            margin:auto;
            display:block;
            border:0;
            background:linear-gradient(to right,gold,orange);
            outline:none;
            font-size:15px;
            font-weight:bold;
            color:black;
            }
            .categories1
            {
            left:20%;
            top:98%;
            position: absolute;

            }
            .categories2
            {
            color:silver;
            left:56%;
            top:98%;
            position: absolute;
            text-align:center;
            }
            .categories3
            {
            color:silver;
            left:20%;
            top:165%;
            position: absolute;
            text-align:center;
            }
            .categories4
            {
            color:silver;
            left:56%;
            top:165%;
            position: absolute;
            text-align:center;
            }
            .recipe{
                color:lime;
            }
            .show{
                margin-left:20px;
                color:cyan;
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
            @yield('content')
    </body>
    
</html>