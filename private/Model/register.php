<?php
/*
function getUser()
{
    return json_decode(file_get_contents(__DIR__ . "/../users.json"));
}
function postUser($producto)
{
    $array = getUser();
    array_push($array, $producto);
    $productos = json_encode($array);
    file_put_contents(__DIR__ . "/../users.json", $productos);

}*/

return '
<h1>Register</h1>
<form action="/register_action">
<!--<label>Name:</label><br>
<input type="text" name="name" ><br>-->
<label>User name:</label><br>
<input type="text" name="uname" ><br>
<label >Password:</label><br>
<input type="password"  name="password" ><br><br>
<!--<label >Email:</label><br>
<input type="email"  name="email" ><br><br>-->
<input type="submit" value="Submit">
</form>
';