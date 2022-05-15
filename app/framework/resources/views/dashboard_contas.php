<?php $this->extends('dashboard', ['title' => $title]); ?>
<h2>Contas</h2>

<?php $this->start('menu'); ?>
    <li><a href="/dashboard" class="active"><i data-feather="home"></i> Contas a pagar</a></li>
<?php $this->stop(); ?>


<?php $this->start('css') ?>
<style>
    #h1 {
        color: red;;
    }
</style>
<?php $this->stop() ?>