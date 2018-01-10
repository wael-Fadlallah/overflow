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
</head>
<body>
<nav class='navbar navbar-default'>
  <div class='container'>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class='navbar-header'>
      <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>
        <span class='sr-only'>Toggle navigation</span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>
      <a class='navbar-brand' href='<?php echo base_url('Home'); ?>'>Overflow</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
      <ul class='nav navbar-nav'>
        <li class='active'><a href='#'>Link <span class='sr-only'>(Current)</span></a></li>
        <li><a href='#'>Link</a></li>
        <li><a href='#'>Link</a></li>
      </ul>
      <form class='navbar-form navbar-right'>
        <button type='submit' class='form-control'></button>
          <input type='text' class='form-search' placeholder='بحث ...'>
        <span class='glyphicon glyphicon-search' aria-hidden='true'></span>

<!--        <button type='submit' class='btn btn-default'>Submit</button>-->
      </form>
      <?php
            if(isset($id))
            {
               echo "
                    <ul class='navbar-left profile_icons'>
                    <li class='profile_img'>
                      <button>
                          <a href='#'>
                             <img src='".base_url('images/profile/').$pic."' alt='profile image' width='50px'>
                          </a>
                      </button>
                    </li>
                    <li>
                        <button type='button' aria-label='messages'>
                            <a href='#'><span class='glyphicon glyphicon-envelope'></span></a>
                        </button>
                    </li>
                    <li>
                        <button type='button' aria-label='messages'>
                            <a href=''><span class='glyphicon glyphicon-tags'></span></a>
                        </button>
                    </li>
                </ul>
               ";
            }else{
                echo "
                  <ul class='navbar-my navbar-left'>
                    <li><a href=' ".base_url()."/Welcome/login'>تسجيل الدخول</a></li>
                    <li><a href=' ".base_url()."/Welcome/signup' class='signup'>انشاء حساب</a></li>
                  </ul>
                ";
            }
        ?>


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
