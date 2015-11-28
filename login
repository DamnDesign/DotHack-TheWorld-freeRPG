<?php
	$user = isset($_POST['user']) ? $_POST['user'] : "";
	$pw = isset($_POST['pw']) ? $_POST['pw'] : "";
?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="formular">
		<p>
			<label>User-Name</label><br />      
			<input type="text" name="user" value="<?php echo $user; ?>" />
		</p>
        <p>
			<label>Passwort</label><br />      
			<input type="password" name="pw" value="<?php echo $pw; ?>" />
		</p>
        <p>     
		<input type="submit" name="senden" value="Senden" />
		</p> 
    </form>

<?php



if(isset($_POST['senden']))
{
	$user = $_POST['user'];
	$pw = $_POST['pw'];
	
	
	
	if($user != "" && $pw != "")
		{
			if($user != "admin" || $pw != "admin")
			{
			
			echo "Der User-Name oder das Passwort ist falsch.";
			}
		
			else
			{
				?>
					<div>
					<p>Sie sind eingeloggt.
    				</p>
					</div>
				<?php
			}
		}
	else
	{
	echo "Bitte loggen Sie sich ein.";
	}
	
	
}

?>
