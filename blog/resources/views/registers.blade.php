<html>
	<head>
		<title>registers</title>
	</head>
	<body>
		<form action="sxregisters" method="post" enctype="multipart/form-data">
			<h3>用户注册</h3>
			<input type="hidden" name="_token" value="{{csrf_token()}}" />
			姓名：<input type="text" name="name" /><br />
			电话：<input type="text" name="phonenum" /><br />
			照片：<input type="file" name="picture" /><br />
			密码：<input type="password" name="pwd" /><br />
			确认密码：<input type="password" name="pwd2" /><br />
			<input type="submit" value="注册" />
		</form>
		<div>
			@if(count($errors)>0)
				@foreach ($errors->all() as $error)
					{{$errors->all()[1]}}
               		<p>{{ $error }}</p>
               		{{var_dump($errors->all())}}
            	@endforeach
			@endif
		</div>
	</body>
</html>