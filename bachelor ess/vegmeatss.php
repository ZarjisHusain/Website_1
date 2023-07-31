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
     width: 29%;
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


 



  <h2 style = "text-align: center;" > Bachelor's Essential Shop </h2>
  <h2 style = "text-align: center;" > You can order from here </h2>

<div class="main">

 <!--cards -->

<div class="card">

<div class="image">
   <img src="css/ss.jpg">
</div>
<div class="title">
 <h1>
Chicken,beef, mutton, Fish </h1>
</div>
<div class="des">
 <p></p>
 <p>Shop here</p>
 <a href="http://localhost/myProject/dropdown.php" >
  <button>Book</button>
  </a>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="css/veg.jpg">
</div>
<div class="title">
 <h1>
Vegetables</h1>
</div>
<div class="des">
 <p></p>
  <p> Shop here</p>
 <a href="http://localhost/myProject/dropdown2.php" >
  <button>Book</button>
  </a>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="css/mas.jpg">
</div>
<div class="title">
 <h1>
Masala,Eggs, other stuff </h1>
</div>
<div class="des">
 <p></p>
 <p>Shop here</p>
 
 <a href="http://localhost/myProject/dropdown3.php" >
  <button>Book</button>
  </a>
</div>
</div>
<!--cards -->




</div>
</body>
</html>