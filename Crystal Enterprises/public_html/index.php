<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form html</title>
</head>

<body>
    <main>
        <p>send mail</p>
        <form class="contact-form" action="contactform.php" method="post"></form>
        <input type="text" name="name" placeholder="Full name">
        <input type="text" name="mail" placeholder="Your email">
        <input type="text" name="subject" placeholder="Subject">
        <textarea name="message" id="" cols="30" rows="10" placeholder="message"></textarea>
        <button type="submit" name="submit">Send Mail</button>
    </main>
</body>

</html>