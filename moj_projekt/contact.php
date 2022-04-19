<?php
include "cfg.php";
    function PokazKontakt()
    {
    echo'
        <form action="" method="post">
            <label>Temat :</label><input type="text" name="title" /><br /><br />
            <label>Tresc :</label><textarea type="text" name="content"></textarea><br /><br />
            <label>Twoj e-mail :</label><input type="text" name="email" /><br /><br />
            <input type="submit" value="Wyslij" name="confirm"><br />
        </form>';
    }

    function WyslijMailKontakt($odbiorca){
        if(empty($_POST['temat']) || empty($_POST['tresc']) || empty($_POST['email'])){
            echo '[nie wypełniono formularza]';
            echo PokazKontakt();
        }
        else {
            $mail['subject'] = $_POST['temat'];
            $mail['body'] = $_POST['tresc'];
            $mail['sender'] = $_POST['email'];
            $mail['recipient'] = $odbiorca;

            $header = "From: Formularz kontaktowy <".$mail['sender'].">\n";
            $header .= "MIME-Version: 1.0\nContent-Type: text/plain; charset=utf-8\nContent-Transfer-Encoding: 7bit \n";
            $header .= "X-Sender: <".$mail['sender'].">\n";
            $header .= "X-Mailer: PRapWWW mail 1.2\n";
            $header .= "X-Priotity: 3\n";
            $header .= "Return-Path: <".$mail['sender'].">\n";

            mail($mail['recipient'], $mail['subject'], $mail['body'], $header);

        }
    }

    PokazKontakt();
    if(isset($_POST['email-submit'])) {
        WyslijMailKontakt('example@email,com');
    }
    
?>