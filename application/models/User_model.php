<?php
class User_model extends CI_Model
{
    public $name ;
    public $email ;
    public $user_id ;
    public $phone ;
    public $career ;
    public $city ;
    public function __construct()
    {
        parent::__construct();
        $this->user_id = $this->session->userdata('id');
        $query = $this->db->query("SELECT * FROM users WHERE id = '$this->user_id'");
        if($row = $query->row())
        {
          $this->name   = $row->name;
          $this->email  = $row->email;
          $this->phone  = $row->phone;
          $this->career = $row->career;
          $this->city = $row->city;

        }
    }
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
    public function user_profile()
    {
      $id = $this->user_id;
      $query = $this->db->query("SELECT * FROM users WHERE id = '$id'");
      $row = $query->row();
      $data = array(
          'name'      =>  $this->name,
          'email'     =>  $this->email,
          'phone'     =>  $this->phone,
          'career'    =>  $this->career,
          'city'      =>  $this->city,
          'bio'       =>  $row->bio,
          'join_date' =>  $row->join_date,
          'profile'   =>  $row->profile_pic
      );
      $q_query = $this->db->query("SELECT title , id FROM questions WHERE owner = '$id'");
      if($row = $q_query->result())
      {
        foreach ($row as $q) {
          $count_query = $this->db->query(" SELECT COUNT(id) as count FROM comments WHERE question_id = '$q->id' ");
          $votes_query = $this->db->query(" SELECT COUNT(id) as votes FROM votes WHERE question_id = '$q->id' AND comment_id IS NULL ");
          $votes_row   = $votes_query->row();
          // var_dump($votes_row);
          if($count_row = $count_query->row())
          {
              $count_data = array(
                $q->title       => array(
                  'count' => $count_row->count,
                  'votes' => $votes_row->votes
                )
              );
              // var_dump($count_data);
              $data['user_questions'] = $count_data;
          }
        }
      }else{
        $data['user_questions'] = false;
      }
      return $data;
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
            return $this->db->insert_id() ;
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
      function arabic_date_format($timestamp)
      {
          $periods = array(
              "second"  => "ثانية",
              "seconds" => "ثواني",
              "minute"  => "دقيقة",
              "minutes" => "دقائق",
              "hour"    => "ساعة",
              "hours"   => "ساعات",
              "day"     => "يوم",
              "days"    => "أيام",
              "month"   => "شهر",
              "months"  => "شهور",
          );

          $difference = (int) abs(time() - $timestamp);

          $plural = array(3,4,5,6,7,8,9,10);

          $readable_date = "منذ ";

          if ($difference < 60) // less than a minute
          {
              $readable_date .= $difference . " ";
              if (in_array($difference, $plural)) {
                  $readable_date .= $periods["seconds"];
              } else {
                  $readable_date .= $periods["second"];
              }
          }
          elseif ($difference < (60*60)) // less than an hour
          {
              $diff = (int) ($difference / 60);
              $readable_date .= $diff . " ";
              if (in_array($diff, $plural)) {
                  $readable_date .= $periods["minutes"];
              } else {
                  $readable_date .= $periods["minute"];
              }
          }
          elseif ($difference < (24*60*60)) // less than a day
          {
              $diff = (int) ($difference / (60*60));
              $readable_date .= $diff . " ";
              if (in_array($diff, $plural)) {
                  $readable_date .= $periods["hours"];
              } else {
                  $readable_date .= $periods["hour"];
              }
          }
          elseif ($difference < (30*24*60*60)) // less than a month
          {
              $diff = (int) ($difference / (24*60*60));
              $readable_date .= $diff . " ";
              if (in_array($diff, $plural)) {
                  $readable_date .= $periods["days"];
              } else {
                  $readable_date .= $periods["day"];
              }
          }
          elseif ($difference < (365*24*60*60)) // less than a year
          {
              $diff = (int) ($difference / (30*24*60*60));
              $readable_date .= $diff . " ";

              if (in_array($diff, $plural)) {
                  $readable_date .= $periods["months"];
              } else {
                  $readable_date .= $periods["month"];
              }
          }
          else
          {
              $readable_date = date("d-m-Y", $timestamp);
          }

          return $readable_date;
      }
    public function get_questions()
    {
        $query = $this->db->query("SELECT questions.id , questions.title , questions.post , questions.tags , questions.date , users.name , questions.owner , questions.votes FROM questions INNER JOIN users WHERE questions.owner = users.id ");
        foreach($query->result() as $obj)
        {
//            $tags = explode(',',$obj->tags);
            // $data['question'][] = $obj;
           $data['question'][] = array(
           'id'      => $obj->id,
           'title'   => $obj->title,
           "post"    => $obj->post,
           "tags"    => $obj->tags,
           "owner"   => $obj->name,
           "date"    => $this->arabic_date_format(strtotime($obj->date)),
           "votes"   => $obj->votes,
           "comments"=> $this->num_comments($obj->id)
           );
           // var_dump($this->num_comments($obj->id));
        }
        return $data ;
    }
    public function num_comments($q_id)
    {
      $query = $this->db->query("SELECT comments.id FROM comments WHERE comments.question_id = '$q_id' ");
      if($row = $query->row())
      {
        return $query->num_rows();
      }else{
        return 0 ;
      }
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
        $user_id = $this->session->userdata('id') ;
        $data = array(
        "user_id"       => $user_id,
        "question_id"   => $q_id,
        "comment"       => $comment
        );
        if($this->db->insert('comments',$data))
        {
          $check_id_query = $this->db->query("SELECT id FROM comments WHERE user_id = '$user_id' and question_id = '$q_id' ");
          if($row = $check_id_query->row())
          {
            $votes_data = array(
              'user_id'     =>$user_id,
              'question_id' =>$q_id,
              'comment_id'  =>$row->id
            );
            // $this->db->insert('votes',$votes_data);
          }
            return $comment ;
        }
    }
    public function votes_query($id,$up,$down,$star)
    {
      // check if the user have already vote
      $user = $this->session->userdata('id');
      $query = $this->db->query("SELECT id FROM votes WHERE user_id = '$user' AND question_id = '$id' AND comment_id IS NULL");
      if($row = $query->row())
      {
        $data = array(
          "upvote"        => $up,
          "downvote"      => $down,
          "star"          => $star
        );
        $this->db->where('id',$row->id);
        if($this->db->update('votes',$data))
        {
          if($count = $this->update_counter($row->id))
          {
            return $count ;
          }
        }
      }else{
        $data = array(
          "user_id"       => $user,
          "question_id"   => $id,
          "upvote"        => $up,
          "downvote"      => $down,
          "star"          => $star
        );
        if($this->db->insert('votes',$data))
        {
          return true;
        }
      }
    }
    public function comment_votes_query($id,$q_id,$up,$down,$star)
    {
      // in case there is a vote for a comment update it otherwise insert a new vote
      $user = $this->session->userdata('id');
      $vote_check = $this->db->query("SELECT * FROM votes WHERE question_id = '$q_id' AND user_id = '$user' AND comment_id > 0");
      if($row = $vote_check->row())
      {
        $data = array(
          "comment_id"  => $id,
          "upvote"      => $up,
          "downvote"    => $down,
          "star"        =>  $star
        );
        $this->db->where('id',$row->id);
        if($this->db->update('votes',$data))
        {
          // $this->count_votes($q_id,$id,$count);
          return true ;
        }
      }else{
          $data = array(
            "user_id"     => $user,
            "question_id" => $q_id,
            "comment_id"  => $id,
            "upvote"      => $up,
            "downvote"    => $down,
            "star"        =>  $star
          );
          if($this->db->insert('votes',$data))
          {
            // $this->count_votes($q_id,$id,$count);
            return true ;
          }
      }
      // return true ;
    }
    public function update_counter($q_id,$c_id=false)
    {
        if($c_id == false)
        {
          $query = $this->db->query("SELECT COUNT(id) as count FROM votes WHERE upvote = 'true' OR upvote = '1' AND question_id='$q_id' AND comment_id IS NULL");
          if($row = $query->row())
          {
            return $row->count ;
          }
        }
    }
    public function count_votes($q_id,$c_id=false,$count=false)
    {
      if($count == false)
      {
        $query = $this->db->query("SELECT votes FROM questions WHERE id = '$q_id'");
        $row = $query->row();
        return $row->votes;
      }elseif($c_id != false){
        $query = $this->db->query("SELECT votes FROM comments WHERE id = '$c_id'");
        if($row = $query->row())
        {
          $vote = $row->votes + $count ;
          $this->db->set('votes',$vote,FALSE);
          $this->db->where('id',$c_id);
          $this->db->update('comments');
        }
      }else {
        $query = $this->db->query("SELECT votes FROM questions WHERE id = '$q_id'");
        $row_increment = $query->row();
        if($row_increment != null )
        {
          // var_dump($row);
          // echo 'orignal is '.$row_increment->votes ;
          $vote = $row_increment->votes + $count;
          // echo '<br>vote is '.$vote ;
          // $this->db->query("UPDATE `questions` SET `votes` = `votes` WHERE id = '$q_id' ");
          $this->db->set('votes',$vote,FALSE);
          $this->db->where('id',$q_id);
          $this->db->update('questions');
          // echo 'count is '.$count;
          // echo '<br> votes is '.$row->votes;
          // echo '<br> still is '.$vote;
          return $vote ;
        }
      }
      //
    }
    public function get_votes($q_id)
    {
      $user = $this->session->userdata('id');
      // get the user vote in question if any or return a bsic string for ajax
      $check_question_votes = $this->db->query("SELECT * FROM votes WHERE user_id = '$user' AND question_id = '$q_id' AND comment_id is null");
      if($row = $check_question_votes->row())
      {
        $data['question_vote'] = array(
          'upvoted'     =>$row->upvote,
          'downvoted'   =>$row->downvote,
          'star'        =>$row->star,
          'count'       =>$this->update_counter($q_id)
        );
      }else{
        $data['question_vote'] = array(
          'upvoted'     =>'false',
          'downvoted'   =>'false',
          'star'        =>'false',
          'count'       =>$this->update_counter($q_id)
        );
      }
      //get the user vote if any or false
      $check_comment_votes = $this->db->query("SELECT votes.comment_id , votes.upvote , votes.downvote ,votes.star , comments.votes FROM votes INNER JOIN comments ON votes.comment_id = comments.id WHERE votes.question_id = '$q_id' AND votes.comment_id > 0 AND votes.user_id = '$user' ");
      if($row_comments = $check_comment_votes->row())
      {
          $data['user_vote'] = $row_comments ;
      }else{
        $data['user_vote'] = false ;
      }
      // get other users votes if any or false
      $get_comments_data = $this->db->query("SELECT comments.id , comments.votes , votes.upvote , votes.downvote , votes.star FROM comments INNER JOIN votes ON comments.id = votes.comment_id WHERE comments.question_id = '$q_id' AND votes.user_id != '$user'");
        if($row_voted = $get_comments_data->result())
        {
          $data['comments_voted'] = $row_voted ;
        }else{
          $data['comments_voted'] = false ;
        }
        // get unvoted comments id for ajax request or fasle
      $get_unvoted_comments=$this->db->query("SELECT id FROM comments WHERE question_id = '$q_id'");
        if($row_unvoted = $get_unvoted_comments->result())
        {
          // var_dump($row_unvoted);
          $data['unvoted_comments_id'] = $row_unvoted ;
        }else{
          $data['unvoted_comments_id'] = false ;
        }
      return $data ;
    }
    public function get_votes_vister($q_id)
    {
       $get_question_count = $this->db->query("SELECT votes FROM questions WHERE id = '$q_id'");
       if($row_question = $get_question_count->row() )
       {
         $data['question_vote'] = $row_question->votes;
       }
       $get_comments_data = $this->db->query("SELECT id ,votes  FROM comments WHERE question_id = '$q_id'");
        if($row_voted = $get_comments_data->result())
        {
          $data['comments_voted'] = $row_voted ;
        }else{
          $data['comments_voted'] = false ;
        }
        return $data;
    }
}
?>
