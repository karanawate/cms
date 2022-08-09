<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>json object convert to javascript object</title>
</head>
<body>
	<h1>what is json and json object convert to javascript object</h1>
	<script>
		const emp = `[
			{
				"name":"Karan",
				"lastname":"awate",
				"job":"devloper",
				"age":24
			},
			{
				"name":"akshay",
				"lastname":"jumbade",
				"job":"programer",
				"age":23
				
			}
		]`
		console.log(JSON.parse(emp));
		console.log(JSON.parse(emp)[0].name);
		
	</script>
</body>
</html>