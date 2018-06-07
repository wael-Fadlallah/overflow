<?php
// echo '<pre>';
// print_r($question);
// echo '</pre>';
if(isset($vister))
{
  $question_view = '/Welcome/display_question?id=';
}else{
  $question_view = '/Home/display_question?id=';
}
?>
<section class='questions' style='padding-top:1px;'>

<div class='container' id='home'>
<div class='row'>
<div class='col-md-8'>
    <div class='questions_header'>
      <span id='questions_title'>الاسئلة</span>
        <div class='rtl questions_nav'>
            <a class='questions_nav_link a_active' href='#'>احدث</a>
            <a class='questions_nav_link' href='#'>اكثر تفاعلا</a>
            <a class='questions_nav_link' href='#'>اكثر اصوات</a>
            <a class='questions_nav_link' href='#'>بدون اجوبة</a>
        </div>
  </div>
  <?php
    foreach($question as $q)
    {
      $tags = explode(',',$q['tags']);
      echo "
      <div class='row questions_container_all'>
        <div class='col-lg-3'>
            <div class='row'>
                <div class='col-lg-4 votes'>
                    <i class='vote_icon_up fa fa-angle-up'></i>
                    <i class='vote_icon_down fa fa-angle-down'></i>
                    <span class='vote_counter'>
                      ". $q['votes'] ."
                    </span>
                    </div>
                    <div class='col-lg-4 views'>
                    <i class='view_icon fa fa-eye'></i>
                    <span class='view_counter'>30</span>
                    </div>
                    <div class='col-lg-4 answers'>
                    <i class='answer_icon fa fa-check'></i>
                    <span class='answer_counter'>
                      ". $q['comments'] ."
                    </span>
                </div>
            </div>
        </div>
        <div class='col-lg-9 question_container'>
            <div class='  rtl'>
                <div class='row'>
                    <div class='col-lg-12 question_title'>
                        <a href='".base_url('/Home/display_question?id=').$q['id']."'>
                          ".$q['title']."
                        </a>
                    </div>
                    <div class='col-lg-12 question_text'>
                        ".$q['post']."
                    </div>
                </div>
                    <div class='row'>
                    <div class='col-lg-9 question_tags'>
                    ";
                      foreach($tags as $tag)
                      {
                        echo "<span class='question_tag'><a href='#'>$tag</a></span>";
                      }
                    echo "
                    </div>
                    <div class='col-lg-3 asker_info'>
                        <div class='asker_time'> ".$q['date']." </div>
                        <div>
                        <img src=' ".base_url('images/profiles/').$q['profile_pic']."' class='asker_image'></div>
                        <div class='asker'> ".$q['owner']." </div>
                        <div class='points'>
                            <i class='point_icon fa fa-circle' id='points'></i>
                            <span>78</span>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
        </div>
      ";
    }
  ?>
  </div>
<div class='col-lg-4' id='side'>
            <a href="<?php echo base_url('/Home/ask'); ?>"><button class='btn' id='ask'>اسأل</button></a>
          <h4>مقالات قد تعجبك:</h4>
          <div class='articles rtl'>
              <a href='#'>افضل 5 مواقع لتعلم تصميم و تطوير مواقع الويب مجانا </a>
              <a href='#'>افضل خمس مواقع لتعلم البرمجة </a>
              <a href='#'>افضل خمس مواقع لتعلم البرمجة </a>
              <a href='#'>افضل خمس مواقع لتعلم البرمجة </a>
              <a href='#'>افضل خمس مواقع لتعلم البرمجة </a>
              <a href='#'>افضل خمس مواقع لتعلم البرمجة </a>
              <a href='#'>افضل خمس مواقع لتعلم البرمجة </a>
          </div>
          <h4>ذات صلة:</h4>
          <div class='related_questions'>
              <a href='#'>لمن قوقو مشا ناميك جا راجع فاضي ليه و م جاب معاهو بيض التنين؟</a>
              <a href='#'>بيجيتا دا مالو جلحاتو كبار؟</a>
          </div>
          </div>
      <!-- </div> -->
</div>
</section>
<div class='clearfix'></div>
