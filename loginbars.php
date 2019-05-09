 <?php
                //if user is logged in do this//
                if(isset($_SESSION['id'])){
                    echo"<li><a href=\"yourlistings.php\">Your Listings</a> </li>";
                    echo "<form action='includes/logout_inc.php'>
                    <button>Log Out</button>
                    </form>";
                }

                    //if user is not logged in do this//
                else{
                    echo " <li><a href=\"signup.php\">Sign Up</a></li>";
                    echo "<form action='includes/userlogin_inc.php' method='post'>
            <input placeholder='Username' name='username' type='text'>
            <input placeholder='Password' name='password' type='password'>
            <button type='submit'>Log in</button>
            </form>";

                }
  ?>