<!DOCTYPE html>
<html>
  <head>
  
    <title>LOGIN</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 <style type="text/css">
    <!--<link href="style.css" rel="stylesheet" type="text/css" />-->
body{
  
    font-family: "Times New Roman", Times, serif;
}

.login{
  height:100% ;
  width:100%;
  position: absolute;
  background-image:url("blur1.jpg");
  opacity:0.8;
  background-position:center;
  background-size: cover;
    opacity:0.6;
}
.html{
  color:white;
  position: absolute;
  font-size: 45px;
left: 350px;
}
.form{
  width:340px;
  height:340px;
  position: relative;
  margin: 6% auto;
  background: purple;
  padding: 5px;
  top:15%;
  opacity: 0.8;
}
.head{
  text-align: center;
  color: white;
}
.log , .logi{
  width:70%;
  top:105px;
  position: absolute;
  left:25px;
  color: white;
  }
  .logi{
    top:155px;
  }
  .text,.text1{
  width:50%;
  height:30px;
  top:111px;
  position: absolute;
  left:120px;
  cursor: pointer;
  border-radius:20px;
  padding-left:12px;
   font-family: "Times New Roman", Times, serif;
  font-size: 15px;
  color: solid black;
 }
   .text1{
   top:161px;
 }

.btn,.btn1{
  bottom:90px;
  width:200px;
  height:35px;
  position: absolute;
  left:75px;
  cursor: pointer;
  display: block;
 background: orangered;
  border:0;
  outline:none;
  border-radius:30px;
  font-family: "Times New Roman", Times, serif;
}
.btn1{
  bottom:40px;
}
.btn1:hover{
    background-color:orange;
  transition:all ease 0.2s;
}
.btn:hover{
    background-color:orange;
  transition:all ease 0.2s;
}
</style> 
</head>
  <body>
       <!--<script src="script1.js"></script>-->
<form>	 
   <div class="login">
         <h1 class="html"><strong>ONLINE COURSE REGISTRATION</h1>
     <div class="form">
       <h1 class="head">LOGIN</h1>
       <p class="log">USER ID</p>
       <input type ="text" class="text" name="username" id="username" >
          <p class="logi">PASSWORD</p>
       <input type ="password" class="text1" name="password" id="password" >
     
<input id="submit" type="button" class="btn" value="SIGN IN" />
<input id="register" type="button" class="btn1" value="REGISTER" onclick="location.href = 'registrationfinal.html';" />
       </div>
     </div>
</form> 
<script>
 let y;
 $(document).ready(function() {
 $("#submit").click(function() {
 
 var username = $("#username").val();
 var password = $("#password").val();
 
 if(username==''||password=='' ){
 alert("Please fill all fields.");
 return false;
 }
 
 $.ajax({
 type: "POST",
 url: "login3.php",
 data: {
 username: username,
 password: password,
 
 },
 cache: false,
 success: function(data) {
	if(data == 0)
		alert("Invalid");

else{
	 alert(data);
 
//$.ajax({url: "testht.php"});

	//window.location.href= "testht.php";
	//return false;
	//$("#div").html(r);
window.location.href="coursepage.html";
//setTimeout(function(){document.location.href = "coursepage.html"},500);
}

},
 error: function(xhr, status, error) {
 console.error(xhr);
 }
 });
 
 });
});
//export { y }; 
 </script>
  </body>
</html>

