<?php
/** @var Exception $exception */
$this->extend('app');
?>

<div class="py-5 my-5 text-center">
    <h3><?=$exception->getCode()?> | <?= $exception->getMessage(); ?></h3>
</div>