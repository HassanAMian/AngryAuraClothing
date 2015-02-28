<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email =  $_POST["email"];
    $message =  $_POST["message"];
    $email_body = "";
    $email_body = $email_body . "Name: " . $name . "\n";
    $email_body = $email_body . "Email: " . $email . "\n";
    $email_body = $email_body . "Message: " . $message;

    // TODO: Send Email

    header("Location: contact.php?status=thanks");
    exit;
}
?><?php 
$year = date('Y');
$aura = "Angry Aura Clothing";
$section = "contact";
include('includes/header.php'); ?>

	<div class="section page">

		<div class="wrapper">

            <?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
                <h1>Thank You!</h1>	
				<p>Thank you for your message. We will get back to you as soon as possible.</p>
            <?php } else { ?>

                <h1>Contact Us</h1>

                <form method="post" action="contact.php">

                    <table>
                        <tr>
                            <th>
                                <label for="name">Name</label>
                            </th>
                            <td>
                                <input type="text" name="name" id="name">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="email">Email</label>
                            </th>
                            <td>
                                <input type="text" name="email" id="email">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="message">Message</label>
                            </th>
                            <td>
                                <textarea name="message" id="message"></textarea>
                            </td>
                        </tr>                    
                    </table>
                    <input type="submit" value="Send">

                </form>

            <?php } ?>

        </div>

	</div>

<?php include('inc/footer.php') ?>