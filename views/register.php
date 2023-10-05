<?php

use TDarkCoder\Framework\Form\Form;

$this->setTitle('Sign up');
$this->setLayout('app');

$form = new Form();
?>

<h3>Create an account</h3>

<?= $form->start('/register', 'POST') ?>
<div class="row">
    <div class="col-md-6">
        <div class="my-3">
            <?= $form->input('email')->email() ?>
        </div>
        <div class="my-3">
            <?= $form->input('firstName', 'First name') ?>
        </div>
        <div class="my-3">
            <?= $form->input('lastName', 'Last name') ?>
        </div>
        <div class="my-3">
            <?= $form->input('password')->password() ?>
        </div>
        <div class="my-3">
            <?= $form->input('confirmPassword', 'Confirm password')->password() ?>
        </div>
        <div>
            <button type="submit" class="btn btn-success">Create</button>
        </div>
    </div>
</div>
<?= $form->end() ?>
