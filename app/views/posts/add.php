<?php require APPROOT . '/views/inc/header.php'; ?>
<!-- <div class="row"> -->
<a href="<?= URLROOT; ?>posts/" class="btn btn-light"> <i class="fa fa-backward"></i> Back</a>
<div class="col-md-6 mx-auto app">
    <div class="card card-body bg-light mt-5">
        <h2>Add Note </h2>
        <p>Create a new note </p>
        <form action="<?= URLROOT ?>posts/add" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Subject<sup>*</sup></label>
                <input type="text" name="subject" placeholder="Could be the subject or theme .." class="form-control form-control-lg <?= (!empty($data['subject_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['subject']; ?>">
                <span class="invalid-feedback"><?= $data['subject_err']; ?></span>
            </div>
            <div class="form-group">
                <label for="title">Title <sup>*</sup></label>
                <input type="text" name="title" class="form-control form-control-lg <?= (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['title']; ?>">
                <span class="invalid-feedback"><?= $data['title_err']; ?></span>
            </div>
            <div class="form-group">
                <label for="body">Body: <sup>*</sup></label>
                <div class="input-single">
                    <textarea type="text" id="note-textarea" placeholder="Create a new note by typing or using voice recognition." name="body" class="form-control form-control-lg <?= (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['body']; ?>"> </textarea>
                </div>
                <span class="invalid-feedback"><?= $data['body_err']; ?></span>
            </div>
            <div class="col-md-12 d-md-flex p-0 form-group">
                <div class="border col-md-4 p-0" id="start-record-btn" title="Start Recording">Start Recognition</div>
                <div class="border col-md-4 p-0" id="pause-record-btn" title="Pause Recording">Pause Recognition</div>
                <div class="border col-md-4 p-0" id="save-note-btn" title="Save Note">Stop Recognition</div>

            </div>
            <p id="recording-instructions">Press the <strong>Start Recognition</strong> button and allow access.</p>

            <input type="submit" class="btn btn-success" value="Submit">
        </form>
    </div>
    <!-- <h3>My Notes</h3> -->
    <!-- <ul id="notes">
        <li>
            <p class="no-notes">You don't have any notes.</p>
        </li>
    </ul> -->
    <!-- </div> -->
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>