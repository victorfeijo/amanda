<?php

class class_email_sender{

	private $name;
	private $from;
	private $to;
	private $to_email;
	private $subject;
	private $headers;
	private $mail_message;

	public function __construct($name,$from,$to_email,$subject,$mail_message){

		$this->name=$name;
		$this->from=$from;
		$this->to_email=$to_email;
		$this->subject=$subject;
		$this->mail_message=$mail_message;

	}


	public function send_email(){
		require_once("./inc/PHPMailer/class.phpmailer.php");
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug = 0;
		$mail->Timeout = 10;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'ssl';
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 465;
		$mail->Username = GUSER;
		$mail->Password = GPWD;
		$mail->AddReplyTo($this->from, $this->name);
		$mail->SetFrom(GUSER, "MECONTRATA.GQ");
		$mail->CharSet = 'UTF-8';
		$mail->Subject = $this->subject;
		$mail->Body = $this->mail_message;
		foreach ($this->to_email as $address) {
			$mail->AddAddress($address);
		}
		if(!$mail->Send()) {
			echo '<script>alert("Mail error: '. $mail->ErrorInfo .'")</script>';
		} else {
			echo '<script>alert("Obrigado pelo seu email!")</script>';
		}
	}
//Class Finishes here
}


?>

