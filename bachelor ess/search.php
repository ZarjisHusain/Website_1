<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Search by price</title>
	 <link rel = "stylesheet" href ="css/style.css" />
</head>
<body>
<h1> Bachelor's Essential  </h1>
	  <a href = "http://localhost/myProject/home.php"> Home </a>
	  
	  	  <a href = "http://localhost/myProject/show_flat.php"style = "margin-left: 20px;"> Show Available Flats </a>
	  
	  <a href = "http://localhost/myProject/vacancy3.php"style = "margin-left: 20px;"> !!! Vacancy in 3 months !!! </a>
	  
	  <a href = "http://localhost/myProject/addflat.php"style = "margin-left: 20px;"> Add a flat for rent </a>
	  
	  <hr/>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>!!! Search available flats for renting by providing your amount !!! </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Enter your amount">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Flat ID</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Price</th>
									<th>Vacancy in</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","flat");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM flatt WHERE price LIKE   '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['flat_id']; ?></td>
                                                    <td><?= $items['address']; ?></td>
                                                    <td><?= $items['phone']; ?></td>
                                                    <td><?= $items['price']; ?></td>
													<td><?= $items['vacancy_in']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>