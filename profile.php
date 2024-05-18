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
        <title>Profile | Registration and Login System</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="style/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        
      <?php include_once('includes/navbar.php');?>
        <div id="layoutSidenav">
          <?php include_once('includes/sidebar.php');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        
<?php 
$email=$_SESSION['email'];

$sql="SELECT * FROM users WHERE email='". $email ."';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
    <h1 class="mt-4"><?php echo $row['Name'];?>'s Profile</h1>
    <div class="card mb-4">
    
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                <th>Name</th>
                    <td><?php echo $row['Name'];?></td>
                </tr>
                
                <tr>
                    <th>Email</th>
                    <td colspan="3">
                        <?php 
                            if($row['email']=="dd@gmail.com")echo "--";
                            else echo $row['email'];
                        ?>
                    </td>
                </tr>
                    <tr>
                    <th>Phone</th>
                    <td colspan="3"><?php echo $row['Phone'];?></td>
                </tr>
                </tr>
                    <tr>
                    <th>Governorate</th>
                    <td colspan="3"><?php echo $row['Governorate'];?></td>
                </tr>
                </tr>
                    <tr>
                    <th>Id</th>
                    <td colspan="3"><?php echo $row['Id'];?></td>
                </tr>
                    <tr>
                    <th>Age</th>
                    <td colspan="3"><?php echo $row['Age'];?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

<?php
    $sql="SELECT * FROM event WHERE email='". $email ."';";
    $event="لا توجد حجوزات";
    $result2 = $conn->query($sql);
    if ($result2->num_rows > 0) 
    {
        $row2 = $result2->fetch_assoc();
        $event=$row2['event_name'];
    }

    $sql="SELECT * FROM museum WHERE email='". $email ."';";
    $museum="لا توجد حجوزات";
    $result3 = $conn->query($sql);
    if ($result3->num_rows > 0) 
    {
        $row3 = $result3->fetch_assoc();
        $museum=$row3['museum_name'];
    }

    $sql="SELECT * FROM places_of_visit WHERE email='". $email ."';";
    $places_of_visit="لا توجد حجوزات";
    $result4 = $conn->query($sql);
    if ($result4->num_rows > 0) 
    {
        $row4 = $result4->fetch_assoc();
        $places_of_visit=$row4['place'];
    }

    $sql="SELECT * FROM trips WHERE email='". $email ."';";
    $trips="لا توجد حجوزات";
    $result5 = $conn->query($sql);
    if ($result5->num_rows > 0) 
    {
        $row5 = $result5->fetch_assoc();
        $trips=$row5['Tourist_guide_name'];
    }

?>
    
    <h1 class="mt-4"><?php echo $row['Name'];?>'Tickets</h1>
    <div class="card mb-4">
    
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                <th>Event Name</th>
                    <td><?php echo $event;?></td>
                </tr>
                <tr>
                    <th>Place Name</th>
                    <td><?php echo $places_of_visit;?></td>
                </tr>
                <tr>
                    <th>Museum Name</th>
                    <td colspan="3"><?php echo $museum;?></td>
                </tr>
                    <tr>
                    <th>Tour Guid Name</th>
                    <td colspan="3"><?php echo $trips;?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>


                </div>
            </main>
        <?php include('includes/footer.php');?>
        </div>
    </div>
    </body>
</html>
