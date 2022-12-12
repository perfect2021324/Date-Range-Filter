<?php

error_reporting(E_ALL ^ E_NOTICE);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

class SignatureClass {

	var $date;
	var $barra;
	var $cambio;
	var $efectivo;
	var $tarjeta;
	var $total;
	var $efectivoz;
	var $tarjetaz;
	var $totalz;
	var $diferencia;
	var $anticipada;
	var $camareros;
	var $firma;

	function __construct(){
		$this->date = $d;
		$this->barra = $b;
		$this->cambio = $c;
		$this->efectivo = $e;
		$this->tarjeta = $t;
		$this->total = $to;
		$this->efectivoz = $ez;
		$this->tarjetaz = $taz;
		$this->totalz = $toz;
		$this->diferencia = $di;
		$this->anticipada = $anti;
		$this->camareros = $ca;
		$this->firma = $f;
	}



	public function send($d,$b,$c,$e,$t,$to,$ez,$taz,$toz,$di,$anti,$ca,$f)
	{
		if($_POST)
		{
			$mail = new PHPMailer(true);
			try {
			    //Server settings
			    $mail->SMTPDebug = 1;
			    /*
				---- The examples show how to set up the email with a GMAIL account ----
				*/
				// Specify main and backup SMTP servers
				$mail->Host = 'cerobyte-com.correoseguro.dinaserver.com';//(ex. ssl://smtp.googlemail.com)
				// Always true
				$mail->SMTPAuth = true;
				// SMTP username
				$mail->Username = 'info@cerobyte.com';//(ex. your gmail email)
				// SMTP password
				$mail->Password = '=683^|x76s7V';//(ex. your gmail password)
				// Enable TLS encryption, `ssl` also accepted
				$mail->SMTPSecure = 'SSL';
				// TCP port to connect to
				$mail->Port = 465;//(ex. 465)
				$d = date($d,time()-3600*24);
				
			    //Recipients
			    $mail->setFrom('info@cerobyte.com', 'CAJAS');
			    $mail->addAddress('alex@salapelicano.com','CAJA '.$d.' MY');
			    //$mail->addAddress('alex@salapelicano.com');// Name is optional
			    //$mail->addReplyTo('info@example.com', 'Information');
			    //$mail->addCC('cc@example.com');
			    //$mail->addBCC('bcc@example.com');

    

			    //create file
			    define('UPLOAD_DIR', 'uploads/');
			    $s = str_replace('data:image/png;base64,', '', $f);
			    $s = str_replace(' ', '+', $s);
			    $data = base64_decode($s);
			    $file = UPLOAD_DIR . time() . '.png';
			    file_put_contents($file, $data);

			    //Attachments
			    //$mail->addAttachment($file);
			    $mail->AddEmbeddedImage($file,'firma');
			   

			    $body = '<h1>CAJA '.$b.' MY '.$d.'</h1><p><b>Fecha:</b>'.$d.'</p><p><b>Barra:</b> '.$b.'<br></p><p><b>Cambio:</b> '.$c.'</p><p>

</p><p><b>Efectivo:</b> '.$e.'</p><p>
</p><p><b>Tarjeta:</b> '.$t.'</p><p>
</p><p><b>Total:</b> '.$to.'</p><p>
<br>
</p><p><b>Efectivo Z:</b> '.$ez.'</p><p>
</p><p><b>Tarjeta Z:</b> '.$taz.'</p><p>
</p><p><b>Total Z:</b> '.$toz.'</p><p>
</p><p><b>Anticipadas: </b> '.$anti.'</p><p>
</p><p><b>Diferencia:</b> '.$di.'</p><p>

<br>

</p><p><b>Camareros:</b> '.$ca.'</p><p>
<p><img src="cid:firma"></p>


<i>Firma.</i></p>';//Email content

			    $mail->isHTML(true);
			    $mail->Subject = ''.$d.' CAJAS MY';//Email subject
		     	    $imagencita = '<img src="cid:firma">';
			    $mail->Body    = $body;


			    $messageSuccess = "CAJAS ENVIADAS";//Success message

			    $mail->send();
			    echo '<div class="alert alert-success">CAJA '.$b.' ENVIADA <span aria-hidden="true" class="icon_close close-btn"></span></div>';
			    
			    //Remove file
			    unlink($file);
			} catch (Exception $e) {
			echo $e->getMessage();
			    echo '<div class="alert alert-error">'.$mail->ErrorInfo.' <span aria-hidden="true" class="icon_close close-btn"></span></div>';
			}
		}else{
			echo '<div class="alert alert-error">Fill in all the fields <span aria-hidden="true" class="icon_close close-btn"></span></div>';
		}
	}
}

?>