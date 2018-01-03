
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="GallerySoft.info" />
      <link href="css/css.css" rel="stylesheet" type="text/css" />

	<title>Untitled 1</title>
</head>

<body dir="rtl">
<center>    إضافة سؤال
</center>
 <br> الوسوم
    <form action="go/go_ask.php" method="POST">
    <table style="width:100%">
     <tr>
         <td><div class="tag"><input type="radio" name="tag" value='php'/>php</td>
         <td><div class="tag"><input type="radio" name="tag" value='java'/>java</td>
         <td><div class="tag"><input type="radio" name="tag" value='HTML'/>HTML</td>
        </tr>
    </table>
       <p></p>
        عنوان السؤال
        <textarea style='width:99%; height:20px' placeholder="ضع سؤالك هنا" name="title"> 
        </textarea>
        وصف السؤال
        <textarea style='width:99%; height:100px' placeholder="ضع سؤالك هنا" name="question"> 
        </textarea>
        <center>
         <input style=" width:25%" type="submit"  value="نشر السؤال" name="add_std_to_class" class="bottom"/>
    </center>
   
</form>
 
</body>
</html>