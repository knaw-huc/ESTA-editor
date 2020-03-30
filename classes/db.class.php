<?php

class db {

    var $con;

    function __construct() {
        $this->con = new mysqli(DB_SERVER, DB_USER, DB_PASSWD, DB_NAME);
    }

    function getStruc($table) {
        return $this->_resultsToArray($this->con->query("SHOW FULL COLUMNS FROM $table"));
    }


    private function _resultsToArray($results) {
        $resultArray = array();
        while ($row = $results->fetch_assoc()) {
            $resultArray[] = $row;
        }
        return $resultArray;
    }

}
