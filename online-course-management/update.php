<!DOCTYPE html>
<head>
    <title>update details</title>
</head>
<body>
    <form method="post" action="./profile_ops/update_actions.php">
        enter roll no:<input type="text" name='rollno'><br>
        enter class:<input type="text" name='class'><br>
        enter section:<input type="text" name='section'><br>
        enter academic year:<input type="text" name='year'><br>
        enter gender:<br>
        <input type="radio" name="gender" id="contact_email" value="male" />
        <label for="contact_email">male</label>
        <input type="radio" name="gender" id="contact_phone" value="female" />
        <label for="contact_phone">female</label>
        <br>
        <input type="submit">
    </form>
</body>