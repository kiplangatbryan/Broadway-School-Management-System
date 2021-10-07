<?php 

    if (session()->getFlashData('fail')){
            echo '<div role="alert" class="toast fade hide" id="toast-1">';
            echo '<div class="toast-header"><img class="me-2" /><strong class="me-auto">Title</strong><small>10 min ago</small><button class="btn-close ms-2 mb-1 close" data-bs-dismiss="toast"></button></div>';
            echo  '<div role="alert" class="toast-body">';
            echo  '<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>';
            echo '</div>';
            echo '</div>';
    }


?>
