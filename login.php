
<?php include 'header.php' ?>
    <main>
    <form method = "post" action = "process.php">
        Username:
        <input type ="text" name="username" required><br>

         Password:
        <input type ="password" name="password" required><br>

        <input type="hidden" name="token " value="abc123">
        <input type="submit" value="Login">
    </form>
    </main>
<?php include 'footer.php' ?>
