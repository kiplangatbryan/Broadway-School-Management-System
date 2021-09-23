<?php helper('myutil'); ?>
<div class="d-sm-flex justify-content-between align-items-center mb-0">
    <div class="text-center">
        <?php $path_array = explode('/', $path); ?>
        <ol class="breadcrumb">
            <?php foreach($path_array as $key => $row): ?>
                <li class="breadcrumb-item"><a href="<?=build_url($path_array, $key) ?>"><span><?=$row == 'admin' ? 'dashboard': $row ?></span></a></li>
            <?php endforeach ?>
        </ol>
    </div>
</div>