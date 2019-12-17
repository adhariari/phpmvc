<?php

class Mahasiswa_model  
{
    private $dbh;
    private $stmt;

    public function __construct()
    {
        //data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';
        
        try
        {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $error) 
        {
            die($error->getMessage());
        }
    }


    public function getAllM()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM MAHASISWA');
        $this->stmt->execute();
        $hasil = $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        return $hasil;
    }
}
