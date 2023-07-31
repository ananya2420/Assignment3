<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send US a Message</title>

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-6-auto">
            <div class="card">
                <div class="card-title">
                    <h2 class="text-center py-2"> Message</h2>
                    <hr>
                    <?php
                        $Msg ="";
                        if(isset($_GET['error']))
                        {
                            $Msg = "please Fil up the blanks";
                            echo '<div class= "alert alert-danger">'.$Msg.'</div>';
                        }
                        if(isset($_GET['success'])){
                            $Msg = "Message has been sent";
                            echo '<div class= "alert alert-success">'.$Msg.'</div>';
                        }
                    ?>
                    <div>
</div>
<div class="card-body">
    <form action="process.php" method="post">
        <input type="text" name="UName" placeholder="User Name" class="form-control mb-2">
        <input type="text" name="Email" placeholder="Email" class="form-control mb-2">
        <input type="text" name="Subject" placeholder="Subject" class="form-control mb-2">
        <textarea name="msg" class="form-control"></textarea>
        <button class="btn btn-succcess" name="btn-send" placeholder="message">send</button>

</form>
<div>
</div>
<div>
</div>
</html>


