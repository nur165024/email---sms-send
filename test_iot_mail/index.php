<?php
    include('db.php');
    $email_list = "SELECT * FROM `email_list`";
    $result = $mySqli->query($email_list);

?>

<h3>Email List</h3>
<table>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Status</th>
            <th scope="col">Valid</th>
        </tr>
    </thead>
    <tbody>
        <?php
            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\Exception;

            require 'PHPMailer/Exception.php';
            require 'PHPMailer/PHPMailer.php';
            require 'PHPMailer/SMTP.php';

            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'nur42658@gmail.com';
            $mail->Password = 'uzfdmpmilziwklte';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Sender info
            $mail->setFrom('nur42658@gmail.com', 'ropon');
            $mail->addReplyTo('nur42658@gmail.com', 'nure alam');

            // Add a recipient
            $mail->addAddress('nur42658@gmail.com');

            $mail->isHTML(true);

            // Mail subject
            $mail->Subject = 'Email from Localhost by nure alam';

            // Mail body content
            $bodyContent = '<h1>How to Send Email from Localhost using PHP by nure alam</h1>';
            $bodyContent .= '<p>This HTML email is sent from the localhost server using PHP by <b>hello world</b></p>';

            $mail->Body    = $bodyContent;
            // Send email
            if(!$mail->send()) {
                echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
            } else {
                echo 'Message has been sent.';
            }

            if ($result->num_rows > 0){
                    while ($row = $result->fetch_array()){
        ?>
            <tr>
                <th scope="row"><?= $row['id'] ?></th>
                <td><?= $row['name'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['status'] ?></td>
                <td><?= $row['validity'] ?></td>
            </tr>
            <?php
                    }
                }
            ?>
    </tbody>
</table>
