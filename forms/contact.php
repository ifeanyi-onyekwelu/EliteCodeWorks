<?php
  
  require 'vendor/autoload.php';
  use Mailgun\Mailgun;

  $mgClient = new Mailgun('41fcc77ae77f8d02a78641b77008976d-4c205c86-03e1808e');
  $domain = "sandboxa9761d401d294a0799946d45176cd40a.mailgun.org";

  $result = $mgClient->sendMessage("$domain",
    array('from'    => 'Mailgun Sandbox <postmaster@sandboxa9761d401d294a0799946d45176cd40a.mailgun.org>',
        'to'      => 'Ifeanyichukwu Onyekwelu <ifeanyionyekwelu786.com>',
        'subject' => 'Hello Ifeanyichukwu Onyekwelu',
        'text'    => 'Congratulations Ifeanyichukwu Onyekwelu, you just sent an email with Mailgun! You are truly awesome! '));

?>
