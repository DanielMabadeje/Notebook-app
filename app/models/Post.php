<?php

// namespace App\Models;

class Post
{
    private $db;

    /**
     * Post constructor.
     * @param null $data
     */
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getnotes()
    {
        $this->db->query('SELECT *,
                          notes.id as postId,
                          users.id as userId
                          FROM notes
                          INNER JOIN users
                          ON notes.user_id = users.id
                          WHERE user_id=' . $_SESSION['user_id'] . '
                          ORDER BY notes.created_at DESC
                          ');
        $results = $this->db->resultSet();
        return $results;
    }
    public function addPost($data)
    {
        $this->db->query('INSERT INTO notes (subject, title, user_id, body) VALUES(:subject, :title, :user_id, :body)');
        $this->db->bind(':subject', $data['subject']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':body', $data['body']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function show($id)
    {
        $this->db->query("SELECT *
                          FROM notes      
                          WHERE id=:id
                          ");
        $this->db->bind(':id', $id);
        $results = $this->db->single();
        return $results;
    }
    public function updatePost($data)
    {
        $this->db->query('UPDATE notes SET title=:title, body=:body WHERE id =:id');
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':body', $data['body']);



        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function deletePost($id)
    {
        $this->db->query('DELETE FROM notes where id=:id');
        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
