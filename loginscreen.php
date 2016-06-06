<?php include 'header.php'; ?>

<html>
  <div class="row">
    <div class="content">
      <div class="large-9 columns">
        <form action="login.php" method="post">
          <table>
            <tr>
              <td>
                Username:
              </td>
              <td>
                <input type="text" name="username" placeholder="Username">
              </td>
              </tr>
              <tr>
              <td>
                Password:
              </td>
              <td>
                <input type="password" name="password" placeholder="Password">
                <?php
                  if (isset($_GET['fout'])){
                    echo 'Please insert username and password.';
                  } else if (isset($_GET['fout2'])){
                    echo 'Username and password are wrong.';
                  }
                  ?>
              </td>
              </tr>
                </table>
                  <input type="submit" value="Login" class="rechts smallbtn">
              <br/>
              <br/>
                <a href="register.php" class="clicklink">Register</a>
              </form>
              <br/>
              <br/>
      </div>
      <div class="large-3 columns">
        <aside>
          <p>
        <img src="images/advertisement.jpg" /></p>
          </aside>
      </div>
  </div>
</div>

</html>
