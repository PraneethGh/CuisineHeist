<html>
    <head>
    <title>forget</title>
    <style>
    *{
    font-family:sans-serif;
    cursor:pointer;
    }
    body{
    margin:0;
    background-color:black;
    }
    .field{
    outline:none;
    font-weight:bold;
    background-color:black;
    color:silver;
    font-size:20px;
    }
    .res{
    top:35%;
    left:35%;
    position:absolute;
    height:350px;
    width:400px;
    background-color:brown;
    text-align:center;
    }
    .sub
{
width:50%;
padding:10px 30px;
display:block;
margin:auto;
border:0;
background:linear-gradient(to right,aqua,blue);
outline:none;
color:black;
font-size:15px;
font-weight: bold;
}
.tit{
text-align:center;
font-size:70px;
color:aqua;
text-shadow:0px 2px blue;
font-weight:bold;
background-color:brown;
}
.hd{
    text-align:center;
color:aqua;
text-shadow:0px 2px blueviolet;
font-weight:bold;

}
.field:focus{
border-color:gold;
}
    </style>
    </head>
    <h1 class="tit">Change Password<hr></h1>
    
    <form class="res" method="POST" action="{{ route('password.update') }}">
    @csrf
        <input type="hidden" name="token" value="{{ $token }}"> 
        <h1 class="hd">Enter Your Details</h1><hr><br>
        <input id="email" type="email" class="field @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Email..."><br><br>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        
        <input id="password" type="password" class="field @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password..."><br><br>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        
        <input id="password-confirm" type="password" class="field" name="password_confirmation" required autocomplete="new-password" placeholder=" Confirm Password..."><br><br><br>
        
        <button type="submit" class="sub">Reset Password</button>
    </form>
</html>