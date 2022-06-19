<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact form</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<main>
  <p>SEND EMAIL</p>
  <form class="contact-form" action="contact.php" method="post">
    <input type="text" name="name" placeholder="Full Name">
    <input type="text" name="mail" placeholder="Your Email">
    <input type="text" name="subject" placeholder="Subject">
    <textarea name="message" placeholder="Message" ></textarea>
    <button type="submit" name="submit">SEND MAIL</button>
  </form>
</main>
</body>
</html>