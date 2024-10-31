<!-- nav-tab-active -->
   <h2 class="nav-tab-wrapper" id="wpseo-tabs">
	<a class="nav-tab " id="signUp_tab" href="#signUp" onclick="tabs(this)">Sign Up</a>
	<!-- <a class="nav-tab" id="notifications-tab" href="#notifications"  onclick="tabs(this)">Notifications</a> --></h2>
	<div id="signUp" class="pop_tabs active" >
		<img src="<?= plugins_url('../assets/img/pop-logo.png',__FILE__)?>" />
<? if(!isset($_REQUEST['email'])){ ?>	
   		<p>Fill in your email address and you will receive notifications including:</p>
   		<ul id="expl">
   			<li> Daily revenue reports</li>
   			<li>Instructions on how to receive payment</li>
   			<li>Additional useful information</li>
   		</ul>
   		<p>You can unsubscribe from these emails at any time</p>
<?
}
if(isset($_REQUEST['name']) && isset($_REQUEST['email'])){
	$headers = array('Content-Type: text/html; charset=UTF-8');
	//$headers[] = 'From: popPress <me@example.net>'; 		
	
	add_filter( 'wp_mail_content_type','pop_wpse27856_set_content_type' );
	wp_mail("michael@apply-tech.com","PopPress","<p>name:".$_REQUEST['name'].'</p></br><p>email: '.$_REQUEST['email']."</p></br><p>Domain: ".get_site_url()."</p>",$headers);
?>
	<div>	
		<p>Hi there, <?=$_REQUEST['name']?></p>	
		<p>Thanks for signing up to PopPress!</p>
		<p>We're going to send updates to <?=$_REQUEST['email']?> for your domain, <?=get_site_url()?>.</p>
		<p>You can unsubscribe at any time.</p>
		<p>Thanks, and looking forward to helping you achieve your business goals!</p>
		<p>- The PopPress team</p>
	</div>
<?
}
else{
?>
	<h2>Signup</h2>
	<form id="popFrm" method="post" action="<?php admin_url( 'admin.php?page=pop-signUp' ); ?>">
		<label>Name:</label></label><input type="text" name="name"/>
	</br>
		<label>Email:</label><input type="email" name="email"/>
	</br>
	<input type="submit" name="submit" id="submit" class="button button-primary" value="Send">
	</form>
<?
}
?>
   </div>
   <!-- <div id="notifications"   class="pop_tabs" >
   		<h2>notifications</h2>
   </div> -->


 
   