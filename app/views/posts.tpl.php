<?php
foreach ($posts as $post) {
?>
    <artile>
        <h1><?php echo $post->title ?></h1>
        <?php echo $post->message ?>
    </artile>

<?php
}
