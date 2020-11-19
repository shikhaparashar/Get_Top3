<?php
    include('login.php');
    if(isset($_SESSION['email']))
    {
        header("location: profile.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <?php
            include 'head.php';
        ?>
    </head>
    <body>
        
    <!-- Navbar -->
    <?php require 'navbar.php'; ?>

        <div class="container-fluid mt-5">

            <div class="d-flex">
                <div class="d-none d-lg-block col-lg-8 p-2 flex-grow-1 text-center my-auto" >
                <div class="card mt-4">
                        <img class="card img-responsive w-100" src="imgs/adds.png" alt="Arogya_Setu"> 
                    </div>
                </div>

                <!-- Register Form -->

                <div class=" d-flex justify-content-center align-items-center col-md-12 col-lg-4">
                    <div style="width: 360px;">

                    <div class="card mt-5 forms">
                        <div class="h2 card-header modal-title text-center">
                            
                                <div>Create a new account</div>
                            <h5 >
                                <span class="text-muted">It's quick & easy</span>
                            </h5>
                        </div>
                        <div class="card-body">
                        
                            <?php require 'registerform.php'; ?>
                        
                        </div>
                    </div>
                    <div class="mt-2 text-center text-muted">
                        © 2020 Copyright GetTop3
                    </div> 
                </div>
                </div>

            </div>
        </div>
        
        

    </body>
</html>
