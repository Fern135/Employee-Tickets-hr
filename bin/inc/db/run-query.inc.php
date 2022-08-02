<?php


class mysqlQuery{
    /**
     * prebuilt sql prepared statements to prevent sql injection
    */
    function __construct() {
        $this->conn = include "./db-conn.inc.php";
    }

    function __destruct() {
        mysqli_close($this->conn);
    }

    // prepare the query
    public function prepare($query) {
        $this->sql_statement = mysqli_prepare($this->conn, $query);
    }

    public function bind_smt($insert_types, $data){
        mysqli_stmt_bind_param($this->sql_statement, $insert_types, );
    }

}
