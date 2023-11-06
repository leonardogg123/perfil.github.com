<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Contato</title>
    <link rel="stylesheet" href="../public/css/contato.css">
    <style>

    </style>
</head>
<body>


    <section>
        <h2>Contato</h2>
        <form action="https://api.staticforms.xyz/submit" method="post">
            <label>Nome</label>
            <input type="text" name="name" placeholder="Digite seu nome" autocomplete="off" required>
            <label>Email</label>
            <input type="email" name="email" placeholder="Digite seu email" autocomplete="off" required>
            <label>Mensagem</label>
            <textarea name="message" cols="30" rows="10" placeholder="Digite sua mensagem" required></textarea>
            <button type="submit">Enviar</button>
            <input type="hidden" name="accessKey" value="4bcf2a7f-f3e8-44d4-b65c-5a18523c609b">
        </form>
    </section>
</body>
</html>
