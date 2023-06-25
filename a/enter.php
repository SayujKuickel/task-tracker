<?php
include '../connect.php';
$i = 1;
$taskTitle = 'lorem ipsum';
$taskDate = date("Y-m-d");
$taskDesc = array(
  'Neque porro quisquam est qui dolorem ipsum quia dolor tetur, adipisci velit.<a  class="yt" href="https://youtube.com/sayuj">yt</a>',
  'Proin tempus lorem eu dolor hendrerit bibendum. eget sapienrtise lobortis pharetra.<a class="yt"  href="https://youtube.com/sayuj">yt</a>',
  'Sed ultricies metus id turpis viverra imperdiet.  quam, nec sceleris, vestibulum.  <a class="yt"  href="https://youtube.com/sayuj">yt</a>',
  'Cras dapibus in ante a efficitur. Proin commodo iaculis utpat magna sagittis vitae. Aliquam pretium orci sit amet.<a  class="yt" href="https://youtube.com/sayuj">yt</a>',
  'Vivamus placerat rutrum fermentum. Pellentesque  ut condimentum in, sollicitudin eget metus.<a  class="yt" href="https://youtube.com/sayuj">yt</a>'
);
while ($i <= 5) {
  $desc = isset($taskDesc[$i - 1]) ? $taskDesc[$i - 1] : '';

  $sql = "INSERT INTO `task` (`title`, `date`, `task`) VALUES ('$taskTitle', '$taskDate', '$desc')";
  $conn->query($sql);

  $i++;
}
header("Location: ../index.php");
?>