<?php

class Task {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getTasks(){
        $sql = "SELECT tasks.*, categories.title 
                AS category_title
                FROM tasks
                LEFT JOIN categories 
                ON categories.id = tasks.category_id
                WHERE tasks.user_id = :user_id";

        $this->db->query($sql);
        $this->db->bind(':user_id', authUser());
        $tasks = $this->db->resultSet();
        return $tasks;
    }

    public function getTasksByCategory($category){

        $sql = "SELECT * FROM tasks WHERE category_id = :category_id";
        $this->db->query($sql);
        $this->db->bind(':category_id', $category);
        $results = $this->db->resultSet();
        return $results;
    }

    public function store($taskData){
        $sql = "INSERT INTO tasks (user_id, title, body, category_id) 
                VALUES (:user_id, :title, :body, :category_id)";
        $this->db->query($sql);

        $this->db->bind(':user_id', authUser());
        $this->db->bind(':title', $taskData['title']);
        $this->db->bind(':body', $taskData['body']);
        $this->db->bind(':category_id', $taskData['category']);
        
        $this->db->execute();
    }
}