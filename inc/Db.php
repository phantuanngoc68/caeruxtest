<?php
class Db {
    protected $connection;

    public function __construct
    (
        $username = '',
        $password = '',
        $database = '',
        $host = 'localhost',
        $charset = 'utf8'
    )
    {
        $con = mysqli_connect($host, $username, $password, $database);
    
        if (mysqli_connect_errno()) {
            exit('Failed to connect to MySQL: ' . mysqli_connect_error());
        }
    
        if (!mysqli_set_charset($con, $charset)) {
            exit('Fail to set charset');
        }

        return $this->connection = $con;
    }

    public function destroy()
    {
        if(!mysqli_close($this->connection)) {
            exit('Fail to close connection');
        }
    }
}
