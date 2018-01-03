
<?php
//    if(!isset($_GET['status']))
//    {
//        echo "
//        <section class='preAsk'>
//    <div class='container'>
//        <div class='box'>
//            <span class='h1'>كيف تسأل !</span>
//            <p class='lead'>مرحبا بك في سودان اوفرفلو ! </p>
//            <span class='h2'>ابحث</span>
//            <p class='lead'>ابحث عن سواك اذا اتسأل قبل كدا اشان توفر عليك وعلينا</p>
//            <input type='text' width='100%'>
//            <br>
//            <span class='h2'>خليك موضوعي</span>
//            <p class='lead'>
//                الموقع مقسم لي اقسام اشان سوالك يتسئل في محلو ويتجاوب من قبل المتخصصين
//            </p>
//            <span class='h2'>خليك واضح</span>
//            <p class='lead'> خلي سوالك موجه وبسيط </p>
//            <span class='h2'>خليك منفتح </span>
//            <p class='lead'> الاجوبة ما دايما بتكون الاجوبة اللي انت متوقعها , ما معناها الجواب غلط اطلب توضيح اكتر او مرجعية لجدي تصل لي الجواب المناسب معاك </p>
//            <span class='h3'>واتذكر .. نحن عايزين نساعدك .. </span>
//        </div>
//        <br>
//        <div class='col-md-8'>
//        <input type='checkbox' name='okay'><span class='h4'> شكرا , انا مستعد اني اسال </span>
//        </div>
//        <div class='com-md-4'>
//            <a href='".base_url('Home/ask/?status="ask"')."'><button class='btn btn-danger'>متابعة</button>
//        </div>
//    </div>
//</section>
//        ";
//    }else{
//        
//    }
?>
<!--
<script>
      tinymce.init({
        selector: '#text',
        toolbar: 'undo redo | styleselect | bold italic | link image',
      });
</script>
-->
<?php
    if(isset($_POST['send']))
    {
        echo '<pre>';
        echo $_POST['title'];
        echo $_POST['post'];
        echo implode(',',$_POST['tags']);
        echo '</pre>';
    }
?>

<section class="ask_question">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php echo validation_errors(); ?>
                <?php echo form_open(); ?>
                   <div class="form-group">
                      <div class="_title">
                          <label>العنوان</label>
                      </div>
                       <input class="title" type="text" name='title'>
                   </div>
                   <div class="clearfix"></div>
                   <div class="form-group">
                       <textarea name="post" id="text"></textarea>
                       <div id="lp-message"></div>
                   </div>
                   <div class="value"></div>
                   <div class="form-group">
                       <span class="h2">الاقسام : </span>
<!--                       <input type="text" class="tags form-control" >-->
                          <select class="tags" name="tags[]" multiple>
                        </select>
                   </div>
                   <div class="form-group">
                       <input type="submit" name="send" value="نشر السوال">
                   </div>
                </form>
            <div class="col-md-4">
                4
            </div>
        </div>
    </div> 
</section>
