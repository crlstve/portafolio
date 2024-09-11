<div id="modal" class="hidden w-full h-full fixed top-0 left-0 bg-black/50 flex justify-center items-center">
    <dialog class="block bg-white dark:bg-slate-700 rounded-lg p-6 w-fit h-fit p-6 lg:p-12 z-50">
        <h2 class="text-2xl font-bold font-title text-violet-500 dark:text-emerald-500">Modal</h2>
        <form method="post" action="">
            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-white">Name</label>
            <input type="text" name="name" id="name" placeholder="Name">
            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-white">Email</label>
            <input type="email" name="email" id="email" placeholder="Email">
            <label for="subject" class="block text-sm font-medium text-gray-700 dark:text-white">Subject</label>
            <input type="text" name="subject" id="subject" placeholder="Subject">
            <label for="message" class="block text-sm font-medium text-gray-700 dark:text-white">Message</label>
            <textarea name="message" id="message" placeholder="Message"></textarea>
            <input type="submit" value="Enviar" class="btn_nav">
        </form>
    </dialog> 
</div>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $subject = $_POST['subject'] ?? '';
        $message = $_POST['message'] ?? '';
        
        /*$resend = Resend::client('re_6reeALyt_FwKZWkQr2KueGXPasgELBW6s');
        $resend->emails->send([
            'from' => 'info@carlesteve.dev',
            'to' => 'ecarles10@gmail.com',
            'subject' => 'Contacto desde carlesteve.dev: ' . $subject,
            'html' => "
                <p><strong>Nombre:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Asunto:</strong> $subject</p>
                <p><strong>Mensaje:</strong> $message</p>
            "
        ]);*/
    }
?>