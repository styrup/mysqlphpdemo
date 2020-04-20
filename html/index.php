<!DOCTYPE html>
<html>

<head>
    <title>MySQLdemo</title>
    <style>
        body {
            font-family: verdana;
        }

        footer {
            font-size: x-small;
            text-align: left
        }
    </style>

</head>

<body>
    <h1>MySQLdemo</h1><?php
                        error_reporting(0);
                        $dbServer = getenv('DATABASE_SERVER');
                        if (empty($dbServer)) {
                            echo "DATABASE_SERVER not defined.";
                            return;
                        }
                        $dbUser = getenv('DATABASE_USER');
                        if (empty($dbUser)) {
                            echo "DATABASE_USER not defined.";
                            return;
                        }
                        $dbPass = getenv('DATABASE_PASS');
                        if (empty($dbPass)) {
                            echo "DATABASE_PASS not defined.";
                            return;
                        }
                        $db = getenv('DATABASE_DB');
                        if (empty($db)) {
                            echo "DATABASE_DB not defined.";
                            return;
                        }
                        $conn = new mysqli($dbServer, $dbUser, $dbPass, $db);
                        if ($conn->connect_error) {
                            echo "<p style=\"color: red\">Connection failed with error: " . $conn->connect_error . "</p>";
                        } else {
                            $sql = "SELECT name FROM users";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                echo "Names in database:</br>";
                                while ($row = $result->fetch_assoc()) {
                                    echo $row['name'] . "</br>";
                                }
                            } else {
                                echo "no results";
                            }
                            $conn->close();
                        }
                        ?>
    <footer>MySQLdemo - 2020</footer>
</body>

</html>