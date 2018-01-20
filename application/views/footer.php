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
    //    tags input
    var callback = function(data){
      var vote = $.ajax({
        url:"<?php echo base_url('/Home/votes_query') ; ?>",
        method:"POST",
        data:{id: data.id, up: data.upvoted, down: data.downvoted, star: data.starred}
      });
      vote.done(function(msg){
        alert('its works');
      })
      vote.fail(function(jx,msg){
        alert("i'm bad as fuck in javascript"+msg);
      });
    };
    <?php
        if(!isset($vister))
        {
            echo"
            $('#topic').upvote({
              upvoted:".$question_vote['upvoted'].",
              downvoted:".$question_vote['downvoted'] .",
              starred:". $question_vote['star'] .",
              count:". $question_vote['votes_count'].",
              callback:callback});
            ";
        }else{
          echo"
          $('#topic').upvote({
            upvoted:0,
            downvoted:0,
            starred: 0,
            count:". $question_vote."
          });
          ";
        }
    ?>
      var comment_callback = function(data){
        var question_id = $("#question_id").val()
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
      if(!isset($vister))
      {
      if(isset($user_vote) and $user_vote != false)
      {
            // in case there is a votes
              echo "
              $('#comment_".$user_vote->comment_id."').upvote({
                upvoted:".$user_vote->upvote.",
                downvoted:".$user_vote->downvote.",
                starred:".$user_vote->star.",
                count:".$user_vote->votes.",
                callback:comment_callback
              }); ";
        }
        if (isset($comments_voted) and $comments_voted != false)
        {
            foreach($comments_voted as $comment)
            {
              // echo $comment_id->id;
              echo "
              $('#comment_".$comment->id."').upvote({
                upvoted:$comment->upvote,
                downvoted:$comment->downvote,
                starred:$comment->star,
                count:".$comment->votes.",
                callback:comment_callback
              }); ";
            }
        }
        if (isset($unvoted_comments_id) and $unvoted_comments_id != false)
        {
          foreach($unvoted_comments_id as $comment_id)
          {
            echo "
              $('#comment_".$comment_id->id."').upvote({
                upvoted:0,
                downvoted:0,
                starred:0,
                count:0,
                callback:comment_callback
              })
            ";
          }
        }
      }else{
        if (isset($comments_voted) and $comments_voted != false)
        {
          // var_dump($comments_voted);
            foreach($comments_voted as $comment)
            {
              // echo $comment_id->id;
              echo "
              $('#comment_".$comment->id."').upvote({
                upvoted:0,
                downvoted:0,
                starred:0,
                count:".$comment->votes."
              }); ";
            }
        }
      }
       ?>
</script>

</body>
</html>
<?php
    // var_dump($unvoted_comments_id);
    // foreach($unvoted_comments_id as $comment)
    // {
    //   echo $comment->id ;
    // }

 ?>
