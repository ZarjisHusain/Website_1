<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bachelor's Essential Maid section</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
	 <link rel = "stylesheet" href ="css/style.css" />
</head>
<body>

<h1> Bachelor's Essential  </h1>
	  <a href = "http://localhost/myProject/home.php"> Home </a>
	  
	  	  <a href = "http://localhost/myProject/show_flat.php"style = "margin-left: 20px;"> Show Available Flats </a>
	  
	  <a href = "http://localhost/myProject/vacancy3.php"style = "margin-left: 20px;"> !!! Vacancy in 3 months !!! </a>
	  
	
	  
	  <hr/>

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                         unset($_SESSION['status']);
                    }
                ?>

                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Please choose the work that needs to be done. Note: **The price amount of these work will be added with the base price of maid**  </h4>
                    </div>
                    <div class="card-body">

                        <form action="mulcode.php" method="POST">

                            <div class="form-group mb-3">
                                <input type="checkbox" name="brands[]" value="Cooking (1000 TK)"> Cooking (1000 TK)<br>
                                <input type="checkbox" name="brands[]" value="Washing Cloths (700 TK)"> Washing Cloths (700 TK) <br>
                                <input type="checkbox" name="brands[]" value="Cleaning House(400 Tk)"> Cleaning House(400 TK)<br>
                                <input type="checkbox" name="brands[]" value="Dish Washing(200 TK)"> Dish Washing (200 TK) <br>
                                
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="save_multiple_checkbox" class="btn btn-primary">NEXT</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>