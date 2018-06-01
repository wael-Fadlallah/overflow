<?php
	$commentd = false;
   //  echo '<pre>';
   // print_r($comments_voted);
   //  echo '</pre>';
?>
   <section class="view_question" style="padding-top: 70px;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 question_header">
                <h2><?php   echo $title    ?></h2>
<!--                <a href='<?php echo base_url('Home/Ask'); ?>' class="addQ">اضف سوأل</a>-->
            </div>
            <div class="clearfix"></div>
            <div class="hr"></div>
        </div>
        <div class="row the_question">
            <div class="col-md-8">
                <div class="col-md-2" style="margin-top: 5%;">
                    <div id="topic" class="upvote" data-id="<?php echo $id; ?>">
                        <a class="upvote"></a>
                        <span class="count">0</span>
                        <a class="downvote"></a>
                        <a class="star"></a>
                    </div>
                </div>
                <div class="col-md-10 post">
                   <input type="text" value="<?php echo $id ?>" id="question_id" hidden disabled>
                    <p class='lead'>
                        <?php   echo $post;    ?>
                    </p>
                    <div class="tags">
                        <?php
                            $tags = explode(',',$tags);
//                            var_dump($tags);
                            foreach($tags as $key=>$tag)
                            {
                                echo "<span>";
                                echo $tag;
                                echo "</span>";
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="about-asker">
                    <div class="box">
                       <?php   echo" <img src=' ".base_url('images/profile/profile.png')."'>";    ?>
                       <span class='h4'><?php   echo $name ;   ?></span>
                       <div class="hr"></div>
                       <div>
                           <span>قبل : 5 دقائق</span><div class="hr"></div>
                           <span>المشاهدات : 5 مرات</span><div class="hr"></div>
                           <span>اخر ظهور  : اليوم </span>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="hr">
<div class='row'>
<div class='col-md-8'>

        <?php
            foreach($comments as $comment)
            {
            	if($comment['user_id'] == $this->session->userdata('id'))
            	{
//            		echo "user is commentd";
            		$commentd = true ;
            	}
                echo "
                    <div class='row'>
                    <div class='col-md-8 answer' style='display:flex;'>
                        <div class='col-md-2'>
                            <div id='comment_".$comment['id']."' data-id=".$comment['id']." class='upvote'>
                                <a class='upvote'></a>
                                <span class='count'>0</span>
                                <a class='downvote'></a>
                                <a class='star'></a>
                            </div>
                        </div>
                        <div class='col-md-10'>
                            <div style='margin-bottom:10px;'>
                                ".$comment['comment']."
                            </div>
                       <div class='answer_box'> تمت الاجابة قبل 0 من قبل مجهول </div>
                        </div>
                    </div>
                </div>
                <hr>
                ";
            }
        ?>
<div class='row' id='my_answer' style='display:none'>
    <div class='col-md-8 answer'>
        <div class='col-md-2'>
            <div id='topic' class='upvote'>
                <a class='upvote'></a>
                <span class='count'>0</span>
                <a class='downvote'></a>
                <a class='star'></a>
            </div>
        </div>
        <div class='col-md-10'>
            <div style='margin-bottom:10px;' id='comment'>

            </div>
       <div class='answer_box'> تمت الاجابة قبل 0 من قبل مجهول </div>
        </div>
    </div>
</div>
		<?php
//			var_dump($commentd);
			if(!$commentd)
			{
				if(!isset($vister))
				{
				echo "
						<div class='row' id='comment_box'>
								   <span class='h3' style='display:block;'>  اجب على السوال :</span>
								   <div class='col-md-10'>
										    <div class='form-group'>
										    			<div id='loading' class=''></div>
											        <textarea name='post' id='text'></textarea>
											        <div id='lp-message'></div>
											        <input type='submit' value='نشر السوال' id='insert_comment'>
											   </div>
									 </div>
						</div>
				";
				}
			}
		?>
    </div>
</div>
</div>
</section>
