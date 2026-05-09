<?php
/**
 * Base Model Class
 */

class BaseModel {
    
    protected $db;
    protected $table;
    
    public function __construct() {
        // Database connection can be initialized here
    }
    
    public function getAll() {
        // Generic method to get all records
        if($this->db) {
            $query = "SELECT * FROM {$this->table}";
            return $this->db->query($query);
        }
        return [];
    }
    
    public function getById($id) {
        // Generic method to get single record
        if($this->db) {
            $query = "SELECT * FROM {$this->table} WHERE id = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param('i', $id);
            $stmt->execute();
            return $stmt->get_result()->fetch_assoc();
        }
        return null;
    }
}
?>