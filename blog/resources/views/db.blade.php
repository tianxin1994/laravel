<html>
	<head>
		<title>@yield('title')</title>
		<link rel="stylesheet" type="text/css" href="../css/index.css" />
		<script language="JavaScript" src="../js/index.js"></script>
	</head>
	<body>
		<div style="width: 500px; height: 200px; background-color: red;">
			<h1>Hello word</h1>
			@section('like')
			@show
		</div>
		<img src="../img/bgr4.PNG" />
		<button onclick="fun()">按钮</button>
	</body>
</html>