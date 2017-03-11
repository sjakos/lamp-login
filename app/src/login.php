<?php if (isset ($_SESSION['errors']) && strlen(trim($_SESSION['errors'])) > 0): ?>
<div class="alert alert-danger"><?php echo $_SESSION['errors'];?></div>
<?php endif; ?>

<form class="center-element shadow" id="loginForm" action='/../app/src/validate.php' method="POST">  
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
