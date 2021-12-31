<!DOCTYPE html>
<html lang="en">
  <head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="K Wilford">
  
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Pushster&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=The+Nautigal&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
  
 <style>*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

body{
	font-family: 'Open Sans', sans-serif, Tahoma;
	background-color: #7e99bd;
} 
	

.logoDesign{
	background-image: url("images/logo.png");
    background-repeat: no-repeat;
    background-position: left, top;
	background-size: 50px 50px; 
    background-color: black;
    height: 50px;	
	font-size: 20px;
	font-weight: bold;
	color: #ccc;
    text-align: center;	
	padding-top: 10px;
	
   }
   
   
 .topnav {
  overflow: hidden;
  background-color: #30418a;
}

.topnav a {
  float: left;
  display: block;
  color: #ebd281;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 16px;
}

.topnav a:hover {
  background-color: skyblue;
  color: navy;
}


.topnav .icon {
  display: none;
}

.fixed-footer{
	    width: 100%;
        position: fixed;        
        bottom: 0;
		background-color: black;
		text-align: center;
		color: #ebd281; 
		font-size: 12px;
		word-spacing: 2px;
		font-style: italic;
		padding: 15px 0;
    }
	
	
.welcome{
	text-align: center;
	color: #2F0B3A;
	margin-top: 2%;
}

.info{
	font-size: 25px;
	text-align: center;
}

.info2{
	font-size: 18px;
	text-align: center;
}

.bigText{
	font-size: 2em;
}

.colorSwatch{
	padding: 20px 0;	
	width: auto;
    font-size: 16px;
    text-align: center;
}

.colorSwatch2{
	width: 100%;
	height: 50px;	
	
       	
}


th{
	font-size: 20px;
	font-weight: bold;
	text-align: center;
	border: 0;
}

td{
	font-size: 18px;
}

.codeBlk{
	color: #ccc;
	font-weight: bold;
	background-color: navy;
	border-radius: 5px;
	font-size: 20px;
	padding: 5px 2px;
	font-family: monospace;
	display: block;
	text-align: left;
}

.codeBlk2{
	color: red;
	background-color: #fff;
	border-radius: 5px;
	font-size: 16px;
	padding: 5px 3px;
	font-family: monospace;
	display: block;
	text-align: left;
}

.separater{
	border: 8px solid navy;
	border-radius: 5px;
}

img{
	height: 350px;
	max-width: 100%;
    margin: 20px 0;	
	 
}


@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}  
   



@media (min-width: 300px) and (max-width: 700px) {
  .welcome {
    margin-top: 2%;
  }
  
  nav a {
	  padding: 10px 3px;
	  text-align: left;
  }  
  
}

</style> 
    
</head>





<header class="logoDesign">
   Kristin's Web Design Guide

</header>

<div class="topnav" id="myTopnav">
  <a href="index.php">Home</a>
  <a href="pg2.php">Fonts</a>
  <a href="pg3.php">Page Layout</a>
  <a href="pg4.php">Form Elements</a>
  <a href="pg5.php">Element Styles</a> 
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>




<body>
