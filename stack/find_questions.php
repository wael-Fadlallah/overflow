

<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="GallerySoft.info" />
      <link href="css/css.css" rel="stylesheet" type="text/css" />

	<title>Untitled 1</title>
</head>

<body dir="rtl">


<?php
$question_table = $_POST['tag_question'];
          include ('go/connection.php');
          //echo $question_table;   
          $sql = "SELECT * FROM `$question_table`;";
          $result = $conn->query($sql);
          if ($result -> num_rows > 0)
          {
              echo "<table>";
            while ($question = mysqli_fetch_assoc($result))
            {
            
                $questions = $question['question'];
                $user = $question['user'];
                $title = $question['question_title'];
                
                echo "
                 <tr>
                <td>سؤال بواسطة : $user</td>
                </tr> 
                <tr>
                <td style='color:blue'>$title</td>
                </tr> 
                <tr>
                <td>$questions</td>
                </tr>
                <tr>
                <td><hr></td>
                </tr>";
                
            }
            echo "</table>";
          }
          else
          {
              echo "<h5 style='color:red'> لاتوجد أسئلة في هذا القسم</h5>";
          }
?>    
    
    
</body>
</html>