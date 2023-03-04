<div class="header">
     <div class="container">
         <div class="logo">
         <script>
        var audio = new Audio("audio.mp3");
       
        audio.oncanplaythrough = function(){
        audio.play();
        }
       
        audio.loop = true;
       
        audio.onended = function(){
        audio.play();
        }
       
        </script>
            <span style="color: antiquewhite;" class="glyphicon glyphicon-music" aria-hidden="true"  onclick="audio.play()"></span>
             <br>
             <a href="index.php"><h1>OMKAR</h1></a>
         </div>
         <div class="top-menu">
             <ul>
             <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
             <li><a href="about.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>About</a></li>
             <li><a href="services.php"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>Services</a></li>
             <li><a href="contact.php"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Contact</a></li>
             <li><a href="admin/login.php" target="_blank"><span class="glyphicon glyphicon-qrcode" aria-hidden="true"></span>Admin</a></li>
             </ul>
         </div>
         <div class="clearfix"></div>
     </div>
</div>