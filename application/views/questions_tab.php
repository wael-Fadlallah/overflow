<?php  
//echo '<pre>';
//print_r($question);
//echo '</pre>';
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
                function time_elapsed_string($datetime, $full = false) {
                    $now = new DateTime;
                    $ago = new DateTime($datetime);
                    $diff = $now->diff($ago);

                    $diff->w = floor($diff->d / 7);
                    $diff->d -= $diff->w * 7;

                    $string = array(
                        'y' => 'سنة',
                        'm' => 'شهر',
                        'w' => 'اسبوع',
                        'd' => 'يوم',
                        'h' => 'ساعة',
                        'i' => 'دقيقة',
                        's' => 'ثانية',
                    );
                    foreach ($string as $k => &$v) {
                        if ($diff->$k) {
                            if($diff->$k < 1){$v = $diff->$k . ' ' . $v ;}
                            if($diff->$k > 1)
                            {
                                $v = $diff->$k . ' ' ;
                                if($diff->$k == $diff->s){$v .= 'ثواني';}
                                if($diff->$k == $diff->i){$v .= 'دقيقة';}
                                if($diff->$k == $diff->h && $diff->$k != $diff->d){$v .= 'ساعات';}
                                if($diff->$k == 2 && $diff->$k == $diff->d){$v = 'يومين';}
                                if($diff->$k > 2 && $diff->$k == $diff->d){$v .= 'ايام';}
//                                if($diff->$k == $diff->d){$v .= 'ايام';}
                            }
//                            echo '<pre>';
//                            var_dump($v);
//                            echo '</pre>';
                        } else {
                            unset($string[$k]);
                        }
                    }

                    if (!$full) $string = array_slice($string, 0, 1);
                    return $string ? implode(', ', $string) . ' ' : 'لحظات';
                }
                foreach($question as $question)
                        {
                            echo "
                <div class='col-md-8'>
                    <div class='question'>
                        <div class='q_stats'>
                            <div class='votes col-sm-4'>
                                <div class='mini_counts'>
                                    <span>0</span>
                                </div>
                                <div>صوت</div>
                            </div>
                            <div class='answers col-sm-4'>
                                <div class='mini_counts'>
                                    <span>0</span>
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
                            <a href='".base_url('/Home/display_question?id=').$question->id."' class='title'><h3>$question->title </h3></a>
                            <div class='clearfix'></div>
                            <div class='row'>
                                <div class='col-md-5 tags'>
                                    ";
                            echo print_tags($question->tags) ;
                                echo "
                                </div>
                                <div class='col-md-6 q_started'>
                                    <label>سئل قبل <span> ";
                                    echo time_elapsed_string($question->date);
                                    echo " </span> من قبل  <span> $question->name </span></label>
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