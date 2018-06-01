<section class="login" style="padding-top:110px;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-push-4">
                <div class="login-form">
                    <?php   echo validation_errors();    ?>
                    <?php   echo form_open();    ?>
                    <div class="form-group">
                        <lable>الايميل : </lable>
                        <input type="text" class="form-control" name='email' placeholder='you@example.com'>
                    </div>
                    <div class="form-group">
                        <lable>كلمة السر</lable>
                        <input type="text" class="form-control" name='password' placeholder='**********'>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="" value="تسجيل الدخول">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
