  <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
    <!-- set links to show -->


    <ul class="pagination">
        <?php if($pager->getPageCount() < 3 ): ?>
            <li class="page-item <?php echo $pager->getCurrentPage() == $pager->getFirstPage() ? 'active': '' ?>"><a class="page-link" href="<?php echo $pager->getPageURI().'?page='.$pager->getFirstPage() ?>" aria-label="Previous"><span aria-hidden="true"><?=$pager->getFirstPage() ?></span></a></li>
            <li class="page-item <?php echo $pager->getCurrentPage() == $pager->getLastPage() ? 'active': '' ?>"><a class="page-link" href="<?php echo $pager->getPageURI().'?page='.$pager->getLastPage() ?>" aria-label="Next"><span aria-hidden="true"><?=$pager->getLastPage() ?></span></a></li>
        <?php endif; ?>
    </ul>
</nav>