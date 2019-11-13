<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/styles.css?v=1.0">
  <title>all_users</title>
</head>
<body>
    <h1>All Users</h1>
    <table>
    <?php
        $host = 'localhost';
        $port = '3306';
        $db   = 'my_activities';
        $user = 'root';
        $pass = 'root';
        $charset = 'utf8mb4';  
        
        $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        
        try {
            $pdo = new PDO($dsn, $user, $pass, $options);
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }

            echo '<tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Status</th>
                  </tr>';
            
            
            $stmt = $pdo->query('SELECT * FROM users JOIN status ON users.status_id = status.id ORDER BY username');
            while ($row = $stmt->fetch()) {
                echo '<tr>';
                echo '<td>'.$row['id'].'</td>';
                echo '<td>'.$row['username'].'</td>';
                echo '<td>'.$row['email'].'</td>';
                echo '<td>'.$row['name'].'</td>';
                echo '</tr>';
            }

    ?>
    </table>
</body>
</html>