<?php

require_once "./Model/conection.php";

class ModelForm
{
    //Create
    static public function mdlSign_up($table, $data)
    {
        //Statement
        $stmt = Connection::Init_connection()->prepare("INSERT INTO $table(user, email, password) VALUES (:user, :email, :password)");
        #bindParam()
        $stmt->bindParam(":user", $data["user"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $data["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $data["password"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return true;
        } else {
            print_r(Connection::Init_connection()->errorInfo());
        }

        // $stmt->close();
        $stmt = null;
    }

    //Read
    static public function ctrSelect($table, $column, $value)
    {
        if ($column == null && $value == null) {
            $stmt = Connection::Init_connection()->prepare("SELECT * FROM $table");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt = null;
        } else {
            $stmt = Connection::Init_connection()->prepare("SELECT * FROM $table WHERE $column = :$column");
            $stmt->bindParam(":" . $column, $value, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch();
            $stmt = null;
        }
    }

    //UPDATE

    static public function mdlUpdate($table, $data)
    {
        $stmt = Connection::Init_connection()->prepare("UPDATE $table SET user=:user, email=:email, password=:password WHERE ID=:ID");

        $stmt->bindParam(":ID", $data["ID"], PDO::PARAM_INT);
        $stmt->bindParam(":user", $data["user"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $data["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $data["password"], PDO::PARAM_STR);
        if ($stmt->execute()) {
            return true;
        }
        $stmt = null;
    }

    //DELETE
    static public function mdlDelete($table, $value)
    {
        $stmt = Connection::Init_connection()->prepare("DELETE FROM $table WHERE ID=:ID");

        $stmt->bindParam(":ID", $value, PDO::PARAM_INT);
        if ($stmt->execute()) {
            return true;
        }
        $stmt = null;
    }
}
