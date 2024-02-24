<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

* {
box-sizing: border-box;
 
}

input[type=text], select, textarea { width: 100%;
padding: 12px;
border: 1px solid rgb(70, 68, 68); border-radius: 4px;
resize: vertical;
}
input[type=email], select, textarea { width: 100%;
padding: 12px;
border: 1px solid rgb(70, 68, 68); border-radius: 4px;
resize: vertical;
}

label {
padding: 12px 12px 12px 0; display: inline-block;
}

input[type=submit] {
background-color: rgb(37, 116, 161); color: white;
padding: 12px 20px; border: none;
border-radius: 4px; cursor: pointer; float: right;
}

input[type=submit]:hover { background-color: #45a049;
}

.container {
border-radius: 20px; background-color: #dc3939; padding: 20px;
}
.col-79 { color:aliceblue
}
.col-25 { float: left; width: 25%;
margin-top: 6px; color:aliceblue
}

.col-75 {
 
float: left; width: 75%; margin-top: 6px; color:aliceblue
}

.row:after { content: ""; display: table; clear: both;

}

button{
margin-top:50px; width:150px; height:40px;
border-radius:20px; border:none;
text-align:center;
color:rgba(var(--bs-danger-rgb)); color:red;
}

button:hover{ color:white;
background-color: rgb(86, 80, 80);
}
</style>
</head>
<body>


<div class="container">
<form>
<nav class="navbar navbar-expand-sm bg-danger" >
<a class="navbar-brand" href="#">
<img src="images/logo.jpg" style="width:70px; margin-left: 30px; border-radius:40px;" class="rounded-pill">
</a>
<div class="col-79">
<Center><h1>FEEDBACK FORM</h1></Center>
</div>
<div class="row">
<div class="col-25">
<label for="fname">First Name</label>
</div>
<div class="col-75">
<input type="text" name="firstname" placeholder="Your first name..">
</div>
</div>
<div class="row">
 
<div class="col-25">
<label for="lname">Last Name</label>
</div>
<div class="col-75">
<input type="text" name="lastname" placeholder="Your last name..">
</div>
</div>
<div class="row">
<div class="col-25">
<label for="email">Mail Id</label>
</div>
<div class="col-75">
<input type="email" name="Mailid" placeholder="Your mail id..">
</div>
</div>
<div class="row">
<div class="col-25">
<label for="country">Country</label>
</div>
<div class="col-75">
<select name="country">
<option value="none">Select Country</option>
<option value="australia">Australia</option>
<option value="canada">Canada</option>
<option value="usa">USA</option>
<option value="russia">Russia</option>
<option value="japan">Japan</option>
<option value="india">India</option>
<option value="china">China</option>
</select>
</div>
</div>
<div class="row">
<div class="col-25">
<label for="feed_back">Feed Back</label>
</div>
<div class="col-75">
<textarea name="subject" placeholder="Write something.." style="height:200px"></textarea>
</div>
</div>
<div class="row">
<center><button>Submit</button> </center>
</div>
</form>
</div>

</body>
</html>
 

