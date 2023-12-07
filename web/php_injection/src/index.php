<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ログイン画面</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
	<form method="POST" class="col-sm-8 text-center">
        <div class="input-group">
          <span class="input-group-text">username</span>
          <input type="text" name='user' class="form-control col-sm-8" require maxlength=10 aria-label="username textarea">
        </div>
        <div class="input-group">
          <span class="input-group-text">password</span>
          <input type="password" name='password' require class="form-control" maxlength=10 aria-label="password textarea">
        </div>
	<input class='btn btn-primary' type="submit">
	</form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<?php 
    try {
        $dsn = 'mysql:host=db;dbname=test_db;charset=utf8';
        $db = new PDO($dsn, 'test_user', 'test_password');
	if ( $_POST['user'] == "admin" )
	{
		echo 1;
		$sql = 'SELECT * from flags where flag=\'' . $_POST['password'] . '\' and name=\'' . $_POST['user'] . '\';';
	        $contact = $db->prepare($sql);
//		$contact->bindValue(':name', $_POST['user']);
//		$contact->bindValue(':flag', $_POST['password']);
	        $contact->execute();
	        $result = $contact->fetchAll(PDO::FETCH_ASSOC);
		var_dump($result); //念の為a
	}else{
		echo 2;
	        $sql = 'SELECT flag from flags where name=:name;';
	        $contact = $db->prepare($sql);
		$contact->bindValue(':name', empty($_POST['user']) ? 'username' : $_POST['user']);
	        $contact->execute();
	        $result = $contact->fetch(PDO::FETCH_ASSOC);
	}
        if ( $result['flag'] === $_POST['password'] ){
		echo 'Yes! ' . $_POST['user'] . ' password is "' . $_POST['password'] . '"!!';
	}
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }
?>
  </body>
</html>
