<?php
foreach ($name as $key => $value) {
            //echo "<pre>";
            //var_dump($value);
            echo $value->UsersName;
         }
		 
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>视图一</title>
	</head>
	<body>
		<h1>Hello,田鑫！Hello</h1>
		{foreach $name as $key => $value}
			{$value->UsersName}
		{/foreach}
	</body>
	
</html>