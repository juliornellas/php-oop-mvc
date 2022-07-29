<?php

class User extends Dbh{

    //Create
    public function create($firstName, $lastName, $dateOfBirth){
        $sql = "INSERT INTO users (users_firstname, users_lastname, users_dateofbirth) VALUES (?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstName, $lastName, $dateOfBirth]);
    }

    //Read 1
    public function all(){
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()){
            echo $row['users_firstname'].'<br />';
        }
    }

    //Read 2
    // public function getUser($firstName, $lastName){
    public function getUser($id){
        $sql = "SELECT * FROM users WHERE users_id = ?";
        // $sql = "SELECT * FROM users WHERE users_firstname = ? AND users_lastname = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        // $stmt->execute([$firstName, $lastName]);
        $name = $stmt->fetch();
        // $names = $stmt->fetchAll();

        return $name;
        // foreach ($names as $name){
        //     echo $name['users_dateofbirth']."<br />";
        // }
    }

    //update
    public function updateLn($id, $firstName){
        $sql = "UPDATE users SET users_lastname = ? WHERE users_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstName, $id]);
    }

    //delete
    public function delete($id){
        $sql = "DELETE FROM users WHERE users_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }

}