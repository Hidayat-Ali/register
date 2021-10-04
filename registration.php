<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registration | Students</title>
</head>
<body>



    <div class="container ">

    <br>
    <h3 class="text-bold text-primary"> please fill your correct details here...</h3>

      <div class="col-md-6 ">

      <div class="row justify-content-center ">

   <form method="post" action="./action.php">

    <div class="mb-3">
    <label for="studentname" class="form-label">Students Name:</label>
    <input type="text" class="form-control" name="name" aria-describedby="emailHelp">

  </div>
  <div class="mb-3">
    <label for="fathersname" class="form-label">Father's Name:</label>
    <input type="text" class="form-control" name="fname">
  </div>

  <div class="mb-3">
    <label for="roll_no" class="form-label">Roll.No</label>
    <input type="text" class="form-control" name="roll_no">
  </div>


  <div class="mb-3">
    <label for="reg_no" class="form-label">Registration No.</label>
    <input type="text" class="form-control" name="reg_no">
  </div>

  <div class="mb-3">
    <label for="result" class="form-label">Result</label>
    <input type="text" class="form-control" name="result">
  </div>

      </div>
    </div>

  <button type="submit" class="btn btn-outline-primary" name="submit">Submit</button>

</form>
</div>

</body>
</html>





<!-- echo "NAME:".$row['name'] ."<br>";
            echo "Fathers Name:".$row['name'] ."<br>";
            echo "ROLL NO:".$row['fname'] ."<br>";
            echo "REG NO:".$row['roll_no'] ."<br>";
            echo "RESULT:".$row['reg_no'] ."<br>";
             -->