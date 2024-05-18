<?php 
    session_start();
    require_once "php_code/config.php";
    ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <title>Dashboard | Registration and Login System</title>
            <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
            <link href="css/styles.css" rel="stylesheet" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        </head>
        <body class="sb-nav-fixed">
        <?php include_once('includes/navbar.php');?>
            <div id="layoutSidenav">
            <?php include_once('includes/sidebar.php');?>
                <div id="layoutSidenav_content">
                    <main>
                        <div class="container-fluid px-4">
                            <h1 class="mt-4">Dashboard</h1>
                            <hr />
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>

    <?php 
        $email=$_SESSION['email'];

        $sql="SELECT * FROM users WHERE email='". $email ."';";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        ?>                        
            <div class="row" >
                <div class="col-xl-5 col-md-6" >
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Welcome Back <?php echo $row['Name'];?></div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="profile.php">View Profile</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                </div>
    <?php  ?>


                            </div>
                
                            </div>
                    
                        </div>
                    </main>
            <?php include('includes/footer.php');?>
                </div>
            </div>
    </html>

