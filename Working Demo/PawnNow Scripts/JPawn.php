<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pawn Now</title>
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

    <div class = "form-container">
    <form action="../Includes/userBrand.inc.php" method="post">
    <h2> What is the brand of your Jewelry?</h2>
    <br>
    <select name="selection" id="selection">
    <option value="Gold">Gold</option>
    <option value="Silver">Silver</option>
    <option value="Bronze">Bronze</option>
    <option value="Gold">Gold</option>
    </select>
    <br>
    <h2> What is the model of your Jewelry?</h2>
    <br>
    <select name="selectionmodel" id="selection">
    <option value="14K">14K</option>
    <option value="18K">18K</option>
    <option value="21K">21K</option>
    <option value="22K">22K</option>
    <option value="24K">24K</option>
    </select>
    <br>
    <h2> What is the Weight in grams of your Jewelry?</h2>
    <br>
    <select name="selectionattribute" id="selection">
    <option value="1 gram">1</option>
    <option value="2 grams">2</option>
    <option value="3 grams">3</option>
    <option value="4 grams">4</option>
    <option value="5 grams">5</option>
    <option value="6 grams">6</option>
    </select>
    <br>
    <br>
    <button>Pawn</button>
</form>
</div>
</body>
</html>