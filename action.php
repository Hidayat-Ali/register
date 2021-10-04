<?php

$servername = "localhost";
$username = "root";
$password = "root";
$databse = "Students";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $databse);

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $roll_no = $_POST['roll_no'];
    $reg_no = $_POST['reg_no'];
    $result = $_POST['result'];

    $query = "INSERT INTO Registration(name, fname, roll_no, reg_no, result) VALUES('" . $name . "' , '" . $fname . "' , '" . $roll_no . "' , '" . $reg_no . "' , '" . $result . "' )";

    $run = mysqli_query($conn, $query) or die(mysqli_error($conn));

    if ($run) {
      
        echo "<center><h1 class='text-success' > your data is Saved Succesfully!...</h1></center>";
    } else {
        echo '<center><h2 class="text-danger">you didnt submit your details</h2></center>';
    }
}

if (isset($_POST['get_result'])) {
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $roll_no = $_POST['roll_no'];
    $reg_no = $_POST['reg_no'];
    $result = $_POST['result'];

    $query = "SELECT * FROM `Registration` where roll_no = $roll_no AND reg_no=$reg_no";

    $run = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $countRows = mysqli_num_rows($run);
    if ($countRows > 0) {
        while ($row = mysqli_fetch_array($run)) {
            ?>
           <?php include './common.bootstrap.php'?>
           <div class="container container-md mt-5">
          <table class="table table-bordered table-striped">
  <thead class="thead-primary">
    <tr >
      <th scope="col">NAME</th>
      <th scope="col">FATHERS NAME</th>
      <th scope="col">ROLL NO</th>
      <th scope="col">REGISTRATION NO</th>
      <th scope="col">RESULT</th>

    </tr>
  </thead>
  <tbody>
    <tr>

      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['fname']; ?></td>
      <td><?php echo $row['roll_no']; ?></td>
      <td><?php echo $row['reg_no']; ?></td>
      <td><?php echo $row['result']; ?></td>


    </tr>

  </tbody>
</table>
</div>

          <?php
}

    } else {
        echo '<center><h2> sorry record not found!</h2></center>';
    }

}
?>

