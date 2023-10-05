<?php
$this->setLayout('app');
?>

<h1>Welcome, <?= app()->user->fullName() ?? 'Guest' ?>!</h1>
