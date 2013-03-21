<?php
$name = $_POST['name'];
?>
<div>
  <h1 style="text-align:center">Welcome!  Please set your password</h1>
  <form name="login" method="POST" action="">
    <table border="0" style =" margin: 0 auto;">
      <thead>
        <tr>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Welcome</td>
          <td> <?php echo $name ?></td>
        </tr>
        <tr>
          <td>Password</td>
          <td> <input type="password" name="password" value="" /></td>
        </tr>
        <tr>
          <td>Confirm Password</td>
          <td> <input type="password" name="confirmation" value="" /></td>
        </tr>
        <tr>
          <td></td>
          <td align="right"><input type="submit" value="Continue" name="submit" /> </td>
        </tr>
      </tbody>
    </table>
  </form>
</div>
