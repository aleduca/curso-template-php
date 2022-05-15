
<section class="container-aside-logo">
    <i data-feather="x-circle" id="closeMenu"></i>
    <img src="/assets/imgs/logo_dashboard.png" alt="Clube Full-Stack">
</section>

<section class="container-aside-menu">
    <h1>Menu</h1>
    <nav class="container-aside-menu-nav">
        <ul>
            <li><a href="/dashboard" class="active"><i data-feather="home"></i> Início</a></li>
            <li><a href="/dashboard/contas" class="active"><i data-feather="home"></i> Contas</a></li>
            <?php $this->section('menu') ?>
        </ul>
    </nav>
</section>

<section class="container-aside-logout">
    <article class="container-aside-logout-btn">
        <i data-feather="log-out"></i>
        <a href="/logout">Sair</a>
    </article>
</section>