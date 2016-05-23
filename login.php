<?php include 'header.php'; ?>

<html>
  <div class="row">
    <div class="content">
      <div class="large-8 columns">
        <form action="inloggen.php" method="post">
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
    </div>
  </div>
</body>

</html>
