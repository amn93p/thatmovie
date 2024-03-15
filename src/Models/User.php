<?php

class User
{
    // Définir les propriétés

    /**
     * Identifiant unique de l'utilisateur (int).
     */
    private int $userId;

    /**
     * Nom d'utilisateur choisi par l'utilisateur (string).
     */
    private string $username;

    /**
     * Adresse email de l'utilisateur (string).
     */
    private string $email;

    /**
     * Mot de passe de l'utilisateur (hash, string).
     * 
     * **Important:** Cette propriété ne doit jamais stocker le mot de passe en clair.
     * Hacher toujours le mot de passe avant de le stocker dans la base de données.
     */
    private string $password;

    private PDO $db;

    private string $table = '`users`';
    /**
     * Constructeur - Initialise la connexion à la base de données.
     *
     * Cette méthode tente de se connecter à la base de données via PDO.
     * Elle lève une exception si la connexion échoue.
     */
    public function __construct()
    {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=thatmovie;charset=utf8', 'root', '');
        } catch (Exception $error) {
            die($error->getMessage()); // Terminer le script avec un message d'erreur
        }
    }

    public function getUserList()
    {
        $query = 'SELECT `id`, `username`, `email` FROM ' . $this->table;
        $queryStatement = $this->db->query($query);
        return $queryStatement->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * Définit l'adresse email de l'utilisateur.
     *
     * @param string $email L'adresse email de l'utilisateur.
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * Définit le mot de passe de l'utilisateur.
     *
     * @param string $password Le mot de passe de l'utilisateur.
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * Définit le username de l'utilisateur.
     *
     * @param string $username Le username de l'utilisateur.
     */
    public function setusername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * Définit l'ID de l'utilisateur.
     *
     * @param int $userId L'ID de l'utilisateur.
     */
    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * Récupère l'adresse email de l'utilisateur.
     *
     * @return string L'adresse email de l'utilisateur.
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Récupère l'ID de l'utilisateur.
     *
     * @return int L'ID de l'utilisateur.
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Récupère le mot de passe de l'utilisateur.
     *
     * @return string Le mot de passe de l'utilisateur.
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Récupère le username de l'utilisateur.
     *
     * @return string Le username de l'utilisateur.
     */
    public function getusername(): string
    {
        return $this->username;
    }
    public function registerUser(string $username, string $email, string $password): bool
{

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


    $query = 'INSERT INTO ' . $this->table . ' (`username`, `email`, `password`) VALUES (:username, :email, :password)';
    $statement = $this->db->prepare($query);


    $success = $statement->execute([
        'username' => $username,
        'email' => $email,
        'password' => $hashedPassword
    ]);

    return $success;
}

}
