<?php

use App\core\Form\Form;

$this->extend('guest');

$form = new Form();
?>

<h3>Log into account</h3>

<?= $form->start('/login', 'POST') ?>
<div class="row">
    <div class="col-6 my-3">
        <?= $form->input('email')->email() ?>
    </div>
    <div class="col-6 my-3">
        <?= $form->input('password')->password() ?>
    </div>
    <div class="text-end">
        <button type="submit" class="btn btn-success">Sign in</button>
    </div>
</div>
<?= $form->end() ?>
