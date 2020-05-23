<html>
<body>
<?php

    echo"sono qui";
    print_r($_POST);
    if(isset($_POST['testo']))
    {

        $handle = fopen("testoSondaggio.txt", "w");
        file_put_contents('testoSondaggio.txt',$_POST['testo']);
        fclose($handle);

        $sct1 = fopen("scelteSondaggio.txt", "w");
        file_put_contents('scelteSondaggio.txt',$_POST['scelta1'].";".$_POST['scelta2'].";".$_POST['scelta3']);
        fclose($sct1);

        $sct2 = fopen("boolVota.txt", "w");
        file_put_contents('boolVota.txt','0');
        fclose($sct2);

        $sct2 = fopen("votiSondaggio.txt", "w");
        file_put_contents('votiSondaggio.txt','0'.";".'0'.";".'0');
        fclose($sct2);

        echo'<meta http-equiv="refresh" content="0;URL=index.html">
        <script>
          alert("Tutti i dati sono stati salvati correttamente!!");
          </script>';
          
    }

    

    
?>
</html>
</body>