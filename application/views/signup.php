<section class="login" style="padding-top:110px;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-push-4">
                <div class="login-form">
                    <?php   echo validation_errors();    ?>
                    <?php   echo form_open();    ?>
                <div class="form">
                    <div class="form-group">
                        <label>اسم المستخدم</label>
                        <input type="text" name="username" class="form-control" placeholder="W.fadlallah">
                    </div>
                    <div class="form-group">
                        <label>الايميل</label>
                        <input type="text" name='email' class="form-control" placeholder="W.fadlallah@gmail.com">
                    </div>
                    <div class="form-group">
                        <label>كلمة السر</label>
                        <input type="text" name='password' class="form-control" placeholder="*********">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="" value="تسجيل الدخول">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
