<?php
/*
Plugin Name: Plugin de Contact
Description: Ajoute un formulaire de contact personnalisé à votre site web.
Version: 1.0
Author: Rachid Daoudi
*/



function contact(){

    $content = '';
    $content .= "
    <form action='http://localhost/plugin_-formulaire_contact/contact' method='post'>
        <label class='bg-danger' for='name'>Nom</label>
        <input type='text' id='name' name='wp-name' required>
        <label for='email'>Adresse e-mail</label>
        <input type='email' id='email' name='wp-email' required>
        <label for='subject'>Sujet</label>
        <input type='text' id='subject' name='wp-subject' required>
        <label for='message'>Message</label>
        <textarea id='message' name='wp-message' required></textarea>
        <button type='submit' name='envoyer'>Envoyer</button>
    </form>";
    return $content;
}
add_shortcode('form_contact','contact');





function sendInfo(){
    if(isset($_POST['envoyer'])){

        $name = sanitize_text_field($_POST['wp-name']);
        $email = sanitize_text_field($_POST['wp-email']);
        $subject = sanitize_text_field($_POST['wp-subject']);
        $message = sanitize_textarea_field($_POST['wp-message']);

        $to = 'rac1996hid@gmail.com';
        $subjectEmail = "test";
        $send = $name.' '.$email.' '.$subject.' '.$message;
        
        
        wp_mail($to,$subjectEmail,$send);
    }
}
add_action('wp_head','sendInfo');




function mailtrap($phpmailer) {
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = 'd1204bd9e113b5';
    $phpmailer->Password = 'de589a227a0f3d';
  }
  
  add_action('phpmailer_init', 'mailtrap');




?>
