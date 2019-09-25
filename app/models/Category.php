<?php

class Category{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getCategories(){
        $sql = "SELECT * FROM categories WHERE user_id = :user_id";
        $this->db->query($sql);
        $this->db->bind(':user_id', authUser());

        $categories = $this->db->resultSet();
        return $categories;
    }

    public function store($category){
        $sql= "INSERT INTO categories (user_id, title) VALUES (:user_id, :title)";
        $this->db->query($sql);
        $this->db->bind(':user_id', authUser());
        $this->db->bind(':title', strtolower($category['title']));
        $this->db->execute();
    }
}
