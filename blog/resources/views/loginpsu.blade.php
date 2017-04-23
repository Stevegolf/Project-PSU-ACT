<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=tis-620"/>


</head>
<body>

<form class="signin" method="post" action="{{ url('loginpsu') }}">
  <fieldset class="common-form standard-form">
    <table cellspacing="0" width="95%">
      <tr>
        <th><label for="txtUserId">Username</label></th>

        <td><input id="txtUserId" name="txtUserId" type="text" value="" /></td>
      </tr>
      <tr>
        <th><label for="txtPassword">Password</label></th>
        <td><input id="txtPassword" name="txtPassword" type="password" value="" /></td>
      </tr>

      <tr>
        <th></th>
        <td><input class="btn btn-m" id="signin_submit" name="commit" type="submit" value="Sign In" /></td>
      </tr>
    </table>

  </fieldset>
   {{ csrf_field() }}
</form>

<!-- <?
for ($i = 0; $i <= 20; $i++)
					{
  					echo $result[$i]."<br/>";
					}
						//echo $result[14]."<br/>";
?> -->


</body>
</html>
