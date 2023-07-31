<?php

    if(isset($_POST['btn-send']))
    {
        $username = $_POST['Uname'];
        $Email = $_POST['Email'];
        $Subject = $_POST['Subject'];
        $Msg = $_POST['Msg'];

    if(empty($username) || empty($Email) || empty($Subject) || empty(Msg))
    {
        header:('location: Assignment.php3?error');
    }
    else{
        $to = "gourab@onlineittuts.com";

        if(mail($to,$subject,$Msg,$Email))
        {
            header("location:Assignmet.php3?success");
        }
    
    else{
        header ("location:Assignment.php3");
    }
    }
    }
?>