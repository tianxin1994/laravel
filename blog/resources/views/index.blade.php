<html>
	<head>
		<title>@yield('title')</title>
	</head>
	<body>
		<div style="width: 1200px; height: 200px; background-color: red;">
			@section('tou')
				<b>中国</b>
        	@show
		</div>
		<div style="width: 1200px; height: 200px; background-color: blue;">
			<div style="float: left; width: 200px; height: 200px; background-color: green;">
				<h1>左侧边栏</h1>
				@section('left')
				@show
			</div>
			<div style="float: right; width: 200px; height: 200px; background-color: pink;">
				<h1>有侧边栏</h1>
			</div>
		</div>
		<div style="width: 1200px; height: 200px; background-color: yellow;">
			
		</div>
	</body>
</html>