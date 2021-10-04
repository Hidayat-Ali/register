<!DOCTYPE html>
<html lang="en">
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Students|Result</title>
</head>
<body>
<div class="container">
    <h3 class="text-bold text-info"> Get your result only here</h3>
    <div class="col-md-6">
    <div class="row justify-content-center">

    <form method="POST" action="./action.php">
  <div class="mb-3">
    <label for="roll_no" class="form-label">Roll Number</label>
    <input type="text" class="form-control" name="roll_no" aria-describedby="emailHelp">

  </div>
  <div class="mb-3">
    <label for="reg_no" class="form-label">Registration No.</label>
    <input type="text" class="form-control" name="reg_no">
  </div>

  <button type="submit" class="btn  btn-outline-info" name="get_result">Get Result</button>
</form>

    </div>

    </div>

</div>
</body>
</html>
