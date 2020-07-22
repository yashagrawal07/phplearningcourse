<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ==true){
  $loggedin=true;
}
else{
  $loggedin = false;
}
echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Assignment</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">';
    if(!$loggedin){  
    echo '<li class="nav-item active">
        <a class="nav-link" href="/yash/login.php">Login<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/yash/register.php">Signup</a>
      </li>';
    }
      if($loggedin){
      echo '<li class="nav-item">
        <a class="nav-link" href="/yash/signout.php">Logout</a>
      </li>';
    }
    echo '</ul>
    </form>
  </div>
</nav>';
?>