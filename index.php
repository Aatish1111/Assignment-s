<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignmeent Submission Form</title>
    <link rel="stylesheet" href="./CSS/style.css">
</head>
<body>
  <div class="submission-box">
    <h2>Assignment Submission</h2>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
      <div class="user-box">
        <input type="text" name="Username" required="">
        <label>Name</label>
      </div>
      <div class="user-box">
        <input type="text" name="Registration" required="">
        <label>Registration Number</label>
      </div>
      <div class="user-box">
        <input type="email" name="Email" required="">
        <label>Email</label>
      </div>
      <div class="user-box">
        <input type="file" name="File" required="">
        <label></label>
      </div>
      <div class="user-box">
        <input type="text" name="Text" required="">
        <label>Submit link if u have one</label>
      </div>
      <a href="#">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <input type="submit" name="submit" value="submit" class="send">
      </a>
    </form>
  </div>
</body>
</html>