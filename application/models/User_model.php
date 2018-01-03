<?php
class User_model extends CI_Model
{
//    public function __construct()
//    {
//        parent::__construct();
//    }
    public $name ;
    public $email ;
    public $password ;
    public function Create_user()
    {
        $name       = $_POST['username'];
        $email      = $_POST['email'];
        $password   = $_POST['password'];
        $data = array(
            'name'      => $name ,
            'email'     => $email,
            'password'  => md5($password)
        );
        if($this->db->insert('users',$data))
        {
            $id = $this->db->insert_id();
            $user_data = array(
                 'name' => $name ,
                 'id'   => $id    
            );
            $this->session->set_userdata($user_data);
            return true;
        }
    }
    public function insert_img($image = null , $id = null)
    {
        $query = "UPDATE `users` SET profile_pic = ".$this->db->escape($image)." WHERE id = ".$this->db->escape($id). " ";
        $this->db->query($query);
    }
    public function check_profile($id)
    {
        $query = "SELECT profile_pic FROM `users` WHERE id = ".$this->db->escape($id)." ";
        $row = $this->db->query($query);
        $result = $row->last_row('array');
        return $result['profile_pic'] ;
    }
    public function complate_account($id)
    {
        $phone = $_POST['phone'];
        $age   = $_POST['age'];
        $career= $_POST['career'];
        $data = array(
            'phone' => $phone,
            'age'   => $age,
            'career'=> $career 
        );
        $this->db->where('id',$id);
        $this->db->update('users',$data);
    }
    public function ask($id){
        $data = array(
            'title' => $_POST['title'],
            'post'  => $_POST['post'],
            'tags'  => implode(',',$_POST['tags']),
            'owner'    => $id
        );
        if($this->db->insert('questions',$data))
        {
            return true ;
        }
    }
    public function check_account($id)
    {
        $query = $this->db->simple_query("SELECT * FROM users Where id = $id");
        return ($query?true:false);
    }
    public function login()
    {
        $email      = $_POST['email'];
        $password   = $_POST['password'];
        $query = $this->db->query("SELECT * FROM users WHERE email = ".$this->db->escape($email)." ");
        $row   = $query->row() ;
        if($row)
        {
            if($row->password === md5($password))
            {
                $data = array(
                'id'    => $row->id,
                'name'  => $row->name,
                'pic'   => $row->profile_pic
                );
                $this->session->set_userdata($data);
                return true ;
            }else{
                return false ;
            }
        }else{
            return false ;
        }
    }
    public function check_tag($tag)
    {
        $query  = $this->db->query("SELECT * FROM tags WHERE name like '%$tag%' ");
        foreach($query->result() as $obj)
        {
            $data[] = array(
                'text'    => $obj->name,
                'value'     => $obj->name
            );
        }
        return $data ;
    }
    public function get_questions()
    {
        $query = $this->db->query("SELECT questions.id , questions.title , questions.post , questions.tags , questions.date , users.name FROM questions INNER JOIN users ON questions.owner = users.id ");
        foreach($query->result() as $obj)
        {
//            $tags = explode(',',$obj->tags);
            $data['question'][] = $obj;
//            $data['question'][] = array(
//            'id'    => $obj->id,
//            'title' => $obj->title,
//            "post"  => $obj->post,
//            "tags"  => $obj->tags,
//            "owner" => $obj->owner,
//            "date"  => $obj->date
//            );
        }
        return $data ;
    }
    public function get_question($id)
    {
        $query = $this->db->query("SELECT questions.id , questions.title , questions.post , questions.tags , questions.date , users.name FROM questions INNER JOIN users ON questions.id = '$id' and questions.owner = users.id ");
        $data = $query->row_array();
        $comment_query = $this->db->query("SELECT * FROM comments WHERE question_id = '$id'  ");
        $comment_data = $comment_query->result_array();
//        echo '<pre>';
//        var_dump($comment_data);
//        echo "<hr>";
//        var_dump($data);
//        echo '</pre>';
        $data['comments'] = $comment_data; 
        return $data ;
    }
    public function get_tags($tags)
    {
        $tags = explode(',',$tags);
        $names= null;
        foreach($tags as $id)
        {
            $query = $this->db->query("SELECT * FROM tags WHERE id = '$id'");
            if($row = $query->row())
            {
                $names[$row->id] = $row->name ;
            }
        }
        return $names ;
    }
    public function insert_comment($comment,$q_id)
    {
        $data = array(
        "user_id"       => $this->session->userdata('id'),
        "question_id"   => $q_id,
        "comment"       => $comment
        );
        if($this->db->insert('comments',$data))
        {
            return $comment ;
        }
    }
}
?>