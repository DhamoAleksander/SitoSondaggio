<html>
<body>
<?php

if(isset($_POST["username"]) && isset($_POST["pass"]))
{
    if(($_POST["username"]=="Paolo")&&($_POST["pass"]=="Petrangolini"))
    {
        echo'<meta http-equiv="refresh" content="0;URL=indexAdmin.html">';
    }
    else
    {
        echo'<meta http-equiv="refresh" content="0;URL=index.html">
        		<script>
          			alert("Credenziali non corrette!!");
                  </script>
        ';
    }
}

?>
</body>
</html>