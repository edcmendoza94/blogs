<div class="container-fluid">
    <div class="row">
        <div class="col-xs-3">
            <h2>Blogging Heroes</h2>
                
            <ul>
                <li><a href="http://edcmendoza94.greenrivertech.net/328/blogs/">Home</a></li>
                <?php if ($loggedIn): ?>
                    
                        <li><a href="#">My Blogs</a></li>
                        <li><a href="#">Create Blog</a></li>
                    
                    <?php else: ?>
                        <li><a href="./signup">Join Us</a></li>
                    
                <?php endif; ?>
        
                <li><a href="./about">About</a></li>
        
                <?php if ($loggedIn): ?>
                    
                        <li><a href="#">Log Out</a></li>
                    
                    <?php else: ?>
                        <li><a href="./login">Log In</a></li>
                    
                <?php endif; ?>
            </ul>
        </div>