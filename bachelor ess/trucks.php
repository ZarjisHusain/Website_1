<!DOCTYPE html>
<html>
<head>
 <title>Truck List</title>
</head>

<style type="text/css">


*{
 margin: 0px;
 padding: 0px;
}
body{
 font-family: arial;
}
.main{

 margin: 2%;
}

.card{
     width: 20%;
     display: inline-block;
     box-shadow: 2px 2px 20px black;
     border-radius: 5px; 
     margin: 2%;
    }

.image img{
  width: 100%;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
  

 
 }

.title{
 
  text-align: center;
  padding: 10px;
  
 }

h1{
  font-size: 20px;
 }

.des{
  padding: 3px;
  text-align: center;
 
  padding-top: 10px;
        border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
}
button{
  margin-top: 40px;
  margin-bottom: 10px;
  background-color: white;
  border: 1px solid black;
  border-radius: 5px;
  padding:10px;
}
button:hover{
  background-color: black;
  color: white;
  transition: .5s;
  cursor: pointer;
}



  

</style>
<body>


 



  <h2 style = "text-align: center;" > Please Select </h2>
  <h2 style = "text-align: center;" > What type of truck you need </h2>

<div class="main">

 <!--cards -->

<div class="card">

<div class="image">
   <img src="css/lorr.jpg">
</div>
<div class="title">
 <h1>
Lorry Truck</h1>
</div>
<div class="des">
 <p>44 tons allowed per trip</p>
 <p>1200 TK</p>
 <a href="http://localhost/myProject/lorryt.php" >
  <button>Book</button>
  </a>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="css/1.jpg">
</div>
<div class="title">
 <h1>
Mini Truck</h1>
</div>
<div class="des">
 <p>15 tons allowed per trip</p>
  <p> 4000 TK</p>
 <a href="http://localhost/myProject/mtruck.php" >
  <button>Book</button>
  </a>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="css/van.jpg">
</div>
<div class="title">
 <h1>
Mini Van </h1>
</div>
<div class="des">
 <p>8 tons allowed per trip.</p>
 <p>3500 Tk </p>
 
 <a href="http://localhost/myProject/mvan.php" >
  <button>Book</button>
  </a>
</div>
</div>
<!--cards -->



<div class="card">

<div class="image">
   <img src="css/y22.jpg">
</div>
<div class="title">
 <h1>
Truck</h1>
</div>
<div class="des">
 <p>32 ton allowed per trip</p>
 <p> 10000 tk</p>
 <a href="http://localhost/myProject/truckt.php" >
<button>Book</button>
</a>
</div>
</div>
</div>
</body>
</html>