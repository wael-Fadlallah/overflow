<!-- <?php var_dump($user_questions); ?> -->
<section class="profile">
  <div class="container main_container">
       <div class="row rtl">
           <div class="col-lg-6 right">
               <div class="username"><?php echo $name ?></div>
               <div class="user_job"><?php echo $career ?></div>
               <img class="profile_image" src="<?php echo base_url('images/profiles/default/man.png'); ?>">
               <div class="about_user"><?php echo $bio ?></div>
               <div class="edit_image"><button class="btn">تعديل</button></div>
           </div>
           <div class="col-lg-6 left">
               <i class="icons fa fa-clock"></i><span><?php echo $join_date ?></span><br>
               <i class="icons fa fa-briefcase "></i><span>جامعة السودان للعلوم و التكنولوجيا</span><br>
               <i class="icons fa fa-eye"></i><span>200 زيارة لهذا البروفايل</span><br>
               <i class="icons fa fa-thumbs-up"></i><span>100 اعجاب لهذا البروفايل</span><br>
               <i class="icons fa fa-map-marker"></i><span><?php echo $city ?></span><br>
               <i class="icons fa fa-circle" id="points"></i><span>289 نقطة</span>
           </div>
       </div>
       <div id="user_profile_tags">
           <h3>اقسام مستعلمة بواسطة محمد:</h3>
           <div class="tag_box">
               <a href="#" class="tag">C#</a><span class="tag_counter">189</span><span>مشاركة</span>
           </div>
           <div class="tag_box">
               <a href="#" class="tag">PHP</a><span class="tag_counter">18</span><span>مشاركة</span>
           </div>
           <div class="tag_box">
               <a href="#" class="tag">CSS</a><span class="tag_counter">60</span><span>مشاركة</span>
           </div>
           <div class="tag_box">
               <a href="#" class="tag">Perl</a><span class="tag_counter">39</span><span>مشاركة</span>
           </div>
       </div>
       <h3 class="text-center rtl label">سئل بواسطة محمد:</h3>
         <?php
              if(isset($user_questions))
              {
                // var_dump($user_questions);
                foreach ($user_questions as $title => $node) {
                  // echo $title['title'];
                  echo "
                  <div class='row rtl user_profile_questions'>
                      <div class='col-lg-3 offset-lg-2'>
                         <div class='row'>
                              <div class='col-lg-4 answers'>
                              <i class='answer_icon fa fa-check'></i>
                              <span class='answer_conuter'>
                              ".$node['count']."
                              </span>
                              </div>
                             <div class='col-lg-4 votes'>
                              <i class='vote_icon_up fa fa-angle-up'></i>
                              <i class='vote_icon_down fa fa-angle-down'></i>
                              <span class='vote_conuter'>
                              ".$node['votes']."
                              </span>
                              </div>
                             <div class='col-lg-4 views'>
                              <i class='view_icon fa fa-eye'></i>
                              <span class='view_conuter'>30</span>
                              </div>
                          </div>
                      </div>
                      <div class='col-lg-6'>
                        $title
                      </div>
                  </div>

                  ";
                }
              }
         ?>
       </div>

</section>
