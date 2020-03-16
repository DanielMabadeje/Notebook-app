<?php require APPROOT . '/views/inc/header.php'; ?>
<!-- <ul id="view_note"> -->
<div class="card card-body mb-3 bg-transparent col-md-6 border-white mx-auto text-white-50">
    <ul id="view_note">
        <li class="note">
            <h4 class="card-title">
                <?= $data['post']->title; ?>
            </h4>
            <a href="#" class="listen-note" title="Listen to Note">Listen to Note</a>
            <div class=" p-2 mb-3">
                Written by
                <!-- <?= $data['user']->name; ?> on <?= $data['post']->created_at; ?> -->
                <?php if ($data['user']->name == $_SESSION['user_name']) {
                    echo 'You on ' . $data['post']->created_at;
                } else {
                    echo $data['user']->name . ' on ' . $data['post']->created_at;
                }
                ?>
            </div>
            <p class=" content card-text"><?= $data['post']->body; ?> </p>
    </ul>
    <?php if ($data['post']->user_id == $_SESSION['user_id']) : ?>
        <hr>
        <div class="d-flex">
            <a href="<?= URLROOT; ?>posts/edit/<?php echo $data['post']->id; ?>" class="btn btn-dark">Edit</a>
            <form class="text-right float-right" action="<?= URLROOT; ?>posts/delete/<?= $data['post']->id; ?> " method="post">
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
        </div>
    <?php endif; ?>
    <a href="<?= URLROOT; ?>posts/" class="btn btn-dark">Back</a>
    </li>
</div>
<!-- </ul> -->
<?php require APPROOT . '/views/inc/footer.php'; ?>