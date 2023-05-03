
<html>
    
        <style>
            body{
    
    font-family:'Poppins',sans-serif;
    background-size:cover;
   
    
}
form{
    background-color:#ddd;
    border-radius: 10px;
    padding:30px;
    width:400px;
    margin:20vh auto 0 auto;
    

    
}
h1
{
    text-align:center;
    color:blue;
}
button{
    background-color:rgb(30,144,255);
    border:4px solid rgb(30,144,255);
    color:white;
    border-radius: 5px;
    margin:10px;
    padding:5px;
    cursor:pointer;
    width:100%;
    font-size: 20px;
}
input{
    width:100%;
    margin-bottom:15px;
    height:30px;
    border:1px solid rgb(0, 68, 255);
    border-radius:6px;
}

img{
    margin-left:120;
}
span
{
    color:red;
   margin-top:30px;
}
.or{
text-align: center;
}
   
    
h4
{
    text-align: center;
    margin-top: 10px;
    border:1px solid rgb(30,144,255);
    background-color:rgb(30,144,255);
    padding: 8px;
    width:95%;
    border-radius: 5px;
    margin:10px;
    color:white;
   
  
   
}
h4>a{
    text-decoration: none;
    color:white;
}
h6{
    color:rgb(0, 110, 255);
    text-align: center;
   cursor: pointer;
  
}
h6>a{
    text-decoration: none;
    color:rgb(0, 110, 255);
}
h3{
    text-align: center;
    font-family:'Poppins',sans-serif;
}

        </style>
    <script>
        function validation(){
            var username=document.login.username.value;
            
            var password=document.login.password.value;
            

            



            if(username == null || username=="")
            {
                document.getElementById("one").innerHTML =  "**Name / Email is required**";
                return false;
            }
            else if (password=="" )
           {
           alert("**Enter a Password First**");
            return false;
           }
           else if(password.length<6)
           {
             document.getElementById("two").innerHTML =  "**Password must have 8 characters long**";
            return false;
           }
           else if(username != name && username !=email){
            alert("**Enter a valid Name/ EmailId**");
            return false;

           }
           else if (password != pass && password != pass2) 
           {
            alert ("**Enter a Valid Password**");
            return false;
           }
    else {
        alert ("**SUCCESSFULLY LOGGED IN**");
        return false;
        
}
        
          


    }

        </script>
    
    
    </head>
<title>www.login.com</title>
<body>
<div class="container">
    
<form name="login" method="" action="file:///Users/mac/Desktop/PROJECT%20FORM/valid.html"  target="_blank" onsubmit="return validation()">
    
    
    
  <div class="img"> <img src="https://logodix.com/logo/1713924.png "width="180" height="180"></div>
<div class="name">
USERNAME / EMAIL :<br><br><input type="text" id="username" name="username">
<span id="one"></span>
    
</div>


<div class="name">
    PASSWORD : <br><br><input type="password" id="password" name="password">
    <span id="two"></span>
    
</div>


<button type="SUBMIT">LOG IN</a></button> 
<br>
   <h3>OR</h3> 
   
<h4><a href="file:///Users/mac/Desktop/PROJECT%20FORM/acc.html" target="_blank" >CREATE AN ACCOUNT</a></h4>
<h6><a href="file:///Users/mac/Desktop/PROJECT%20FORM/pass.html">Forgot Your Password?</a></h6>


</form>






</div>


</body>
</html>