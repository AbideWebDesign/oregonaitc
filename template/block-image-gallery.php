<?php $images = get_sub_field('gallery'); ?>
<?php if($images): ?>
    <ul class="list-inline d-flex justify-content-center">
        <?php foreach($images as $image): ?>
            <li class="list-inline-item mb-2">
            	<?php echo wp_get_attachment_image($image['ID'], 'photo-3', 0, array('class' => 'img-fluid')); ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>