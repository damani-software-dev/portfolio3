<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="/css/contact.css">
    <link rel="shortcut icon" type="icon" href="/img/logo.ico">
    <title>Fullstack | Contact</title>
</head>
<body>
<div class="left-section">
    <img id="logo" src="/img/logo2.png">
    <div class="web-intro">
        <h3>More Info...</h3>
        <p>Contact Us by sending an Email describing the website you want, the price range, what will be included and not be included in the website so that we can ensure our client are satisfy with there product. As it relates to maintaining a client website that will be discuss in the follow up email after you submit one.</p>
    </div>
</div>
<div class="side-icon">
    <a  href="/"><i class="fas fa-angle-left"></i></a>
</div>
<div class="form-body">
    <h1><div class="contact">Contact Us</div><br>for a Amazing Website of your <span>Choice</span></h1>
        <form action="{{route('send')}}" method="POST">
        <label>Name</label>
        @csrf
        <br>
        <input type="text" class="name_input" name="name" >
        <br>
        <br>
        <label>Email</label>
        <br>
        <input type="email" class="email_input" name="email" >
        <br>
        <br>
        <label>Message</label>
        <br>
        <br>
        <br>
        <textarea type="text" class="message_input" name="message"></textarea>
        <br>
        <button type="submit" class="btn-contact">Send</button>
    </form>
</div>
</body>
</html>
