<html>
	<head>
		<title>indexx</title>
		<link rel="stylesheet" href="../css/style.css" />
	</head>
	<body>
		<h2>用户列表</h2>
		<table border="1">
			<tr>
				<th>用户姓名</th>
				<th>用户电话</th>
				<th>用户密码</th>
				<th>用户照片</th>
				<th>操作</th>
				<th>操作</th>
			</tr>
			@foreach($data as $value)
			<tr>
				<td><a href="{{url('info',['id'=>$value->id])}}">{{$value->name}}</a></td>
				<td>{{$value->phonenum}}</td>
				<td>{{$value->pwd}}</td>
				<td>
					@if(empty($value->picture))
					<span>照片不存在</span>
					@else
					<img src="../{{$value->picture}}" />
					@endif
				</td>
				<td><a href="{{url('update',['id'=>$value->id])}}">修改</a></td>
				<td><a href="{{url('delete',['id'=>$value->id,'page'=>$page])}}">删除</a></td>
			</tr>
			@endforeach
		</table>
		{{$data->links()}}
	</body>
</html>