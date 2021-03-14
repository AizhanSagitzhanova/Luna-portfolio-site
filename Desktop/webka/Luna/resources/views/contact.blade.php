<?php // Получаем значения переменных из пришедших данных $name = $_POST['name']; $email = $_POST['email']; $header = $_POST['header']; $message = $_POST['message']; // Формируем сообщение для отправки, в нём мы соберём всё, что ввели в форме $mes = "Имя: $name \nE-mail: $email \nТема: $header \nТекст: $message"; // Пытаемся отправить письмо по заданному адресу // Если нужно, чтобы письма всё время уходили на ваш адрес — замените первую переменную $email на свой адрес электронной почты $send = mail($email, $header, $mes, "Content-type:text/plain; charset = UTF-8\r\nFrom:$email"); // Если отправка прошла успешно — так и пишем if ($send == 'true') {echo "Сообщение отправлено";} // Если письмо не ушло — выводим сообщение об ошибке else {echo "Ой, что-то пошло не так";} ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Contact</title>
<link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<style>
body{
    background-color: antiquewhite;
}
.float{
    color: blue;
    margin-left: 30px;
    margin-top: 19px;
</style>
<header class="mb-auto">
    <div>
      <h3 class="float">Luna</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" aria-current="page" href="/">Home</a>
        <a class="nav-link" href="/about">About</a>
        <a class="nav-link" href="/contact">Contact</a>
      </nav>
    </div>
  </header>

<main class="container">
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Contact me</h1>
  </div>
    
  <form action="http://mihailmaximov.ru/projects/mail/post.php" method="post" name="form"> 
    <input name="name" type="text" placeholder="Name" /> 
    <br>
     <input name="email" type="text" placeholder="Email" /> 
     <br>
     <input size="30" name="header" type="text" placeholder="Subject" /> <br> 
     <textarea cols="32" name="message" rows="5"> Message 
     </textarea> 
     <br> 
     <input type="submit" value="Send" />
     </form>
    <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">©️ 2021–2022 Luna</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</main>
</body>
</html>