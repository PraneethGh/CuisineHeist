<html>
<head>
<title>
sign up
</title>
<style>
*
{
font-family: sans-serif;
cursor: pointer;
}
body{
background:url('https://thumbs.gfycat.com/NeglectedLividDiamondbackrattlesnake-size_restricted.gif');
/*https://ak.picdn.net/shutterstock/videos/13809080/thumb/1.jpg*/
margin:auto;
background-size:cover;
}
.logo{
text-align: center; 
}
.icon
{
width:100px;
height:70px;
border-radius:50%;
top:-50px;
}
.field
{
outline:none;
background:transparent;
margin:5px 0;  
border-radius:30px;
cursor: pointer;
border:2px solid grey;
color:silver;
transition:width 0.4s ease-in-out;
}
.su
{
text-align:center;
background:black;
width:400px;
height:550px;
margin:auto;
cursor: pointer;
}
h2{
color:chartreuse;
text-shadow:0 5px 20px;
}
.left
{
float:left;
top:10%;
}
.right
{
float:right;
top:10%;
}
.sub
{
cursor:pointer;
border-radius: 30px;
width:65%;
padding:10px 30px;
display:block;
margin:auto;
border:0;
background:linear-gradient(to right,lawngreen,green);
outline:none;
font-size:20px;
font-weight:bold;
}
a
{
text-decoration:none;
}
label
{
color:grey;
}
.date
{
outline:none;
background:transparent;
background:silver;
width:40%;
color:black;
}
.box 
{
background-color:black;    
padding:10px 50px;
width: 400px;    
position:absolute;
top:50%;
left:50%;
transform:translate(-50%, -50%);
}
.pop
{
width:63%;
padding:10px 30px;
display:block;
margin:auto;
border:0;
background:linear-gradient(to right,lawngreen,green);
outline:none;
color:black;
font-size:15px;
font-weight: bold;
}
.dialog 
{
color:gold;
left:0;
top:30%;
visibility:hidden;
width:100%;
height:100%;
position:absolute;
opacity:0.5;
transition:linear 0.2s;
}
.finish
{
background-color:saddlebrown;
color:gold;    
float: right;
width:25px;
border-radius:80px;
text-align: center;
}
.dialogbox
{
transition-duration:linear 0.2s;   
opacity:1;
visibility: visible;
}
.hd{
border:3px solid silver;
}
.field:focus{
    width: 60%;
    transition-duration: 0.3s ease-in-out;
}
input:invalid{
box-shadow:0 1px red;
}
</style>
</head>
<div class="logo">
<img src="https://b.zmtcdn.com/data/pictures/8/18607088/fed5a167bdf3ecfe43871ff04fc57f1a_featured_v2.jpg" height="200px" width="600px"><br><br><br><br><br><br>
</div>
<div class="left">
<img src="https://www.dosafactorymenu.com/blog-admin/images/indian-food-items-apt-for-everyone041641.jpeg" height=200px width=300px><br><br><br><br>
<img src="https://img.mobygeek.com/crop/1200x628/2020/02/23/indian-food-salinda-41c0.jpg" height=200px width=300px><br><br><br><br>
<img src="https://www.roughguides.com/wp-content/uploads/2014/12/Edited-9-Dosa-CXHGB4-1680x1050.jpg" height=200px width=300px>
</div>
<div class="right">
<img src="https://qph.fs.quoracdn.net/main-qimg-5beaed2c2fa62ab9ed2a5086d77ae0e0.webp" height=200px width=300px><br><br><br><br>
<img src="https://3.imimg.com/data3/JG/MG/MY-15762941/vegetarian-foods-500x500.jpg" height=200px width=300px><br><br><br><br>
<img src="https://as2.ftcdn.net/jpg/03/13/35/67/500_F_313356773_6ODO21W3FR2jIi74DSGTaLDN8MxlBVZ7.jpg" height=200px width=300px>
</div>
<div class="su">
<img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/profile-1506810-1278719.png" class="icon">
<hr>
<form method="POST" action="{{ route('register') }}">
@csrf
<h2><b>REGISTER</b></h2>
<input autofocus="false" autocomplete="off" id="name" type="text" class="form-control field @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full Name" ><br><br>
@error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
<input id="email"  autocomplete="off" type="email" class="form-control field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address" ><br><br>
@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror

<input id="password"  autocomplete="off" type="password" class="form-control field @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password" >
<!-- @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror -->

@if ($errors->any())
    {!! implode('', $errors->all('<li style="color:red">:message</li>')) !!}
@endif
<br><br>
<input id="password-confirm"  autocomplete="off" type="password" class="form-control field" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
<br><br>
<button class="btn btn-primary sub" type="submit">REGISTER</button>
</form>
<button class="pop">view terms and conditions</button><br><br><br>
<div class="dialog">
<div class="box">
<div class="finish">&times;</div>
<h1 class="hd">Terms and conditions</h1>
<ul>
<li>I will not add recipes with abusive content.</li><br>
<li>I will not plaigarise recipes</li><br>
<li>I agree to let cuisine heist to us my recipes for commercial purposes</li><br>
<li>I understand that my data will be visible to cuisine heist</li><br>
<li>I allow cuisine heist to send me emails</li><br>
<li>I will not misuse my account for any malicious purposes</li><br>
<li>If i am found to be violating any of the above conditions,I understand that cuisine heist has the right to remove my recipe and also result in the permanent deletion of my account</li>
</ul>
By registering I agree to the terms and conditions.
</div>
</div>

</div>
<script>
var pop = document.querySelector(".pop");
var finish = document.querySelector(".finish");    
var dialog = document.querySelector(".dialog");
function open() 
{
dialog.classList.toggle("dialogbox");
}
pop.addEventListener("click", open);
finish.addEventListener("click", open);
</script>
</html>