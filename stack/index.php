
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="GallerySoft.info" />
      <link href="css/css.css" rel="stylesheet" type="text/css" />

	<title>Untitled 1</title>
</head>

<body >

<form method="POST" action="find_questions.php">
    <table style="width:100%">
      <tr>
      <td><button class="tag" value='php_question'   name='tag_question'>php</button>
          <?php
          include ('go/connection.php');
          $sql = "SELECT * FROM `php_question`;";
        $result = $conn->query($sql);
          if ($result -> num_rows > 0)
          {
               $num = $result -> num_rows ;
              echo "× $num";
          }
          else
          {
         echo"<span style='color:red; font'> لاتوجد أسئلة في هذا القسم</span>";
          }
          ?>
    
      <td><button class="tag" value='java_question'  name='tag_question'>java</button>
           <?php
          include ('go/connection.php');
          $sql = "SELECT * FROM `java_question`;";
        $result = $conn->query($sql);
          if ($result -> num_rows > 0)
          {
              $num = $result -> num_rows ;
              echo "× $num";
          }
          else
          {
             echo"<span style='color:red'> لاتوجد أسئلة في هذا القسم</span>";
          }
          ?>
      <td><button class="tag" value='HTML_question' name='tag_question'>HTML</button>
           <?php
          include ('go/connection.php');
          $sql = "SELECT * FROM `HTML_question`;";
        $result = $conn->query($sql);
          if ($result -> num_rows > 0)
          {
              $num = $result -> num_rows ;
              echo "× $num";
          }
          else
          {
              echo "<span style='color:red'> لاتوجد أسئلة في هذا القسم</span>";
          }
          ?>
          </td>
    </tr>
    <tr>
    <td>a widely used, high-level, dynamic, object-oriented and interpreted scripting language primarily designed for server-side web 
    </td>    
    <td>Java (not to be confused with JavaScript or JScript) is a general-purpose object-oriented programming language designed to be used in 
    </td>  
    <td>
    he standard markup language used for structuring web pages and formatting content. HTML describes the structure of a website 
    </td>
    </tr>
    </table>
</form>

</body>
</html>