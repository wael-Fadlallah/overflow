<footer>
    <div class="container">
            <div class='col-md-2'>
        <img src="#" width="100" height="100">
    </div>
    <div class='col-md-3'>
        <ul class="">
            <li class="hr"><!--<a href="#">-->سودان اوفرفلو<!--</a>--></li>
            <li><a href="#">عن الموقع</a></li>
            <li><a href="#">شروط استخدام الموقع</a></li>
            <li><a href="#">اتصل بنا</a></li>
        </ul>
    </div>
    <div class='col-md-3'>
        <ul>
            <li class="hr">المطورين</li>
            <li><a href="#">من نحن</a></li>
            <li><a href="#">حلول برمجية</a></li>
        </ul>
    </div>
    <div class='col-md-3'>
        <ul>
            <li class="hr">الأحصائيات</li>
            <li><span>0</span> مستخدم</li>
            <li><span>0</span> سوأل</li>
            <li><span>0</span> اجابة</li>
        </ul>
    </div>
    <div class="clearfix"></div>
    <div class="rights">
        <label for="">جميع الحقوق محفوظة </label>
    </div>
    </div>
</footer>
<script src="<?php echo base_url('/js/jquery-3.2.1.min.js');?>"></script>
<script src="<?php echo base_url('/js/jquery-ui.js');?>"></script>
<script src="<?php echo base_url('js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('asset/tinymce/js/tinymce/tinymce.min.js');?>"></script>
<!--<script src="<?php echo base_url('asset/bootstrap-tagsinput-latest/src/bootstrap-tagsinput-angular.js');?>"></script>-->
<!--<script src="<?php echo base_url('asset/bootstrap-tagsinput-latest/src/bootstrap-tagsinput.js');?>"></script>-->
<script src="<?php echo base_url('js/tokenize2.min.js');?>"></script>
<script src="<?php echo base_url('js/jquery.upvote.js');?>"></script>
<script src="<?php echo base_url('js/pulgin.js');?>"></script>
<!--post editor -->
<script>
	//$("#my_answer").show();
    //  comments ajax function
    $("#insert_comment").click(function(){
        var comment = $("#lp-message").html();
        var q_id    = $("#question_id").val();
//        console.log(comment);
//        console.log(q_id);
        var request = $.ajax({
            url:"<?php echo base_url('/Home/insert_comment') ?>",
			beforeSend:function(xhr){
				$("#insert_comment").addClass("btn-loading");
				$(".form-group #loading").addClass("comment_loading");
			},
            method:"POST",
            data:{post:comment,id:q_id}
        });
        request.done(function(msg){
            $("#my_answer").show();
			var my_comment = $("#comment");
			my_comment.html(msg);
			//$("#insert_comment").removeClass("btn-loading");
			$("#comment_box").delay(100000).hide();
//            alert("Done");

        })
    });
</script>
<script>
    tinymce.init({
        selector: '#text',
        height:250,
        plugins:'link codesample image lists hr',
        menubar:false,
        toolbar:'bold italic | link codesample imageupload | numlist bullist hr | alignleft, aligncenter, alignright, alignjustify | undo redo',
        setup: function(editor) {
            var inp = $('<input id="tinymce-uploader" type="file" name="pic" accept="image/*" style="display:none">');
            $(editor.getElement()).parent().append(inp);

            inp.on("change",function(){
                var input = inp.get(0);
                var file = input.files[0];
                var fr = new FileReader();
                fr.onload = function() {
                    var img = new Image();
                    img.src = fr.result;
                    editor.insertContent('<img src="'+img.src+'"/>');
                    inp.val('');
                }
                fr.readAsDataURL(file);
            });

            editor.addButton( 'imageupload', {
      icon: 'image',
                onclick: function(e) {
                    inp.trigger('click');
                }
            })
        editor.on("keyup", function(){
            $('#lp-message').html(tinymce.activeEditor.getContent());
        })
        },
        default_link_target:'_blank',
        target_list:false,
        codesample_dialog_width:'500',
        codesample_dialog_height:'300',
        codesample_languages:false,
        file_browser_callback_types:'image',
        branding:false,
        statusbar:false,

      });

</script>
<!--disable Enter submit on forms for tags functionlity-->
<script>
    $('form').on('keyup keypress', function(e) {
              var keyCode = e.keyCode || e.which;
              if (keyCode === 13) {
                e.preventDefault();
                return false;
              }
        });
    //    tags input
    $('.tags').tokenize2({
        dataSource: "<?php   echo base_url('/Home/search_tags');    ?>",
        tokensAllowCustom:true,
        delimiter: [' ']
    });
    var callback = function(data){
      var vote = $.ajax({
        url:"<?php echo base_url('/Home/votes_query') ; ?>",
        method:"POST",
        data:{id: data.id, up: data.upvoted, down: data.downvoted, star: data.starred}
      });
      console.log("up is :"+data.upvoted);
      console.log("down is :"+data.downvoted);
      vote.done(function(msg){
        alert('its works');
        // console.log("up is :"+msg.upvote);
        // console.log("down is :"+msg.downvote);
      })
      vote.fail(function(jx,msg){
        alert("i'm bad as fuck in javascript"+msg);
      });
    };
    $('#topic').upvote({
      upvoted:<?php echo $upvoted ; ?>,
      downvoted:<?php echo $downvoted ; ?>,
      starred:<?php echo $star ; ?>,
      count:<?php echo $votes_count ; ?>,
      callback:callback});
    $('#comment').upvote({count:5});
</script>

</body>
</html>
