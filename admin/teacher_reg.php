<?php
if(isset($_POST["submit"])){
  extract($_POST);

  $q = "INSERT INTO teachers VALUES ('','$name','$educat','$salary','$add')";

  if($obj->query($q) === TRUE)
  {
    echo "<script>alert('Teacher Registration is Successfull.');</script>";
  }
  else
  {
    echo "<script>alert('Teacher Registration is Not Successfull.');</script>";
  }
}
?>

<div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Teachers Registration Form</h5>
              <div class="card">
                <div class="card-body">
                  <form method="POST">
                    <div class="row">

                    <div class="col-md-6">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Teacher Name</label>
                      <input type="text" name="name" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Select Education</label>
                      <select name="educat" id="" class="form-control" required>
                        <option selected disabled>---------------------- Select Education ---------------------</option>
                        <option value="PHD">PHD</option>
                        <option value="MASTER">MASTER</option>
                        <option value="BSC">BSC</option>
                        <option value="INTERMIDIATE">INTERMIDIATE</option>
                        <option value="MATRIC">MATRIC</option>
                      </select>
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Select Salary</label>
                      <select name="salary" id="" class="form-control" required>
                        <option selected disabled>---------------------- Select Salary ---------------------</option>
                        <option value="50,000 PKR">50,000 PKR</option>
                        <option value="45,000 PKR">45,000 PKR</option>
                        <option value="40,000 PKR">40,000 PKR</option>
                        <option value="35,000 PKR">35,000 PKR</option>
                        <option value="30,000 PKR">30,000 PKR</option>
                      </select>
                    </div>
                    </div>

                    
                    <div class="col-md-6">
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Address</label>
                      <input type="text" name="add" class="form-control" id="exampleInputPassword1" required>
                    </div>
                    </div>

                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
              