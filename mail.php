<script>
  function messageError(){
    $('body').append('<div class="message_error"><h3>Wiadomość nie została wysłana</h3><p>Upewnij się, że wypełniłeś prawidłowo wszystkie pola. Jeżeli błąd będzie się powstarzał, polecał wysłać wiadomość na adres: <b>mpruchniak@gmail.com</b></p></div>');
    setTimeout(function(){
      $(".message_error").fadeIn();
    }, 500);

    setTimeout(function(){
      $(".message_error").fadeOut();
    }, 4500);

  }

  function messageSend(){
    $('body').append('<div class="message_send"><h3>Wiadomość została wysłana</h3><p> Wiadomość została wysłana na adres <b>mpruchniak@gmail.com</b></p></div>');
    setTimeout(function(){
      $(".message_send").fadeIn();
    }, 500);

    setTimeout(function(){
      $(".message_send").fadeOut();
    }, 4500);

  }
</script>
<?php
if(isset($_POST['name'])){
  $flag=true;
  if(!preg_match('@^[a-zA-Z0-9\s_-]{3,45}$@', $_POST['name'])){
    $flag=false;
  } else {
    $name=htmlentities($_POST['name']);
  }

  if(!isset($_POST['pn']) || !preg_match('@^[0-9-+]{9,16}$@', $_POST['pn'])){
    $flag=false;
  } else {
    $pn = htmlentities($_POST['pn']);
  }

  if(!isset($_POST['mail']) || !preg_match('@^[a-z\-_+\.]{3,25}+\@+[a-z0-9]{2,}+\.+[a-z\.]{2,}$@', $_POST['mail'])){
    $flag=false;
  } else {
    $mail = htmlentities($_POST[mail]);
  }

  if(!isset($_POST['message'])){
    $flag=false;
  } else {
    $message = nl2br(htmlentities($_POST['message']));
  }

  if($flag==true){
    $newMessage = '<table>
                    <tr>
                      <td><b>Imię:</b></td>
                      <td>' .$name. '</td>
                    </tr>
                    <tr>
                      <td><b>Numer telefonu: </b></td>
                      <td>' .$pn. '</td>
                    </tr>
                    <tr>
                      <td><b>Mail: </b></td>
                      <td>' .$mail. '</td>
                    </tr>
                    <tr>
                    <td colspan="2"><b>Treść wiadomości:</b></td>
                    </tr>
                    <tr>
                    <td colspan="2">' .$message. '</td>
                    </tr>
                  </table>';

    $header = 'Content-type: text/html; charset=iso-8859-1';

    if(mail("mpruchniak@gmail.com", "kontakt w sprawie pracy", $newMessage, $header)){
      unset($_POST['name']);
      unset($_POST['pn']);
      unset($_POST['mail']);
      unset($_POST['message']);
      echo '<script> messageSend(); </script>';
    } else {
      echo '<script> messageError(); </script>';
    }
    echo '<script> messageSend(); </script>';
  } else {
    echo '<script> messageError(); </script>';
  }

}

?>
