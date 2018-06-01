<?php
if(isset($error))
{
    echo '<pre>';
    print_r($error);
    echo '</pre>';
}
?>
<section class="complate_account" style="padding-top:110px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-push-3 profile_box">
               <?php   echo form_open();    ?>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                           <lable>رقم الهاتف :</lable>
                            <input name="phone" type="text" class="form-control" placeholder='0999999999'>
                        </div>
                        <div class="form-group">
                            <lable>العمر : </lable>
                            <input name="age" type="text" class='form-control'>
                        </div>
                        <div class="form-group">
                            <lable>المهنة :</lable>
                              <fieldset class="switcher">
                                <div>
                                    <label for="radio-1">طالب</label>
                                    <input type="radio" name="career" id="radio-1" value="طالب">
                                </div>
                                <div>
                                    <label for="radio-2">موظف</label>
                                    <input type="radio" name="career" id="radio-2" value="موظف">
                                </div>
                                <div>
                                    <label for="radio-3">مستقل</label>
                                    <input type="radio" name="career" id="radio-3" value="مستقل">
                                </div>
                              </fieldset>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="المتابعة">
                        </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                       <div class="profile-img">
<!--                           <img src="<?php   echo base_url('images/profile.png');    ?>" alt="profile">-->
                          <?php
                           if(isset($profile))
                           {
                                echo "<img src= ". base_url("images/profiles/default/$profile") . " alt='profile'>";
                           }else{
                               echo "<img src= ". base_url("images/profiles/default/man.png") . " alt='profile'>";
                           }
                           ?>
                           <form method="post" action="#" id="insert_profile" enctype="multipart/form-data">
                               <input type="file" class="profile" id="profile_image" name='userPic'>
                               <!-- <input type="submit" value=" " id="send_photo"> -->
                           </form>
                       </div>
                       <label class="btn btn-info" id="profile_selecter" onclick="$('insert_profile').submit()">اختيار صورة شخصية</label>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
