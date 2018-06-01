<div id="footer">
    <div class="row ">
    <div class="col-lg-4">
        <span><a href="#" class="link">عن الموقع</a></span>
        <span><a href="#" class="link">شروط الاستخدام </a></span>
        <span><a href="#" class="link">اتصل بنا</a></span>
    </div>
    <div class="col-lg-4">
        <span id="dev">المطورين</span>
       <span><a href="#" class="link">من نحن</a></span>
            <span><a href="#" class="link">حلول برمجية</a></span>
    </div>
    <div class="col-lg-4">
        <span class="stats">300 مستخدم</span>
        <span class="stats">400 سوأل</span>
        <span class="stats">377 اجابة</span>
        </div>
    </div>
    <div class="row" id="rights_logo">
            <div id="logo_box"><img src="<?php echo base_url('images/logo.png'); ?>" / id="footer_logo"></div>
            <div id="rights">الحقوق محفوظة</div>
</div>
</div>
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
<script>
$('.tags_input').tokenize2({
    dataSource: "<?php   echo base_url('/Home/search_tags');    ?>",
    tokensAllowCustom:true,
    delimiter: [' ']
});
</script>

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
    var callback = function(data){
        var vote = $.ajax({
          url:"<?php echo base_url('/Home/votes_query') ; ?>",
          method:"POST",
          // dataType:"text",
          data:{id: data.id, up: data.upvoted, down: data.downvoted, star: data.starred}
        });
        // console.log(data);

        // return the counter when done
        vote.done(function(count){
          alert('its works'+count);
        })
        vote.fail(function(jx,msg){
          alert("i'm bad as fuck in javascript |"+jx+msg);
        });
    };
    <?php
            if(isset($question_vote))
            {
              echo"
              $('#topic').upvote({
                upvoted:".$question_vote['upvoted'].",
                downvoted:".$question_vote['downvoted'] .",
                starred:". $question_vote['star'] .",
                count:". $question_vote['count'].",
                callback:callback});
              ";
            }
    ?>
      var comment_callback = function(data){
        var question_id = $("#question_id").val()
        console.log(data)
        var requ = $.ajax({
          url:"<?php echo base_url('/Home/votes_query') ; ?>",
          method:"POST",
          data:{id:data.id, q_id:question_id ,up:data.upvoted, down:data.downvoted , star:data.starred}
        })
        requ.done(function(msg){
          alert('comment works');
        });
        requ.fail(function(jx,err){
          alert('error'+err)
        });
      };
      <?php
          if(isset($user_vote) && $user_vote != false)
          {
              echo "
              $('#comment_$user_vote->comment_id').upvote({
                upvoted:$user_vote->upvote,
                downvoted:$user_vote->downvote,
                starred:$user_vote->star,
                count:$user_vote->votes,
                callback:comment_callback
              });
                ";
                // declare a var to make sure not to repeat this id vote
                $comment_voted = $user_vote->comment_id;
          }else{
             $comment_voted = false ;
          }
          if(isset($unvoted_comments_id))
          {
            foreach($unvoted_comments_id as $comment)
            {
              // make sure is'nt already voted
              if($comment_voted != $comment->id)
              {
              echo "
                $('#comment_$comment->id').upvote({
                  upvoted:0,
                  downvoted:0,
                  starred:0,
                  count:0,
                  callback:comment_callback
                });
              ";
              }
            }
          }
      ?>
</script>
<!-- complate account ajax function -->
<script>
  $(document).ready(function(e){
    $('#profile_selecter').on('click',function(){
      $("#profile_image").click();
    });
    $('#profile_image').on('change',function(){
      // $('#insert_profile').submit(function(e){
        // e.preventDefault();
        // console.log(this);
        // delay(10000);
        var formData = new FormData();
        formData.append('userPic',$('#profile_image')[0].files[0]);
        $.ajax({
          url:"<?php echo base_url('Home/insert_image');?>",
          type:"POST",
          data:formData,
          contentType:false,
          cache:false,
          processData:false,
          success:function(data){
            console.log("it works"+data.error);
          }
        })
      // });
    });


  });
</script>

</body>
</html>
