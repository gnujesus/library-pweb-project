<?php

class PaginationModel {
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    function get_current_page()
    {
      if (isset($_GET['p']) && is_numeric($_GET['p'])) {
        return $_GET['p'];
      } else {
        return 1;
      }
    }

    public function get_page_count($table, $itemsPerPage)
    {
      $rowCount = $this->conn->query("SELECT COUNT(*) AS total_records FROM $table;")->fetch_assoc()['total_records'];
      return ceil($rowCount / $itemsPerPage);
    }

    public function get_current_page_items($sqlQuery)
    {
      return $this->conn->query($sqlQuery);
    }

    public function get_starting_index($currentPage, $itemsPerPage)
    {
      $startingIndex = ($currentPage == 1) ? 0 : ($currentPage - 1) * $itemsPerPage;
      return $startingIndex;
    }
}