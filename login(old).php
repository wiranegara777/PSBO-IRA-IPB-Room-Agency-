
        
<html lang="en">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- bootstrap css -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- font awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
<!--  bootstrap js -->
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>

<head>
    <title>Log In</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    <!-- check if get error -->
    <?php 
    if(isset($_GET['err'])){
    ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Wrong Email or Username !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
            </button>
    </div>
    <?php } ?>

    <div class="container">
        <div class="row">
                <div class="col-sm"></div>
                <div class="col-sm">
                        <h2 class="text-center"><i class="fas fa-home"></i></h2></br>
                        <h4 class="text-center">Sign In to IPB Room Agency</h4>
                        <div class="card" style="margin-left:0.7em; width: 20rem;">
                                <div class="card-body">
                                    <form action="proses/LoginProcess.php" method="post">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                            <!-- <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                            </div> -->
                                            <button type="submit" name="Submit" class="container btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                </div>
                <div class="col-sm"></div>
        </div>
    </div>
</body>

</html>
