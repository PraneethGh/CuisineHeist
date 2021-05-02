<html>
<head>
<title>
login
</title>
<style>
body
{
background:url('https://wallpaperaccess.com/full/1317087.jpg')
no-repeat center fixed;
background-size:cover;
background-position:center;
}
.form{
width:400px;
height:450px;
overflow:hidden;
margin:auto;
}
.button
{
display:block;
width:220px;
margin: 35px auto;
position: relative;
box-shadow: 0 0 20px 9px silver;
border-radius:30px;
}
.toggle
{
outline:none;
text-align:center;
padding:10px 30px;
background:transparent;
border:0;
position: relative;
color:silver;
}
#bt
{   
text-align:center;
position: absolute;
width:110px;
height:100%;
background:linear-gradient(to right,orange,red);
border-radius: 30px;
transition:.5s;
outline:none;
}
.input{
top:80px;
position:absolute;
width:280px;
transition:.5s;
}
.field
{
width:100%;
padding:10px 0;
margin:5px 0;
border-bottom:1px solid silver;
border-top:0;
border-right:0;
border-left:0;
background:transparent;
outline:none;
color:silver;
}
.sub
{
width:75%;
padding:10px 30px;
display:block;
margin:auto;
border-radius:30px;
border:0;
background:linear-gradient(to right,orange,red);
outline:none;

}
#reg
{
display:inline;
}
.head
{
text-align:center;
font-size:30px;
color: brown;
animation: title 1.5s ease-out infinite alternate;
border:3px outset red;
background:linear-gradient(to right,black,brown,black);
}
@keyframes title 
{
from 
{
text-shadow:
0px 0px 10px white,
0px 0px 10px white, 
0px 0px 50px white,
0px 0px 50px white,
0px 10px 100px aqua,
0px 10px 100px aqua,
0px -10px 100px aqua,
0px -10px 50px aqua;
}
}
a{
text-decoration: none;
color:silver;
}
#su
{
left:450px;
top:100px;
}
</style>
</head>

<div class="head">
<h1>CUISINE HEIST</h1>
</div>
<body>
<div class="form">
<div class="button">
<div id="bt"></div>
<button type="button" class="toggle" onclick="signin()">Sign-in</button>
<button type="button" class="toggle" onclick="signup()">Sign-up</button>
<form method="POST" action="{{ route('login') }}" class="input" id="si">
@csrf
<input id="email" autocomplete="off" type="email" class=" field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email-Id" required>
<!-- @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror -->

@if ($errors->any())
    {!! implode('', $errors->all('<span style="color:red">:message</span>')) !!}
@endif

<input id="password" autocomplete="off" type="password" class=" field @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password"><br>
@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror

@if ($errors->any())
    {!! implode('', $errors->all('<span style="color:red">:message</span>')) !!}
@endif

<span style="color:silver">Remember Me</span>
<input  class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><br><br>

@if (Route::has('password.request'))
    <a href="{{ route('password.request') }}">Forgot password?</a><br><br>
@endif

<button  type="submit" class=" sub">Sign-In</button>
</form>
<form class="input" id="su">
<button formaction="\new-register" type="submit"  formtarget="_blank" id="reg" class="sub">Sign-Up</button><br><br>
<button formaction="\" type="submit"  id="reg" class="sub">Continue As Guest</button>
</form>
</div>
</div>
<script>
var x=document.getElementById("si");
var y=document.getElementById("su");
var z=document.getElementById("bt");
function signup()
{
x.style.left="-400px";
y.style.left="0px";
z.style.left="110px";
}
function signin()
{
x.style.left="0px";
y.style.left="450px";
z.style.left="0px";
}
</script>
</body>
</html>