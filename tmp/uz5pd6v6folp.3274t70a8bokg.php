<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<title></title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles/blog-styles.css">
<!-- bootstrap -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--[if lt IE 9]>
<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="shortcut icon" href="">
</head>
<body>
            <div class="col-xs-9">
                <form action="" method="POST" class="form-horizontal">
                    <div class="col-xs-6">                                        
                        <div class="form-group">
                            <div class="col-xs-10">
                                <input class="form-control" type="text" name="username" id="username" required>
                            </div>
                            <label class="control-label col-xs-2" for="username">Username</label>
                            <br>
                            <div class="col-xs-10">
                                <input class="form-control" type="text" name="email" id="email" required>
                             </div>
                            <label class="control-label col-xs-2" for="email">Email</label>
                        </div>
                                        
                        <div class="form-group">
                            <div class="col-xs-10">
                                <input class="form-control" type="password" name="password" id="password" required>
                            </div>
                            <label class="control-label col-xs-2" for="password">Password</label>
                            <br>
                            <div class="col-xs-10">
                                <input class="form-control" type="password" name="verification" id="verification" required>
                            </div>
                            <label class="control-label col-xs-2" for="verification">Verify</label>
                        </div>                                   
                    </div>
                    <div id="rightInfo" class="col-xs-6">
                        <div class="form-group">
                            <div class="col-xs-8">
                                 <input id="imageUpload" class="form-control" type="file" name="fileToUpload" id="fileToUpload" >
                                                
                            </div>
                                            
                            <label class="control-label col-xs-4" for="fileToUpload">Upload Portrait:</label>
                        </div>
                                        
                        <div id="bio" class="form-group">
                            <label class="control-label col-xs-12" for="bio">Quick Biography</label>
                            <textarea class="form-control" type="text" rows="4" name="bio" id="bio" required></textarea>
                        </div>
                    </div>
                                    
                    <div class="col-xs-offset-5 col-xs-3">
                        <input class="customBtn btn-lg" type="submit" value="Together We Blog">
                    </div>

            </div>
        </div>
    </div>
</body>
</html>