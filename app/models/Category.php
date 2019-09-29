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

    public function getCategory($category){
        $sql = "SELECT * FROM categories WHERE id = :id";
        $this->db->query($sql);
        $this->db->bind(':id', $category);
        $category = $this->db->single();

        return $category;
    }

    public function store($category){
        $sql= "INSERT INTO categories (user_id, title) VALUES (:user_id, :title)";
        $this->db->query($sql);
        $this->db->bind(':user_id', authUser());
        $this->db->bind(':title', strtolower($category['title']));
        $this->db->execute();
    }

    public function update($category){
        $sql = "UPDATE categories SET title = :title WHERE id = :id";
        $this->db->query($sql);
        $this->db->bind(':title', strtolower($category['title']));
        $this->db->bind(':id', $category['id']);
        $this->db->execute();
    }

    public function delete($id){
        $sql = "DELETE categories, tasks
                FROM categories
                INNER JOIN tasks
                ON tasks.category_id = categories.id 
                WHERE categories.id = :id";
        
            $this->db->query($sql);
            $this->db->bind(':id', $id);
            $this->db->execute();
        
    }
}
