<?php Functions::partial('header'); ?>
<main class="relative w-full min-h-dvh overflow-x-hidden">
    <div id="bg-dots" class="fixed bottom-0 -z-10 opacity-20 dark:opacity-30 backdrop-blur-sm"></div>
    <?php 
        Functions::partial('hero');
        
        Functions::partial('experience'); 

        Functions::partial('projects'); 

        Functions::partial('stack'); 

        Functions::partial('modal'); 
    ?>

</main>
<?php Functions::partial('footer'); ?>