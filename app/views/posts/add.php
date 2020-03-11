<?php require APPROOT . '/views/inc/header.php'; ?>
<!-- <div class="row"> -->
<a href="<? URLROOT; ?>posts" class="btn btn-light"> <i class="fa fa-backward"></i> Back</a>
<div class="col-md-6 mx-auto app">
    <div class="card card-body bg-light mt-5">
        <h2>Add Note </h2>
        <p>Create a new note </p>
        <form action="<?= URLROOT ?>posts/add" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Title <sup>*</sup></label>
                <input type="text" name="title" class="form-control form-control-lg <?= (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['title']; ?>">
                <span class="invalid-feedback"><?= $data['title_err']; ?></span>
            </div>
            <div class="form-group">
                <label for="body">Body: <sup>*</sup></label>
                <div class="input-single">
                <textarea type="text" id="note-textarea" name="body" class="form-control form-control-lg <?= (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['body']; ?>"> </textarea>
                </div>
                <span class="invalid-feedback"><?= $data['body_err']; ?></span>
            </div>
            <!-- <button id="start-record-btn" title="Start Recording">Start Recognition</button> -->
            <span class="border" id="start-record-btn" title="Start Recording">Start Recognition</span>
                <span class="border" id="pause-record-btn" title="Pause Recording">Pause Recognition</span>
                <span class="border" id="save-note-btn" title="Save Note">Save Note</span>   
                <p id="recording-instructions">Press the <strong>Start Recognition</strong> button and allow access.</p>
                
            <input type="submit" class="btn btn-success" value="Submit">
        </form>
    </div>
    <!-- </div> -->
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>