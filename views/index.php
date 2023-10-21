<?php
$this->layout = 'app';
?>

<h1>Welcome, <?= app()->user->fullName() ?? 'Guest' ?>!</h1>
