<?php
if(isset($_POST['Spacea']))
{
    if($_POST['Spacea']=='AC1')
    {$abill=$abill+500;
        echo $abill;
    }
    else if($_POST['Spacea']=='AC2')
    {
        $abill=$abill+300;
        echo $abill;
    }
    else
    {
    $abill=$abill+150;
    echo $abill;
    }
}
?>