<?php

use App\core\Form\Form;

$this->extend('guest');

$form = new Form();
?>

<h3>Create an account</h3>

<?= $form->start('/register', 'POST') ?>
<div class="row">
    <div class="col-6 my-3">
        <?= $form->input('email')->email() ?>
    </div>
</div>
<div class="row">
    <div class="col-6 my-3">
        <?= $form->input('firstName', 'First name') ?>
    </div>
    <div class="col-6 my-3">
        <?= $form->input('lastName', 'Last name') ?>
    </div>
    <div class="col-6 my-3">
        <?= $form->input('password')->password() ?>
    </div>
    <div class="col-6 my-3">
        <?= $form->input('confirmPassword', 'Confirm password')->password() ?>
    </div>
    <div class="text-end">
        <button type="submit" class="btn btn-success">Create</button>
    </div>
</div>
<?= $form->end() ?>
