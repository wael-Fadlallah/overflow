<?php
include ('connection.php');
$tag = $_POST['tag'];
$question = $_POST['question'];
$title = $_POST['title'];

$user = "malik";

if ($tag == "php")
{
    $tag_table='php_question';
}
if ($tag == "java")
{
    $tag_table='java_question';
}

if ($tag == "HTML")
{
    $tag_table='HTML_question';
}

$sql = "INSERT INTO `$tag_table` (`id`, `user`,`question_title`, `question`) VALUES (NULL, '$user','$title' ,'$question');";
$result = $conn->query($sql);
if ($result == true)
{
    echo "malik";
}
else
{
    echo "error";
}
?>