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

    public function getTask($id){
        $sql = "SELECT * FROM tasks WHERE id = :id";
        $this->db->query($sql);
        $this->db->bind(':id', $id);
        $task = $this->db->single();
        return $task;
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

    public function update($task){
        $sql = "UPDATE tasks SET title = :title, body = :body, category_id = :category_id WHERE id = :task_id";
        $this->db->query($sql);
        $this->db->bind(':task_id', $task['id']);
        $this->db->bind(':title', $task['title']);
        $this->db->bind(':body', $task['body']);
        $this->db->bind(':category_id', $task['category']);
        $this->db->execute();
    }

    public function delete($id){
        $sql = "DELETE FROM tasks WHERE id = :id";
        $this->db->query($sql);
        $this->db->bind(':id', $id);
        $this->db->execute();
    }
}