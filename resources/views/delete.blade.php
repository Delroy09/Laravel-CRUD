<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
</head>
<body>
<h1>Displayed Students: </h1>
    @if($usernames->isEmpty())
    <p>Add users to be able to manage them </p>
    @else
    @foreach($usernames as $username)
<p>Username: {{$username->username}}, Age: {{$username->age}}, Class: {{$username->classname}} </p>
<form action="/delete/{{$username->id}}" method="post">
@csrf
<button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
</form>
@endforeach
@endif
<br><br>
<a href="/">Home</a>

</body>
</html>