
<?php
if(isset($_POST['submit'])){
$to = $_POST['mail']; 
$subject = 'hi';
$message = '
<html>
<head>
  <title>'.$_POST['subject'].'</title>
</head>
<body>
<h3>'.$_POST['subject'].'</h3>
  <p>'.$_POST['body'].'</p>
</body>
</html>
';
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';
mail($to, $subject, $message, implode("\r\n", $headers));
echo "Sent success.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
<div class="container py-4">
<form id="contactForm" method="post" action="">
  <div class="mb-3">
    <label class="form-label" for="mail">Enter Email</label>
    <input class="form-control" id="mail" type="text" placeholder="mail"  name="mail"/>
  </div>
  <div class="mb-3">
    <label class="form-label" for="subject">Enter subject</label>
    <input class="form-control" id="subject" type="text" placeholder="" name="subject" />
  </div>
  <div class="mb-3">
    <label class="form-label" for="message">Message</label>
    <textarea class="form-control" id="body" name="body"  type="text" placeholder="Message" style="height: 10rem;"></textarea>
  </div>
  <div class="d-grid">
    <button class="btn btn-primary btn-lg" name="submit" type="submit">Submit</button>
  </div>
</form>
</div>
</body>
</html>
