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
    <div class="container">
        <div class="row">
            <div class="col-xs-3">
                <h2>Blogging Heroes</h2>
                
                <ul>
                    <li><a href="#">Home</a></li>
                    <?php if ($loggedIn): ?>
                        
                            <li><a href="#">My Blogs</a></li>
                            <li><a href="#">Create Blog</a></li>
                        
                        <?php else: ?>
                            <li><a href="#">Join Us</a></li>
                        
                    <?php endif; ?>
                    <li><a href="#">About</a></li>
                    <?php if ($loggedIn): ?>
                        
                            <li><a href="#">Log Out</a></li>
                        
                        <?php else: ?>
                            <li><a href="#">Log In</a></li>
                        
                    <?php endif; ?>
                </ul>
            </div>
            
            <?php foreach (($bloggers?:[]) as $blogger): ?>
                <div class="col-xs-3">
                    <p><?= $blogger[$bloggerNum++]["username"] ?></p>
                    <hr>
                    <a href="#">View Blogs</a>
                    
                    Total: <?= $blogger[$bloggerNum++]["num_of_blogs"].PHP_EOL ?>
                    <hr>
                    Preview of Latest Blog: 
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>