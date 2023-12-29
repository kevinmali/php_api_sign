<?php
Class config{
    PUBLIC $HOSTNAME = "127.0.0.1";
    PUBLIC $USERNAME = "root";
    PUBLIC $PASSWORD = "";
    PUBLIC $DATABASENAME = "signup";
    PUBLIC $CONNECT_RES;

    public function connect(){
        $this->CONNECT_RES  = mysqli_connect($this->HOSTNAME,$this->USERNAME,$this->PASSWORD,$this->DATABASENAME); 
        return $this->CONNECT_RES;
    }
    public function adduser($username,$password,$mobilenumber){
        $this -> connect();

        $query = "INSERT INTO users(username,mobilenumber,password)VALUES('$username','$mobilenumber''$hash_password')";
        $res = mysqli_query($this->connection_res,$query);

        return $res;
    }
    public function login($password,$mobilenumber){
        $this -> connect();
        $query = "SELECT * FROM users WHERE mobilenumber='$mobilenumber'";
        $obj = mysqli_query($this->connection_res,$query);
        $record = mysqli_fetch_assoc($obj);

        $hash_password = $record['password'];

        $ismatch = password_verify($password,$hash_password);

        if($ismatch){
            return true;
        }else{
            return false;
        }
    }
    
}?>

