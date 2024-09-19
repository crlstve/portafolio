<div id="modal" class="hidden w-full h-full fixed top-0 left-0 bg-black/50 flex justify-center items-center z-50">
    <div class="block card w-fit p-16">
        <h2 class="text-3xl md:text-4xl font-bold font-title text-violet-500 dark:text-emerald-300 w-fit mx-auto mb-6">Contacto</h2>
        <form method="post" action="" class="flex flex-col gap-3">
            <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
            <input type="text" name="name" id="name" placeholder="nombre" required>
            <input type="email" name="email" id="email" placeholder="email" required>
            <input type="text" name="subject" id="subject" placeholder="asunto" required>
            <textarea name="message" id="message" placeholder="mensaje" required></textarea>
            <input type="submit" name="submit" value="submit" class="btnError font-bold">
        </form>
        <p id="error" class="hidden dark:text-white text-center">Por favor, completa todos los campos.</p>
        <p id="success" class="hidden dark:text-white text-center">Gracias por contactarme,<br>te responderé lo más pronto posible.</p>
    </div>
</div>
<?php
session_start();
require('../../vendor/autoload.php');
$resend = Resend::client('re_6reeALyt_FwKZWkQr2KueGXPasgELBW6s');

// Generar un token CSRF si no existe
if (empty($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}

// Verificar si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $token = $_POST['token'] ?? '';

    // Validar token CSRF
    if (hash_equals($_SESSION['token'], $token)) {
        // Recoger y validar los datos del formulario
        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $subject = htmlspecialchars(trim($_POST['subject']));
        $message = htmlspecialchars(trim($_POST['message']));

        // Comprobar que todos los campos están completos
        if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
            try {
                // Enviar el correo usando Resend
                $resend->emails->send([
                    'from' => 'Acme <onboarding@resend.dev>',
                    'to' => ['ecarles10@gmail.com'],
                    'subject' => $subject,
                    'html' => "<p>Nombre: $name</p><p>Email: $email</p><p>Mensaje: $message</p>"
                ]);

                // Eliminar el token de sesión después del envío
                unset($_SESSION['token']);

                // Mostrar mensaje de éxito en el frontend
                echo '<script>
                        document.getElementById("success").classList.remove("hidden");
                        document.querySelector("form").classList.add("hidden");
                      </script>';
            } catch (Exception $e) {
                // Mostrar error si ocurre un problema con el envío
                echo 'Error al enviar el correo: ' . $e->getMessage();
            }
        } else {
            echo '<script>
                    document.getElementById("error").classList.remove("hidden");
                  </script>';
        }
    } else {
        echo 'Error: Token CSRF no válido.';
    }
}
?>