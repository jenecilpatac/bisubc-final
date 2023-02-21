<?php

class DB_Connect {

    public function __construct()
    {
        // Create connection
        //Jasper
        $this->db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        // Check connection
        if (!$this->db) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function insertTableRow($table, $fields, $data)
    {
        $values = array();
        foreach ($data as $row) {
            foreach ($row as $i => $val) {
                if (!is_numeric($val)) {
                    $row[$i] = "'$val'";
                }
            }
            $values[] = "VALUES (".implode(',', $row).")";
        }

        if (!empty($values)) {
            # Only insert table data when has values
            $sql = "INSERT INTO {$table} (".implode(',', $fields).") ".implode(', ', $values);
            print "<pre> $sql\n";
            if ($this->db->query($sql) === true) {
                $success = true;
            } else {
                $success = $this->db->error;
            }
            var_dump($success);
        }

        return $success;
    }

    public function updateTableRow($table, $fields, $data, $where_sql, $and_sql='')
    {
        $values = array();
        foreach ($fields as $col) {
            if (isset($data[$col])) {
                $values[$col] = "{$col}='{$data[$col]}'";
            }
        }
        //print "<pre>"; print_r($data); print_r($values); exit;

        $success = false;
        if (!empty($values) && $where_sql !== '') {
            # Only insert table data when has values
            $sql = "UPDATE {$table} 
                    SET ".implode(',', $values)." 
                    WHERE {$where_sql}
            ";
            if ($and_sql !== '') {
                $sql .= " {$and_sql}";
            }
            //print "<pre> $sql\n";
            if ($this->db->query($sql) === true) {
                $success = true;
            } else {
                $success = $this->db->error;
            }
            //var_dump($success);
        }

        return $success;
    }

    public function getDataFromTable($sql)
    {
        $data = array();
        //print "<pre>$sql\n";
        $result = $this->db->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        return $data;
    }

}

?>