<?php if($paginator->hasPages()): ?>
<div class="uk-flex uk-flex-center uk-margin-top uk-margin-bottom">
    <nav aria-label="Pagination">
        <ul class="uk-pagination" uk-margin>
            <?php if($paginator->onFirstPage()): ?>
                <li><span uk-pagination-previous disabled></span></li>
            <?php else: ?>
                <li><a href="<?php echo e($paginator->previousPageUrl()); ?>"><span uk-pagination-previous class="prev"></span></a></li>
            <?php endif; ?>
            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(is_string($element)): ?>
                    <li class="uk-disabled"><span>…</span></li>
                <?php endif; ?>
                
                <?php if(is_array($element)): ?>
                    <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($page == $paginator->currentPage()): ?>    
                            <li class="uk-active"><span aria-current="page"><?php echo e($page); ?></span></li>
                        <?php else: ?>
                            <li><a href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php if($paginator->hasMorePages()): ?>
                <li><a href="<?php echo e($paginator->nextPageUrl()); ?>"><span uk-pagination-next class="next"></span></a></li>
            <?php else: ?>
                <li> <span uk-pagination-next disabled></span></li>
            <?php endif; ?>
        </ul>
    </nav>
</div>
<?php endif; ?><?php /**PATH /home/lhakpa/public_html/resources/views/themes/default/common/pagination.blade.php ENDPATH**/ ?>