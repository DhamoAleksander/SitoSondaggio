<html>
<body>
<?php
    //session_start();
    $voto=array();
    $mylife=file_get_contents("votiSondaggio.txt");
    $voto=explode(";",$mylife);
    $var=file_get_contents("boolVota.txt");
    if(isset($_POST["scelta"]))
    {
        if($var==0)
        {
            //$_SESSION["name"]="persona";
            if(isset($_POST["scelta"]))
            {
                if($_POST["scelta"]=='scelta1')
                {
                    $voto[0]=$voto[0]+1;
                }
                else if($_POST["scelta"]=='scelta2')
                {  
                    $voto[1]=$voto[1]+1;
                }
                else if($_POST["scelta"]=='scelta3')
                {   
                    $voto[2]=$voto[2]+1;
                }
                $qualcosa=fopen("votiSondaggio.txt","w");
                file_put_contents('votiSondaggio.txt', $voto[0] . ";" . $voto[1] . ";" . $voto[2]);
                fclose($qualcosa);

                $idx=fopen("boolVota.txt","w");
                file_put_contents('boolVota.txt','1');
                fclose($idx);

                echo'<meta http-equiv="refresh" content="0;URL=index.html">
                <script>
                alert("Hai votato correttamente!!");
                </script>';
            }
        }
        else
        {
            echo'<meta http-equiv="refresh" content="0;URL=votaSondaggio.php">
            <script>
            alert("Hai già votato!!");
            </script>';
        }
    }
    else
    {
        echo'<meta http-equiv="refresh" content="0;URL=votaSondaggio.php">
            <script>
            alert("Non hai selezionato nessuna risposta!!!");
            </script>';
    }
    

    

?>
</html>
</body>