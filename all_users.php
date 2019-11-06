<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  //<link rel="stylesheet" href="css/styles.css?v=1.0">
  <title>all_users</title>
</head>
<body>
    <h1>All Users</h1>
    <?php
        $host = 'localhost';
        $db   = ‘my-activities’;
        $user = 'root';
        $pass = 'root';
        $charset = 'utf8mb4';
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [     
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,     
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,     
            PDO::ATTR_EMULATE_PREPARES   => false, ];
            try {      
                $pdo = new PDO($dsn, $user, $pass, $options);
            } catch (PDOException $e) {     
                throw new PDOException($e->getMessage(), (int)$e->getCode());
            }

         // TODO faire l'affichage du tableau

    ?>
</body>
</html>