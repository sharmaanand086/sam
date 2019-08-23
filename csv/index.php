<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tag Adder</title>
</head>
<body>
<h1> Tag Apply & Send Mail </h1>
	<form action = "insertdb.php"  enctype = "multipart/form-data" name = "form1" id ="form1" method = "POST">
		 
		<label>Upload CSV File:*</label>
		<input type = "file"  style="border:none;" maxlength = "1" accept=".csv" name="uploadfile" id = "uploadfile" title = "Enter csv file only. Max 3MB!" required>
		
		<button class = "pay-button" type = "submit" name = "addtag">Apply</button></section>
	</form>
</body>
</html>
