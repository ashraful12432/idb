<?php

$db = new mysqli("localhost", "root", "", "round50");

$sql = "SELECT * FROM round";

$data = $db->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../jquery.min.js"></script>
</head>

<body>


    

    <div class="container mt-3">
        <h2>Select Menu</h2>
        
        <form action="">
            
            <select id="roundId" class="form-select" name="sellist1">
                <option value="">select one</option>
                <?php
                while ($row = $data->fetch_object()) {
                ?>
                    <option value="<?php echo $row->id; ?>"><?php echo $row->round; ?></option>
                <?php
                }
                ?>
            </select>
            <br>


            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
    <div class="container mt-3">
    <table id="show" class="table">
        
    </table>
    </div>


    <script>
        $(document).ready(function(){
            $('#roundId').change(function(){
                var r_id= $(this).val();
                $.get('students.php',{id:r_id},function(data,status){
                    $('#show').html(data);
                });
            });
        });

    </script>

</body>

</html>");

$sql= "SELECT * FROM round";

$data= $db->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
<div class="container mt-3">
  <h2>Select Menu</h2>
  <p>To style a select menu in Bootstrap 5, add the .form-select class to the select element:</p>
  <form action="/action_page.php">
    <label for="sel1" class="form-label">Select list (select one):</label>
    <select class="form-select" id="sel1" name="sellist1">
        <option value="">select one</option>
    <?php
    while($row=$data->fetch_object()){
    ?>
      <option value="<?php echo $row->id; ?>"><?php echo $row->round; ?></option>
      <?php
    }
    ?>
    </select>
    <br> 
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
  </form>
</div>

</body>
</html>