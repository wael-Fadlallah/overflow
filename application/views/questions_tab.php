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
            <a href='Ask' class="addQ">اضف سوأل</a>
        </div>
        <div class='q_body'>
            <div class='row'>
                    <?php
                        for($i=0;$i<10;$i++)
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
                            <a href='#' class='title'><h3>نص عربي نص عربي نص عربي نص عربي نص عربي </h3></a>
                            <div class='clearfix'></div>
                            <div class='row'>
                                <div class='col-md-5 q_tags'>
                                    <span><a href='#'>tag</a></span>
                                    <span><a href='#'>tag</a></span>
                                    <span><a href='#'>tag</a></span>
                                </div>
                                <div class='col-md-6 q_started'>
                                    <label>سئل قبل <span> 0 </span>دقايق من قبل  <span> مجهول </span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='hr'><hr></div>
                </div> 
                <div class='clearfix'></div>
                            ";
                        }
                    ?>
                   
            </div>
        </div>
    </div>
</section>