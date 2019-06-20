<?php
	// $connection = mysqli_connect('localhost', 'agomezm1819', 'VoVayntS');
	// if (!$connection)
	// 	die("Database Connection Failed" . mysqli_error($connection));

	// $select_db = mysqli_select_db($connection, 'agomezm1819');
	// if (!$select_db){
	// 	die("Database Selection Failed" . mysqli_error($connection));
	// }

    // $sql = "SELECT * FROM `libros`";
    // $result = mysqli_query($connection, $sql);
    // $count = mysqli_num_rows($result);
    // echo $count;
    function connect() {
        try {
            $connection = "mysql:host=localhost;dbname=tw;charset=utf8mb4";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES =>  false,
            ];

            return new PDO($connection, "root", "", $options);
        } catch (PDOException $e) {
            print_r('Error connection' . $e->getMessage());
        }
    }


    $query = connect()->query('SELECT author AS arg FROM libros GROUP BY author ORDER BY arg DESC LIMIT 3');
    while ($row = $query->fetch()) {
        echo $row[0];
    }
?>
