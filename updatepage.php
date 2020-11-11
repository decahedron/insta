<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="icon" type="text/css" href="log.png">
	<meta charset="utf-8">
</head>
<body>
	<div class='container mx-auto'>
		<h2>изменить пост</h2>
		<form action='update.php'>
			<p><input type="" name="img" class="form-control" placeholder="image url" value="<?php echo $res['img'] ?>"></p>
			<p><textarea name="text" class="form-control" placeholder="type something here"><?php echo $res['text'] ?></textarea></p>
			<input type="hidden" name="id" value="<?php echo $res['id'] ?>">
			<button class='btn btn-success'>сохранить</button>
		</form>
	</div>
</body>
</html>