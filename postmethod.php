<html>
<body>
    <form method="POST" action="postmethod.php">
        id :  <input type="text" name="id" />
        password :  <input type="text" name="password" />
        <input type="submit" />
    </form>
</body>
</html>

<?php
echo $_POST['id'].','.$_POST['password'];
?> 