<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title><?php if(isset($title)){echo $title;}else{echo 'OverFlow';} ?></title>
    <link rel='stylesheet' href='<?php echo base_url() ; ?>/style/bootstrap.min.css'>
    <link rel='stylesheet' href='<?php echo base_url() ; ?>/style/jquery-ui.css'>
    <link rel='stylesheet' href='<?php echo base_url() ; ?>/style/tokenize2.min.css'>
<!--    <link rel='stylesheet' href='<?php echo base_url() ; ?>/asset/bootstrap-tagsinput-latest/src/bootstrap-tagsinput.css'>-->
    <link rel='stylesheet' href='<?php echo base_url() ; ?>/style/jquery.upvote.css'>
    <link rel='stylesheet' href='<?php echo base_url() ; ?>/style/style.css'>
    <link rel='stylesheet' href='<?php echo base_url() ; ?>/style/bootstrap-rtl.min.css'>
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
</head>
<body>
  <div class="header">
      <img id="logo" src="<?php echo base_url('images/logo.jpeg'); ?>">

       <nav id="main_nav">
           <ul>
               <li>
                   <span class="divider"></span>
               </li>
               <li>
                   <a class="active" href="<?php echo base_url('/Home/'); ?>">الرئيسية</a>
               </li>
               <li>
                   <a href="#">الاسئلة</a>
               </li>
               <li>
                   <a href="#">الاقسام</a>
               </li>
               <li>
                   <a href="#">المستخدمين</a>
               </li>
               <li>
                   <span class="divider"></span>
               </li>
               <li>
                   <form class="form-inline top-form" action="/action_page.php">
                     <input class="topbarsearch form-control mr-sm-2" type="text" placeholder="سؤال, مستخدم, قسم ">
                     <button class="topbarsearch btn" type="submit">بحث</button>
                   </form>
               </li>
               <li>
                   <span class="divider"></span>
               </li>
               <?php
               // echo $this->session->userdata('id');
                  if($this->session->userdata('id') == false)
                  {
                    echo "
                    <li>
                        <a class='account_links' href=' ". base_url('Welcome/login') ." '>تسجيل</a>
                    </li>
                    <li>
                        <a class='account_links' href=' " . base_url('Welcome/signup') . " '>انشاء حساب</a>
                    </li>
                    ";
                  }else{
                    echo "
                    <li class='note'>
                      <a href='#'><span class='glyphicon glyphicon-inbox'>  </span></a>
                    </li>
                    ";
                  }
               ?>
           </ul>
      </nav>

 </div>
</nav>
