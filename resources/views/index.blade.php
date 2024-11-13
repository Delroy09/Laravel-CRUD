<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script>
        function Val(){

        let user = document.getElementById('username').value;
        let age = document.getElementById('age').value;
        let classname = document.getElementById('classname').value;

        if(user.trim()==="" || age.trim()==="" || classname.trim()===""){

            alert('Enter all fields to proceed');
            return false;
        }if(isNaN(age) || parseInt(age)<18){

            alert("Enter correct age");
            return false;
        }
        return true;

        }
      




    </script>
</head>
<style>

#data{

background-color: bisque;
width: 20%;

}


</style>
<body>
    <h1>Displayed Students: </h1>
    @if($usernames->isEmpty())
    <p>No students found. </p>
    @else
    @foreach($usernames as $username)
<p id="data">Username: {{$username->username}}, Age: {{$username->age}}, Class: {{$username->classname}} </p>
<!-- <form action="/delete/{{$username->id}}" method="post">
@csrf
<button type="submit">Delete</button>

</form> -->
    @endforeach
    <br><br><br>
    <h1>Update data:</h1>
    <form action="/update/{{$username->id}}" method="post">
    @csrf
    <input type="text" placeholder="username" id='username2' name='username'>
    <br><br>
    <input type="number" placeholder="age" id='age2' name='age'>
    <br><br>
    <input type="text" placeholder="class" id='classname2' name='classname'>
    <br><br>
    <button type="submit">Update</button>

    </form>
    @endif
    <br><br><br>
    <h1>insert Data here:</h1>
    <form action="/store" method="post" onsubmit="return Val()">
    @csrf
    <input type="text" placeholder="username" id='username' name='username'>
    <br><br>
    <input type="number" placeholder="age" id='age' name='age'>
    <br><br>
    <!-- <input type="text" placeholder="class" id='classname' name='classname'> -->
    <select name="classname" id="classname">
        <option value="">Select Class</option>
        <option value="FYBCA">FYBCA</option>
        <option value="FYBCA">SYBCA</option>
        <option value="FYBCA">TYBCA</option>
    </select>
    <br><br>
    <button type="submit">Save</button>
    <br><br>
<table border="1">
    <tr>
        <th>test</th>
        <th>tets</th>
        <th>test</th>


    </tr>
    <tr>
<td>One</td>
<td>Two</td>
<td>Three</td>



    </tr>

</table>
    </form>
<br><br>
<a href="/delete">Manage Users</a>
</body>
</html>