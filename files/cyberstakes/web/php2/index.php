<html>
Super secret file storage.
<br>
You may read the following documents: <code onclick="clicked('text1.txt')">text1.txt</code> and <code onclick="clicked('text2.txt')">text2.txt</code>.
<br>
All other files are forbidden, so don't get any funny ideas and try to read secret.flag!

<script>
function clicked(loc) {
    var form = document.createElement("form");
    form.setAttribute("method", "post");
    form.setAttribute("action", "index.php");

    var field = document.createElement("input");
    field.setAttribute("type", "hidden");
    field.setAttribute("name", "file");
    field.setAttribute("value",loc);

    form.appendChild(field);

    document.body.appendChild(form);
    form.submit();
}

</script>
<?php

if (isset($_POST['file'])) {
  $file = $_POST['file'];

  if (preg_match("/\.txt$/i",$file) == 0) {
    echo "OMG STOP HACKING, THAT IS NOT ALLOWED!";
  }
  elseif (preg_match("/\.\.\//",$file) != 0) {
    echo "SRSLY STAHP, NO HACKING!";
  }
  else {
  $file = strstr($file,"\x00",true )?strstr($file,"\x00",true ):$file;
    echo "<br><div style='margin-left:auto; margin-right: auto; width:200px; padding:5px; border:2px solid black'><b>File</b><p>".file_get_contents($file)."</p></div>";
  }

}
?>
</html>