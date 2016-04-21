<?php
$subject = "Welcome aboard! DPSNMUNC'16 Photography and Videography Application";
$message = "Thank you for applying at DPSNMUNC '16. \r\nYour application has been verified and selected. You will be intimated on the deadline for the payment of the delegation fees which has been kept at INR : 1,000 only. See you on the 30th of June , 1st and 2nd of July.
\r\n-Secretariat,\r\nDelhi Public School Newtown Model United Nations Conference 2016";
$headers = 'From: contact@dpsnmunc.in' . "\r\n" .
    'Reply-To: contact@dpsnmunc.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($email, $subject, $message, $headers);
?>