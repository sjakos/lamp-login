<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  include_once 'validate.php';
  $validator = new ValidateLogin();
  if($validator->validate()){
    $_SESSION['username'] = $validator->getUsername();
    header('location: ./welcome.php');
   } else {
?>
  <div class="alert alert-danger">
    <h1>Login Failed:</h1>
    <?php foreach ($validator->errors as $key=>$error):?>
        <p><?php echo ucfirst($error);?></p>
    <?php endforeach; ?>
  </div>
<?php 
    }
  }
?>

<form class="center-element shadow" id="loginForm" action="" method="POST">  
    <div class="form-group">
      <label for="loginUsrNm">User Name</label>
      <input id="loginUsrNm" name="loginUsrNm" type="text" class="form-control" placeholder="User Name">
    </div>
    
    <div class="form-group">
      <label for="loginPwd">Password</label>
      <input id="loginPwd" name="loginPwd" type="password" class="form-control" placeholder="Password">
    </div>
      <button id="submit" type="submit" class="btn btn-block btn-primary">Log in</button>
</form>
