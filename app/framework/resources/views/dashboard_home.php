<?php $this->extends('dashboard', ['title' => $title]); ?>
<h2>Users</h2>

<ul>
    <?php foreach ($users as $user): ?>
        <li><?php echo $user->firstName; ?></li>    
    <?php endforeach; ?>    
</ul>