<?php 
    session_start();
    require_once "php_code/config.php";
    if(isset($_POST['update']))
    {
        $oldpassword=$_POST['currentpassword']; 
        $newpassword=$_POST['newpassword'];
        $cpassword=$_POST['confirmpassword'];
        if($newpassword!=$cpassword)
        {
            echo "<script>alert('Password and Confirm Password Field do not match  !!');</script>";
            echo "<script type='text/javascript'> document.location = 'change-password.php'; </script>";
        }
        else
        {
            $email=$_SESSION['email'];
            $pass=$_SESSION['password'];

            if($pass!=$oldpassword)
            {
                echo "<script>alert('Old Password not match !!');</script>";
                echo "<script type='text/javascript'> document.location = 'change-password.php'; </script>";
            }
            else
            {
                $sql="SELECT * FROM users WHERE email='". $email ."';";
                $result = $conn->query($sql);
                if($result->num_rows > 0)
                {
                    $ret="UPDATE `users` SET `password`=".$newpassword." WHERE email='$email'";
                    $conn->query($ret);
                    echo "<script>alert('Password Changed Successfully !!');</script>";
                    echo "<script type='text/javascript'> document.location = 'change-password.php'; </script>";
                }
            }
        } 
}

    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Change password | Registration and Login System</title>
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
                    <div class="container-fluid px-4 ">
                        <h1 class="mt-4">Change Password</h1>
                        <div class="card mb-4">
                     <form method="post" name="changepassword" onSubmit="return valid();">
                            <div class="card-body">
                                <table class="table table-bordered">
                                   <tr>
                                    <th>Current Password</th>
                                       <td><input class="form-control" id="currentpassword" name="currentpassword" type="password" value="" required /></td>
                                   </tr>
                                   <tr>
                                       <th>New Password</th>
                                       <td><input class="form-control" id="newpassword" name="newpassword" type="password" value=""  required /></td>
                                   </tr>
                                         <tr>
                                       <th>Confirm Password</th>
                                       <td colspan="3"><input class="form-control" id="confirmpassword" name="confirmpassword" type="password"    required /></td>
                                   </tr>
                  
                                   <tr>
                                       <td colspan="4" style="text-align:center ;"><button type="submit" class="btn btn-primary btn-block" name="update">Change</button></td>

                                   </tr>
                                    </tbody>
                                </table>
                            </div>
                            </form>
                            
                        </div>


                    </div>
                </main>
          <?php include('includes/footer.php');?>
            </div>
        </div>
    </body>
</html>

