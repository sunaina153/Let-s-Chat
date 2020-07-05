<?php
	include('connect.php');
	session_start();
	$message='';
	
	if(isset($_POST["login"]))
	{
		$query="Select * from login where username = :username";
		$statement = $conn->prepare($query);
		$statement->execute(array(
			':username'=>$_POST["username"]
			)
			);
			$count = $statement->rowCount();
			if($count>0)
			{
				$result=$statement->fetchAll();
				foreach($result as $row)
				{
					if(password_verify($_POST["password"],$row["password"]))
					{
						$_SESSION['user_id']=$row['user_id'];
						
						$_SESSION['username']=$row['username'];
						$sub_query="insert into login_details(user_id) values ('".$row['user_id']."')";
						$statement = $conn->prepare($sub_query);
						$statement->execute();
						$_SESSION['login_details_id']=$conn->lastInsertId();
						
						header("location:home.php");
					}
					else
					{
						$message="<label>Wrong Password</label>";
					}
				}
			}
			else{
				$message="<label>Wrong Username</label>";
			}
	}
	
?>