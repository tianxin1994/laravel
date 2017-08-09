<html>
	<head>
		<title>update</title>
	</head>
	<body>
		<form action="{{url('update1')}}" method="post">
			<h2>用户修改</h2>
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<input type="hidden" name="id" value="{{$data->id}}" />
			用户名称：<input type="text" name="name" value="{{$data->name}}" /><br />
			用户电话：<input type="text" name="phonenum" value="{{$data->phonenum}}" /><br />
			<input type="submit" value="修改" />
		</form>
	</body>
</html>