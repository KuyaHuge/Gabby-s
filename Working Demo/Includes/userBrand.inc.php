<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selection = $_POST["selection"];
    $model = $_POST["selectionmodel"];
    $attribute = $_POST["selectionattribute"];

    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO brand (brand, model, attribute) 
        VALUES (?, ?, ?);";
        $query2 = "INSERT INTO receipt(brand_id) VALUES (?);";

        $stmt = $pdo->prepare($query);
        $stmt2 = $pdo->prepare($query2);

        $stmt->execute([$selection, $model, $attribute]);
        $lastInsertId=$pdo->lastInsertId();
        $stmt2->execute([$lastInsertId]);


        $pdo = null;
        $stmt = null;

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

}
else {
    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pawn Details</title>
    <link rel="stylesheet" href="../css/JPawn.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- normalize css -->
    <link rel="stylesheet" href="../css/normalize.css">
</head>
<body>
    <!-- header -->
 <header class="header bg-blue">
        <nav class="navbar bg-blue">
            <div class="container flex">
                <a href="index.php" class="navbar-brand">
                    <img src="../images/logo.png" alt="site logo">
                </a>
                <button type="button" class="navbar-show-btn">
                    <img src="../images/ham-menu-icon.png">
                </button>

                <div class="navbar-collapse bg-white">
                    <button type="button" class="navbar-hide-btn">
                        <img src="../images/close-icon.png">
                    </button>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="../index.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="../Items.php" class="nav-link">Items We Accept</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">About Gabbys</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Promos</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact Gabbys</a>
                        </li>
                    </ul>
                    <div class="nav-btn-group">
                        <a href="PawnNow.php" class="btn btn-light-blue">Pawn Now</a>
                    </div>
                    </form>
                </div>
            </div>
            </div>
        </nav>
    </header>
    <!-- end of header --> 
    <?php 
    echo "<div class='details-container'>";
    echo "<h3>Pawn Details</h3>";
    echo "<br>";
    echo "<p>Item: $selection</p>";
    echo "<br>";
    echo "<p>Model: $model</p>";
    echo "<br>";
    echo "<p>Attribute: $attribute</p>";
    echo "<br>";
    echo "<p> Estimated Item Price: P11175";
    echo "<br>";
    echo "</div>"
    ?>
    <form class = 'email-container'>
    <h3> Kindly provide an email for us to contact you</h3>
    <br>
    <input type="text" name ="email" placeholder = "E-mail">
</form>
</body>
</html>
