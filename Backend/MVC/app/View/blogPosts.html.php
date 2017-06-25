<?php
/**
 * @var array $posts
 */
?>

<div>
    <?php foreach ($posts as $post):?>
    <h2><?php echo $post['title']?></h2>
    <p><?php echo $post['text']?></p>
    <?php endforeach; ?>
</div>
