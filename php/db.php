<?php
class Database
{
    private static ?PDO $pdo = null;

    // Establish connection only once
    private static function connect(): PDO
    {
        if (self::$pdo === null) {
            $host = 'postgres'; // Docker service name
            $dbname = getenv('POSTGRES_DB') ?: 'default_db';
            $user = getenv('POSTGRES_USER') ?: 'default_user';
            $password = getenv('POSTGRES_PASSWORD') ?: 'default_password';

            try {
                $dsn = "pgsql:host=$host;port=5432;dbname=$dbname";
                self::$pdo = new PDO($dsn, $user, $password, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]);
            } catch (PDOException $e) {
                die("Database connection failed: " . $e->getMessage());
            }
        }
        return self::$pdo;
    }

    // General query method with prepared statements
    public static function query(string $query, array $params = []): array
    {
        try {
            $pdo = self::connect();
            $stmt = $pdo->prepare($query);
            $stmt->execute($params);
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    }

    // Example function to get all tasks
    public static function getAllTasks(): array
    {
        return self::query("SELECT * FROM tasks;");
    }
}
