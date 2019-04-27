<?php

// Always set 'referring_page' AFTER including elemLoginStatusbar.php
// It can be made blank below to prevent it having stale information from some other page
// unset($_SESSION['referring_page']);

// Define a login page URL in settingsLogin.php. You may use the default.
// Your login page may INCLUDE or REQUIRE Hydrogen/pgLogin.php but should not BE this file, as
//    doing that either in this code or in a hyperlink will put the user in the Hydrogen 
//    subdirectory rather than the directory for your app.
require_once ("Hydrogen/settingsLogin.php");

function showLoginStatus() {
	global $settings;
	if (isset($_SESSION['username'])) {
		showUsername();
	} else {
	echo ('<a href="' . $settings['login_page'] . '" class="statusbar_item">Log in</a>');
	}
}

function showUsername() {
	echo ('<div class="loginStatus">Logged in as ' . $_SESSION['username'] . "</div> ");
}

function showLogoutButton() {
	global $settings;
	echo ('	<li class="statusbar"><form class="access" id="logout" action="' . $settings['login_page'] . '" method="post">');
	echo ('	<input type="hidden" name="flow" value="logOut">');
	echo ('	<input type="submit" value="Log out">');
	echo ('	</form></li>');
}

?>

<table class="statusbar">
<tbody>
<tr>
<td>
<ul class="statusbar">
<li class="statusbar">
<?php showLoginStatus() ?>
</li>

<?php if (isset($_SESSION['username'])) {
	showLogoutButton() ;
}
 ?>

</ul>
</td>
</tr>
</tbody>
</table>