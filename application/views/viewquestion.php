<section class="question_view_new">
    <div class="container main_container">
    <div class="main rtl">
        <div class="question_title"><?php echo $title ;?></div>
        <div class="line"></div>
        <div class="questions row">
            <div class="vote_counter col-lg-1">
                <a href="#"><i class="vote_icon_up fa fa-angle-up"></i></a>
                <span class="counter">30</span>
                <a href="#"><i class="vote_icon_up fa fa-angle-down"></i></a>
            </div>

            <div class="question col-lg-11">
        <div class="question_text"><?php echo $post;?></div>
        <div class="asker_and_tags row">
         <div class="question_tags col-lg-8 offset-lg-1">
            <?php $tags=explode(",",$tags);?>
            <?php foreach($tags as $tag):?>
            <span class="question_tag"><a href="#"><?php echo $tag;?></a></span>
            <?php endforeach;?>
            </div>
            <div class="asker_and_time col-lg-3">
            <div class="asker" style="display:inline-block;"> من قبل<?php echo $name;?></div>
            <div><img class="asker_image" src="wael.jpg"></div>
            <div class="asker_time">منذ<?php echo "12sec ago";?></div>
            </div>
        </div>
            <div class="comments">
                  <div class="comment"><?php echo " اظن كلامك صح";?></div>
            </div>
        </div>
        </div>


        <div class="comment_share">
        <a class="add_comment" href="#collapse_comment" data-toggle="collapse">اضف تعليق</a>
        <a class="share_question" href="#collapse_share" data-toggle="collapse">مشاركة</a>
            <div id="collapse_comment" class="collapse">
                <form class="form-group" action="#" method="post">
                    <input type="text" class="form-control comment_text" rows="5" name="question">
                   <input type="submit" class="btn comment_submit" name="comment" value="تم">
                </form>
            </div>


            <div id="collapse_share" class="collapse share_box">
              <a href="#">
                  <img src="facebook.png">
             </a>
             <a href="#">
                  <img src="twitter.png">
             </a>
                <a href="#">
                  <img src="whatsapp.png">
             </a>
                <a href="#">
                  <img src="google-plus.png">
             </a>
            </div>
            </div>
        <div class="answer_and_comment">
            <h4>4 اجوبة</h4>
            <div class="line"></div>
             <div class="answers row">
            <div class="answer_counter col-lg-1">
                <a href="#"><i class="vote_icon_up fa fa-angle-up"></i></a>
                <span class="counter">56</span>
                <a href="#"><i class="vote_icon_up fa fa-angle-down"></i></a>
                <a href="#"><i class="accept_icon fa fa-check"></i></a>
            </div>
            <div class="answer col-lg-11">
              <div class="answer_text"><?php echo "test ted";?></div>
                <div class="col-lg-3 answerer_and_time">
                   <div class="answerer"> من قبل<?php echo "unknown";?></div>
                    <div><img id="answerer_image" src="wael.jpg"></div>
                   <div class="answer_time">منذ<?php echo "15";?></div>
                </div>
                <div class="answer_comments">
                  <div class="comment"><?php echo " اظن كلامك صح";?></div>
                </div>
        </div>
        </div>
            <div class="line"></div>
          <div class="answers row">
            <div class="answer_counter col-lg-1">
                <a href="#"><i class="vote_icon_up fa fa-angle-up"></i></a>
                <span class="counter">44</span>
                <a href="#"><i class="vote_icon_up fa fa-angle-down"></i></a>
                <a href="#"><i class="accept_icon fa fa-check"></i></a>
            </div>
            <div class="answer col-lg-11">
        <div class="answer_text"><?php echo "test test test";?></div>
                <div class="col-lg-3 answerer_and_time">
                   <div class="answerer"> من قبل<?php echo " ".$row['6'];?></div>
                    <div><img id="answerer_image" src="wael.jpg"></div>
                   <div class="answer_time">منذ<?php echo $row['4'];?></div>
                </div>
                <div class="answer_comments">
                <div class="comment"><?php echo " اظن كلامك صح";?></div>
        </div>
        </div>
        </div>
        </div>
        </div>
    <div class="side rtl">
        <div class="question_avt">
        <div><?php echo "عُرض:"." "."233"." "."مرة"?></div>
        <div><?php echo "منذ"." "."3 دقايق";?></div>
        <div><?php echo "اخر نشاط"." "."منذ"." "."3 دقايق";?></div>
        </div>
        <h6>مقالات قد تعجبك:</h6>
        <div class="articles rtl">
            <a href="#">افضل 5 مواقع لتعلم تصميم و تطوير مواقع الويب مجانا </a>
            <a href="#">افضل خمس مواقع لتعلم البرمجة </a>
            <a href="#">افضل خمس مواقع لتعلم البرمجة </a>
            <a href="#">افضل خمس مواقع لتعلم البرمجة </a>
            <a href="#">افضل خمس مواقع لتعلم البرمجة </a>
            <a href="#">افضل خمس مواقع لتعلم البرمجة </a>
            <a href="#">افضل خمس مواقع لتعلم البرمجة </a>
        </div>
        <h6>ذات صلة:</h6>
        <div class="related_questions">
            <a href="#">لمن قوقو مشا ناميك جا راجع فاضي ليه و م جاب معاهو بيض التنين؟</a>
            <a href="#">بيجيتا دا مالو جلحاتو كبار؟</a>
        </div>
        </div>
    </div>
</section>
