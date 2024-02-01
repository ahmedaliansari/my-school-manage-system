<?php
if(isset($_POST["submit"])){
  extract($_POST);

  $q = "INSERT INTO class_assign VALUES ('','$name','$class','$subject','$section')";

  if($obj->query($q) === TRUE)
  {
    echo "<script>alert('Successfully Class Assign.');</script>";
  }
  else
  {
    echo "<script>alert('Class Not Assign..');</script>";
  }
}
?>

<div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Teachers Class Assign</h5>
              <div class="card">
                <div class="card-body">
                  <form method="POST">
                    <div class="row">

                    

                    <div class="col-md-6">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Teacher Name</label>
                      <select name="name" id="" class="form-control" required>
                      <option selected disabled>---------------------- Select Teachers ---------------------</option>
                        <?php
                       $query = "select * from teachers";
                       $q = $obj->query($query);
                       while($row = mysqli_fetch_assoc($q)){
                        ?>
                        <option value="<?php echo $row["teacher_name"]; ?>"><?php echo $row["teacher_name"];?> </option>
                        <?php } ?>
                      </select>
                    </div>
                    </div>

                   
                    <div class="col-md-6">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Class Name</label>
                      <select name="class" id="" class="form-control" required>
                      <option selected disabled>---------------------- Select Class ---------------------</option>
                        <?php
                       $query = "select * from class";
                       $q = $obj->query($query);
                       while($row = mysqli_fetch_assoc($q)){
                        ?>
                        <option value="<?php echo $row["class_name"]; ?>"><?php echo $row["class_name"];?> </option>
                        <?php } ?>
                      </select>
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Choose Subject</label>
                      <select name="subject" id="" class="form-control" required>
                        <option selected disabled>---------------------- Choose Subject ---------------------</option>
                        <option value="ENGLISH">ENGLISH</option>
                        <option value="CHEMISTRY">CHEMISTRY</option>
                        <option value="PHYSICS">PHYSICS</option>
                        <option value="MATH">MATH</option>
                        <option value="P.S.T">P.S.T</option>
                      </select>
                    </div>
                    </div>

                    
                    <div class="col-md-6">
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Class Section</label>
                      <select name="section" id="" class="form-control" required>
                        <option selected disabled>---------------------- Class Section ---------------------</option>
                        <option value="Section - A">Section - A</option>
                        <option value="Section - B">Section - B</option>
                        <option value="Section - C">Section - C</option>
                      </select>
                    </div>
                    </div>

                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
              