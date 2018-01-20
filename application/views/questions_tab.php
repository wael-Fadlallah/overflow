<?php
//echo '<pre>';
//print_r($question);
//echo '</pre>';
if(isset($vister))
{
  $question_view = '/Welcome/display_question?id=';
}else{
  $question_view = '/Home/display_question?id=';
}
?>
<section class='questions'>
    <div class='container'>
        <div class='q_header'>
            <label class='h3'>الاسئلة الاكثر شيوعا</label>
            <ul class = 'q_cats'>
                <li class='active'>مهمة</li>
                <li>مميزة</li>
                <li>جديدة</li>
                <li>اسبوعيا</li>
                <li>شهريا</li>
            </ul>
            <a href='<?php echo base_url('Home/Ask'); ?>' class="addQ">اضف سوأل</a>
        </div>
        <div class='q_body'>
            <div class='row'>
                    <?php
                function print_tags($tags)
                {
                    $tag = explode(',',$tags);
                    foreach($tag as $tag)
                    {
                        print "<span> $tag </span>" ;
                    }
                }
                foreach($question as $question)
                        {
                            echo "
                <div class='col-md-8'>
                    <div class='question'>
                        <div class='q_stats'>
                            <div class='votes col-sm-4'>
                                <div class='mini_counts'>
                                    <span>".$question['votes']."</span>
                                </div>
                                <div>صوت</div>
                            </div>
                            <div class='answers col-sm-4'>
                                <div class='mini_counts'>
                                    <span>".$question['comments']."</span>
                                </div>
                                <div>اجابة</div>
                            </div>
                            <div class='views col-sm-4'>
                                <div class='mini_counts'>
                                    <span>0</span>
                                </div>
                                <div>مشاهدة</div>
                            </div>
                        </div>
                        <div class='q_sammary'>
                            <a href='".base_url($question_view).$question['id']."' class='title'><h3>".$question['title']." </h3></a>
                            <div class='clearfix'></div>
                            <div class='row'>
                                <div class='col-md-5 tags'>
                                    ";
                            echo print_tags($question['tags']) ;
                                echo "
                                </div>
                                <div class='col-md-6 q_started'>
                                    <label> <span> ";
                                    echo $question['date'];
                                    echo " </span> من قبل  <span> ".$question['owner']." </span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='hr'></div>
                </div>
                <div class='clearfix'></div>
                            ";
                        }
                    ?>

            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
