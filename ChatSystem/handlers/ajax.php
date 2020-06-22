<?php
include("../config.php");
<<<<<<< HEAD
if( isset($_REQUEST['action']) ){
	switch( $_REQUEST['action'] ){
		case "SendMessage":
			session_start();
			$query = $db->prepare("INSERT INTO chat SET user=?, message=?");
			$query->execute([$_SESSION['user'], $_REQUEST['message']]);
			echo 1;
=======
session_start();
$phonenumber=$_SESSION['phonenumber'];
if( isset($_REQUEST['action']) ){
	switch( $_REQUEST['action'] ){
		case "SendMessage":
			
			$query = $db->prepare("INSERT INTO chat SET user=?, message=?");
			$query->execute([$phonenumber, $_REQUEST['message']]);
>>>>>>> 9da29cc04b59713ec5f0f26f28333d9c91fa438b
		break;
		case "getChat":
			$query = $db->prepare("SELECT * from chat");
			$query->execute();
			$rs = $query->fetchAll(PDO::FETCH_OBJ);
			
			$chat = '';
			foreach( $rs as $r ){
<<<<<<< HEAD
				$chat .=  '<div class="siglemessage"><strong>'.$r->user.' says:  </strong>'.$r->message.'</div>';
=======
				$chat .=  '<div class="siglemessage"><strong>'.$phonenumber.' says:  </strong>'.$r->message.'</div>';
>>>>>>> 9da29cc04b59713ec5f0f26f28333d9c91fa438b
			}
			echo $chat;
		break;
		case "clearChat":
			$query = $db->prepare("DELETE from chat");
			$query->execute();
		break;
	}
}
?>