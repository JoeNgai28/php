       <header>
        <nav>
           <ul>
               <li><a href="index.php">Home</a></li>
               <li><a href="portfolio.php">Portfolio</a></li>
               <li><a href="contact.php">Contact</a></li>
               <li><a href="logout.php">Logout</a></li>
               <?php
                if( isset($_SESSION['fn'])){
                    echo '<li> hi, '.$_SESSION['fn'].'</li>';
                    
                };
               ?>
            </ul>
           </nav>
       </header>