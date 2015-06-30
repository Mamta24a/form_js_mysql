<!docktype html>
<html>
<head>

<title>form using javascript</title>

<script>

function validateForm() {
    var x = document.forms["myForm"]["name"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
}

</script>


</head>

<body>

<h1>please login below!!</h1>

<p></p>

<form action="" method="POST" name="myForm" onsubmit="return validateForm()">

username: <input type="text" name="name" id="name"/>
<p></p>
password: <input type="password" name="password" id="password"/>
<p></p>
<input type="submit" value="log in" name="submit"  />



</form>

</body>

</html>