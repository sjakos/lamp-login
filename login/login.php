<!--Login page project using HTML and PHP-->
<!DOCTYPE html5>
<head>
    <title>Sam's Log-in</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CDN for Bootstrap doesn't work with CSS class completion extension, using local files
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/customstyle.css">
</head>
<body>
    <div class="container">  
        <div class="row">
         <div class="col"> 
            <form>
                <div class="form-group">
                    <label for="userName">User Name</label>
                    <input id="userName" type="text" class="form-control" placeholder="User Name">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="text" class="form-control" placeholder="Password">
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input id="rememberCreds" type="checkbox" class="form-check-input">
                        Remember my credentials
                    </label>
                </div>
                <input id="submit" type="submit" class="btn btn-block btn-outline-primary">
            </form>
         </div> 
        </div>
    </div>
</body>