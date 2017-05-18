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