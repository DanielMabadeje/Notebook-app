<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="row border-white">
    <div class="col-md-6 mr-auto text-light">
        <h1>Notes</h1>
    </div>
    <div class="col-md-6 ml-auto">
        <a href="<?= URLROOT; ?>posts/add" class="btn btn-primary pull-right">
            <i class="fa fa-pencil"></i>Add Note
        </a>
    </div>
</div>
<?php flash('post_message'); ?>
<?php foreach ($data['posts'] as $post) : ?>
    <div class="card card-body mb-3 bg-transparent col-md-6 border-white mx-auto text-white-50">
        <h4 class="card-title">
            <?= $post->subject; ?>
        </h4>
        <h5 class="card-title">
            <?= $post->title; ?>
        </h5>
        <div class=" p-2 mb-3">
            Written by
            <!-- <?= $post->name; ?> on <?= $post->created_at; ?> -->
            <?php if ($post->name == $_SESSION['user_name']) {
                echo 'You on ' . $post->created_at;
            } else {
                echo $post->name . ' on ' . $post->created_at;
            }
            ?>
        </div>
        <p class="card-text"><?= $post->body; ?> </p>
        <a href="<?= URLROOT; ?>posts/show/<?= $post->postId; ?>" class="btn btn-dark">View</a>
    </div>

<?php endforeach; ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>