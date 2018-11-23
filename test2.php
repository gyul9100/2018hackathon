<html>


  <title> 화장실 평가 </title>
  <body>
      <meta charset="UTF-8">
      <font size="100" color="blue">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;어디 화장실 가지?
      </font>
      <br>
      <br>
      <br>
      <br>
      <font size="60" color="black">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;화장실 리스트
      </font>

      <br>
      <br>

    

      <br />
      <br />
      <br />


<form method= "post">
<input type = "text" name = "st_name">
<input type = "submit">
</form>

<?php 

$name = $_POST['st_name'];
$conn = mysqli_connect('localhost', 'user', 'hyun9100', 'toilet') or die ("실패입니다.");
mysqli_select_db($conn,'toilet');

$result = mysqli_query($conn,"SELECT * FROM toilet.toilet_Record Where st_name LIKE '%$name%' limit 5");

while($row = mysqli_fetch_assoc($result)){
    $url = $row['st_name'];
    echo '<h1><a href="'.$url.'.html">'.$row['st_name'].'</h1>';
    echo '<h2>'.$row['rate'],' ', $row['ratenum'],' ', $row['str'].  '</h2>';
    //echo "<script>window.open('".$url.".html"."');</script>";
    echo '<img style="width:40;height:40;" src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
}

?>

  </body>
</html>
