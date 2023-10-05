<?php

use TDarkCoder\Framework\Form\Form;

$this->setTitle('Sign in');
$this->setLayout('app');

$form = new Form();
?>

<h3>Log into account</h3>

<?= $form->start('/login', 'POST') ?>
<div class="row">
    <div class="col-md-6">
        <div class="my-3">
            <?= $form->input('email')->email() ?>
        </div>
        <div class="my-3">
            <?= $form->input('password')->password() ?>
        </div>
        <div>
            <button type="submit" class="btn btn-success">Sign in</button>
        </div>
    </div>
    <?= $form->end() ?>
