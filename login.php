<?php 
  include_once 'header.php';

	include("connection.php");
	include("functions.inc.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_name'] = $user_data['user_name'];
						header("Location: webapp.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>

<section class="signup-form">
    <h2>Log in</h2>
    <form method="post">
        <input type="text" name="user_name" placeholder="username" required>
        <input type="password" name="password" placeholder="password" required>
        <button type="submit" name="submit">Log in</button>
    </form>
</section>
<?php 
  include_once 'footer.php';
?>