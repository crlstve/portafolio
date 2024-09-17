<div id="modal" class="hidden w-full h-full fixed top-0 left-0 bg-black/50 flex justify-center items-center z-50">
    <div class="block card w-fit p-16">
        <h2 class="text-3xl md:text-4xl font-bold font-title text-violet-500 dark:text-emerald-300 w-fit mx-auto mb-6">Contacto</h2>
        <form method="post" action="" class="flex flex-col gap-3">
            <input type="text" name="name" id="name" placeholder="nombre">
            <input type="email" name="email" id="email" placeholder="email">
            <input type="text" name="subject" id="subject" placeholder="asunto">
            <textarea name="message" id="message" placeholder="mensaje"></textarea>
            <input type="submit" value="enviar" class="btnError font-bold">
        </form>
        <p id="error" class="hidden dark:text-white  text-center">Por favor, completa todos los campos.</p>
        <p id="success" class="hidden dark:text-white text-center">Gracias por contactarme,<br>te responderé lo más pronto posible.</p>
    </div>
</div>
<?php
require('../../vendor/autoload.php');
$resend = Resend::client('re_6reeALyt_FwKZWkQr2KueGXPasgELBW6s');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $token = $_POST['token'] ?? '';
    if (hash_equals($_SESSION['token'], $token)) {
        $resend->emails->send([
            'from' => 'Acme <onboarding@resend.dev>',
            'to' => ['ecarles10@gmail.com'],
            'subject' => 'hello world',
            'html' => '<p>it works!</p>'
        ]);
        unset($_SESSION['token']);
    }
}
?>