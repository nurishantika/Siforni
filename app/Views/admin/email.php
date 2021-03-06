<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container my-5">
    <div class="card-header text-white" id="detail-header-admin-create" style="background-color: #102A6D;">Form Kirim Email</div>
    <hr>
    <?php
    if (!empty(session()->getFlashdata('success'))) { ?>
        <div class="alert alert-success">
            <?php echo session()->getFlashdata('success'); ?>
        </div>
    <?php }

    if (!empty(session()->getFlashdata('error'))) { ?>
        <div class="alert alert-danger">
            <?php echo session()->getFlashdata('error'); ?>
        </div>
    <?php }

    echo form_open('SendMail/sendEmail'); ?>

    <div class="form-group">
        <?php
        form_label('Subject');
        $subject = [
            'type'  => 'text',
            'name'  => 'subject',
            'class' => 'form-control',
            'placeholder' => 'Subject'
        ];
        echo form_input($subject);
        ?>
    </div>
    <div class="form-group">
        <?php
        form_label('Message');
        $message = [
            'type'  => 'text',
            'name'  => 'message',
            'class' => 'form-control',
            'placeholder' => 'Message'
        ];
        echo form_textarea($message);
        ?>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success" style="color: white">Kirim</button>
    </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?= $this->endSection(); ?>