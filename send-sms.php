<style>
   .success{
    color: #0a31df;
    text-align:center;
    padding:30px;
    font-size:30px;
    }
    .error{
        color: red;
    }
</style>

<?php
    // Update the path below to your autoload.php,
    // see https://getcomposer.org/doc/01-basic-usage.md
    require_once './vendor/autoload.php';
    use Twilio\Rest\Client;

    $sid    = "AC9bb61d043a0fab7cefb2300c7fc6e922";
    $token  = "959d6492b9cf8a11a8dc5685b7732233";
    $twilio = new Client($sid, $token);

    $message = $twilio->messages
      ->create("+237672637211", // to
        array(
          "from" => "+14847423707",
          "body" => 'hello i am in danger call the police'
      )

   );
   if($message){
    // data inserted
    //echo "data inserted";

    // create a session variable to display message
    $_SESSION['message'] = "<div class='success'>The admin and the Autorities have been notified.</div>";
    // redirect page to manage admin
    // header("location:"."view_booking.php");
}
else
{
    // failled to insert data
    //echo "FAILED TO  insert DATA";
    $_SESSION['message'] = "<div class='error>'Your message failed .</div>";
    // redirect page to add admin
    // header("location:"."view_booking.php");
}
                         

                            if(isset($_SESSION['message'])) {
                            echo $_SESSION['message']; //didplaying session meaasge
                            unset($_SESSION['message']); //removing session message
                        }
                    
                  