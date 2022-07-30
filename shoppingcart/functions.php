<?php
function pdo_connect_mysql()
{
    // 
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'event_db';
    try {
        return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {

        exit('Failed to connect to database!');
    }
}

function template_header($title)
{
    echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
        <header>
            <div class="content-wrapper">
                <h1><a href="index.php" style="text-decoration: none">MK Event Cart</a></h1>
                <nav>
                    <a href="../services.php">Home</a>
                    <a href="index.php?page=products">Venues</a>
                </nav>
                <div class="link-icons">
                    <a href="index.php?page=cart">
						<i class="fas fa-shopping-cart"></i>
                        
					</a>
                </div>
            </div>
        </header>
        <main>
EOT;
}

function template_footer()
{
    $year = date('Y');
    echo <<<EOT
        </main>
        <footer>
            <div class="content-wrapper">
                <p>&copy; $year, MK Event Planner</p>
            </div>
        </footer>
    </body>
</html>
EOT;
}

$num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
