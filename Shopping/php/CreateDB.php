<?php


class CreateDB
{
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $tablename;
    public $conn;

    public function __construct(
        $dbname="newdb",
        $tablename="Products",
        $servername="localhost",
        $username="root",
        $password=""
    )
    {
        $this->dbname = $dbname;
        $this->tablename = $tablename;
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;

        $this->conn = mysqli_connect($servername, $username, $password);

        if(!$this->conn){
            die("Mysql Connection Failed: ".mysqli_connect_error());
        }

        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

        if(mysqli_query($this->conn,$sql))
        {

            $this->conn = mysqli_connect($servername, $username, $password, $dbname);

            $sql = "CREATE TABLE IF NOT EXISTS $tablename
                    (product_id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    product_name VARCHAR(255) NOT NULL,
                    product_price FLOAT NOT NULL,
                    product_prev_price FLOAT,
                    product_img VARCHAR(100) NOT NULL,
                    product_img_description VARCHAR(255)
                    );";

            if(!mysqli_query($this->conn, $sql))
            {
                echo "Error in TABLE CREATION !!:".mysqli_error($this->conn);
            }
        }
        else
        {
            return false;
        }
    }

    public function getData()       //get products from DB
    {
        $sql = "SELECT * FROM $this->tablename";

        $result = mysqli_query($this->conn, $sql);

        if(mysqli_num_rows($result) > 0)
        {
            return $result;
        }
    }
}