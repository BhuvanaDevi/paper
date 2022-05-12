<html>

<head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<?php
include("connection.php");

  $paper=$_GET['paper'];
    $email=$_GET['email'];

  $ins="update purchase set status=1 where paper='$paper' and email='$email'";
  $exe=mysqli_query($con,$ins);

  if($exe){
    echo '<script>
    Swal.fire({ title: "Notification Sent Success!",
       text: "Thank you for Purchasing us.",
       type: "success"}).then(okay => {
         if (okay) {
          window.location.href = "userbuy.php";
        }
      });
</script>';
    }   
  else{
    echo '<script>
    Swal.fire({ title: "Notification Sent Failure!",
       text: "Try Again...",
       type: "danger"}).then(okay => {
         if (okay) {
          window.location.href = "userbuy.php";
        }
      });
</script>';   
  }

?>
</body>
</html>
