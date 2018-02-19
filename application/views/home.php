<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <style type="text/css">
    .prot{
      width:320px;
      height:280px;

    }
    .div{
      border:2px solid yellow;
    }
    .email{
      display: none;
    }
  </style>
</head>
<script>
b = true;
function sortList() {
  var i, switching, b, shouldSwitch;
  switching = true;
  while (switching) {
    switching = false;
    b =  document.getElementsByClassName("div");
    for (i = 0; i < (b.length - 1); i++) {
      shouldSwitch = false;
      if (b[i].innerHTML.toLowerCase() > b[i + 1].innerHTML.toLowerCase()) {
        shouldSwitch= true;
        break;
      }
    }
    if (shouldSwitch) {
      b[i].parentNode.insertBefore(b[i + 1], b[i]);
      switching = true;
    }
  }
  b = false;
}
function sortList1() {
     var i, switching, b, shouldSwitch;
  switching = true;
  while (switching) {
    switching = false;
    b =  document.getElementsByClassName("div");
    for (i = 0; i < (b.length - 1); i++) {
      shouldSwitch = false;
      if (b[i].id.toLowerCase() > b[i + 1].id.toLowerCase()) {
        shouldSwitch= true;
        break;
      }
    }
    if (shouldSwitch) {
      b[i].parentNode.insertBefore(b[i + 1], b[i]);
      switching = true;
    }
  }
  b = false;

}
$(document).ready(function(){
  $('#preview').click(function(){
     var email = $(".email").val();
     var name = $(".name").val();
     var comment = $(".comment").val();
      image = $(".image").val();
     var res = image.slice(12);
      function previewFile() {
  var preview = document.getElementById("prew");
  var file    = document.querySelector('input[type=file]').files[0];
  var reader  = new FileReader();

  reader.onloadend = function () {
    preview.src = reader.result;
  }

  if (file) {
    reader.readAsDataURL(file);
  } else {
    preview.src = "";
  }
 setTimeout(function(){ $(".prot").html(" "); }, 7000);
}
 $(".prot").append(name + '</br>' + comment + '</br>' + '<img id="prew" src="" alt="Image preview..." style="width:320px; height:240px; float:left;"/>');
        previewFile();
  })
  $(".sortn").click(function(){
     sortList();
  })
    $(".sortn1").click(function(){
     sortList1();
  })
})
</script>
<body style='background: green;'>
<button class='sortn'>Sorting By name</button>
<button class='sortn1'>Sorting By email</button>
 <a href="javascript:location.reload(true)"><button>Sorting By default</button></a>
<?php
foreach($approve_com as $key => $value) {
  $email=$value['email'];
  $name=$value['name'];
  $comment=$value['comment'];
  $date=$value['date'];
  $image=$value['image'];
  echo "<div id='$email' class='div' style='width:320px;height:280px; padding:25px; '>".$name."&nbsp".$date."</br>".$comment."</br>"."<img style='width:320px; height:240px; float:left;' src='http://localhost/OnlineSite12/images/$image'/>"."</div>";
  echo "</br>";
}
?>
<form method="post" action="<?=base_url();?>index.php/contr/options_user"  enctype="multipart/form-data">
  <input class='email' type="text" name="email" placeholder="Email"/></br>
  <input class='name' type="text" name="name" placeholder="Name"/></br>
  <input class='comment' type="text" name="comment" placeholder="Comment"/></br>
  <input class='image'  type="file" name="userfile" placeholder="image"/></br>
  <input  type="submit" name="download" value="Send"/>
</form>
  <button id='preview'>Preview</button>
<div class='prot'></div>
  </body>

</html>