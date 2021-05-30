<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "views/head.html"
    ?>
</head>

<body>
    <?php
    include "views/top-header.html"
    ?>

    <section id="form-sect">
        <h2>Connection Details</h2>
        <form method="post" action="">
            <label for="fname">First Name:</label><br class="form-br">
            <input type="text" id="fname" name="fname"><br>
            <label for="lname">Last Name:</label><br class="form-br">
            <input type="text" id="lname" name="lname"> <br>
            <label for="paswd">Password:</label><br class="form-br">
            <input type="password" id="paswd" name="paswd"><br>
            <label for="agreement">Encryption algorithm:</label><br>
            <section id="agreement">
                <input type="radio" id="default" name="algorithm" value="default" checked>
                <label for="default">Default</label><br class="form-br">
                <input type="radio" id="bcrypt" name="algorithm" value="bcrypt">
                <label for="bcrypt">BCrypt</label>
            </section>
            <br>
            <section id="submit">
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </section>
        </form>

        <p style="text-align: center;">
            <?php
            echo "Your password encrypted using " . strtoupper($_POST['algorithm']) . " is the following:" . "<br><br>";
            include "scripts/hashing_pw.php";
            echo $hashed;
            ?>
        </p>
    </section>

    <?php
    include "views/bottom-footer.html"
    ?>
</body>

</html>