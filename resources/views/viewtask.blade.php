<!DOCTYPE html>
<html>
<head>
	<title>hbh</title>
</head>
<body>
<table>
	<thead>
		<tr>
			<th>Question</th>
		</tr>
	</thead>
	<form action="saveresult" method="post">
	@foreach($get as $key)
	
		@csrf
	<tbody>
		<tr>
			<td>{{$key->Question}}</td>
			<td>
			    <select name="q[]" >
					<option value="{{$key->answer}}">{{$key->opation}}</option>
					<option value="{{$key->answer2}}">{{$key->opation2}}</option>
					<option value="{{$key->answer3}}">{{$key->opation3}}</option>
					<option value="{{$key->answer4}}">{{$key->opation4}}</option>
				</select>
                
			</td>
			
			
		</tr>

	</tbody>

	@endforeach
	<input type="submit" name="submit" value="submit" >

</form>
</table>
</body>
</html>