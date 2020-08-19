<html>
<head>
    <title>Application-Form</title>
</head>

<body>
<form action="./sheets.php" method="post">
<label for="zzz"></label>
    <input type="text" name="fname"><br>
    <input type="text" name="lname"><br>
    <input type="email" name="email"><br>
    <select name="locations[]" multiple>
        <option value="Lahore">Lahore</option>
        <option value="Karachi">Karachi</option>
        <option value="Islamabad">Islamabad</option>
    </select>
    <input type="submit" value="submit">


</form>
</body>
</html>