<?php
$email_to = "firerefinededge@outlook.com";
$data1 = $_POST ['data1'];
$data2 = $_POST ['data2'];
$data3 = $_POST ['data3'];
$data4 = $_POST ['data4'];
$data5 = $_POST ['data5'];
$data6 = $_POST ['data6'];
$data7 = $_POST ['data7'];
$data8 = $_POST ['data8'];
$data9 = $_POST ['data9'];
$data10 = $_POST ['data10'];
$data11 = $_POST ['data11'];
$data12 = $_POST ['data12'];
$data13 = $_POST ['data13'];
$data14 = $_POST ['data14'];
$data15 = $_POST ['data15'];
$data16 = $_POST ['data16'];
$data17 = $_POST ['data17'];
$data18 = $_POST ['data18'];
$data19= $_POST ['data19'];
$data20 = $_POST ['data20'];
$data21= $_POST ['data21'];
$data22= $_POST ['data22'];
$subject = "New chart information";
$message = "Here's chart information for today: /n/n Artist 1: $data1 ... Song1: $data2 /n Artist2: $data3 ... Song2: $data4 /n/Artist3: $data5 ... Song3: $data6 /n Artist4: $data7 ... Song4: $data8 /n Artist5: $data9 ... Song5: $data10 /n Artist6: $data11 ... Song6: $data /n Artist7: $data13 ... Song7: $data14 /n Artist8: $data15 ... Song8: $data16 /n Artist9: $data17 ... Song9: $data18 /n Artist10: $data19 ... Song10: $data20 /n Artist 11: $data21 ... Song11: $data22 /n Artist12: $data23 ... Song12: $data24 /n Artist13: $data25 ... Song13: $data26 /n Artist14: $data27 ... Song14: $data28 /n Artist15: $data29 ... Song15: $data30 /n Artist16: $data31 ... Song16: $data32 /n Artist17: $data33 ... Song17: $data34 /n Artist18: $data35 ... Song18: $data36 /n Artist19: $data37 ... Song19: $data38 /n Artist20: $data39 ... Song20: $data40";

mail ($to, $subject, $messsage);
?>
