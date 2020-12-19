<?php
  
    require 'vendor/autoload.php'; 

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception; 
    use \Mailjet\Resources;    

    class SendEmail{
        public static function SendMail($to, $subject, $content){
            
            $apiKey = "8a8a5c16887259a01f6afa52a990358f";
            $secretKey = "1cc8e3ddf266274bfd4a97072f21fed6";

            try {

                $mj = new \Mailjet\Client($apiKey,$secretKey,true,['version' => 'v3.1']);
                $body = [
                  'Messages' => [
                    [
                      'From' => [
                        'Email' => "utonseniormbhs@gmail.com",
                        'Name' => "IT Conference"
                      ],
                      'To' => [
                        [
                          'Email' => "utonseniormbhs@gmail.com",
                          //'Name' => "Uton"
                        ]
                      ],
                      'Subject' => $subject,
                      'TextPart' => $content,
                      'HTMLPart' => $content,
                    ]
                  ]
                ];
                $response = $mj->post(Resources::$Email, ['body' => $body]);
                //$response->success() && var_dump($response->getData());
              

            } catch (Exception $e) {
                echo 'Email exception Caught : ' . $e->getMessage() . "\n";
                return false;
            }
        }

        public static function ContactUs($subject, $content){
          
          $mail = new PHPMailer(true);
  
          try {
              $mail->isSMTP();
              $mail->Host = 'in-v3.mailjet.com'; // host
              $mail->SMTPAuth = true;
              $mail->Username = '8a8a5c16887259a01f6afa52a990358f'; //username
              $mail->Password = '1cc8e3ddf266274bfd4a97072f21fed6'; //password
              $mail->SMTPSecure = 'tls';
              $mail->Port = 587; //smtp port
            
              $mail->setFrom('utonseniormbhs@gmail.com', 'UDS WIFI');
              $mail->addAddress('utonblue@yahoo.com', 'UDS WIFI Info Team');
            
              $mail->isHTML(true);
              $mail->Subject = $subject;
              $mail->Body    = $content;
            
              //$mail->send();
              //echo 'Email has been sent.';
              return 1;
          } catch (Exception $e) {
              echo 'Email could not be sent. Mailer Error: '. $mail->ErrorInfo;
          }
        }
    }
?>