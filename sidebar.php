<article>

<h3>Compléments</h3>

<div class="widget-container">
    
    <?php if (is_active_sidebar('widget-1')) : ?>
        <?php dynamic_sidebar('widget-1'); ?>
</div>
    <?php endif; ?>
<div class="widget-container">
        
     
    <?php if (is_active_sidebar('widget-2' )) : ?>
        <?php dynamic_sidebar('widget-2'); ?>
</div>
<?php endif; ?>
</article>