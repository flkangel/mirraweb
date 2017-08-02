<html>
    <head>
        <meta http-equiv="refresh" content="5;url=index.html">
    </head>
</html>
<?php 
if(isset($_POST['submit'])){
    $to = "alejandraandrade@mirra.com.uy"; // this is your Email address
    $from = $_POST['Email']; // this is the sender's Email address
    $Name = $_POST['Name'];
    $Telephone = $_POST['Telephone'];
    $subject = "Mail desde WEB de MIRRA";
    $message = $Name . " con el numero de Telefono" ." " . $Telephone . " ha escrito lo siguiente:" . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mensaje enviado" . " " . $Name . " ". ", Pronto nos contactaremos, Muchas Gracias!." ."\n\n" ."Volviendo a Mirra...";
   header('Location: index.html');
   exit;
    }
    else{
        echo "MENSAJE NO ENVIADO  " . $Name . ", Por favor utilice otro metodo de contacto.";
        header('Location: /index.html');
        exit();
    }
    
?>
