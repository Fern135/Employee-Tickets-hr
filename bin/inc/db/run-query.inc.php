<?php
    class mysqlQuery{
        /**
         * prebuilt sql prepared statements to prevent sql injection
        */
        function __construct() {
            $this->link = include "./db-conn.inc.php";
        }

        function __destruct() {
            mysqli_close($this->link);
            mysqli_stmt_close($this->sql_statement);
        }

        // prepare the query
        public function prepare($query) {
            $this->sql_statement = mysqli_prepare($this->link, $query);
        }

        // binding with the inserttype aka the data that's being inserted
        public function bind_smt($insert_types, $data=array()){
            /*  
                $insert_types need to be in order of the $data
                Character	Description
                i <=======> corresponding variable has type integer
                d <=======> corresponding variable has type double
                s <=======> corresponding variable has type string
                b <=======> corresponding variable is a blob and will be sent in packets
            */
            mysqli_stmt_bind_param($this->sql_statement, $insert_types, $data);
        }

        // speaks for itself
        public function run(){
            mysqli_stmt_execute($this->sql_statement);
        }
    }
