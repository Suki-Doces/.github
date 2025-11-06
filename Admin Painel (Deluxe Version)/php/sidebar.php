<aside class="sidebar">
    <header class="sidebar-header">
        <a href="#" class="header-logo">
            <img src="./Logo Suki.svg" alt="Logo Suki">
        </a>
        <button class="toggler sidebar-toggler">
            <span class="material-symbols-rounded">
                chevron_left
            </span>
        </button>
        <button class="toggler menu-toggler">
            <span class="material-symbols-rounded">
                menu
            </span>
        </button>
    </header>

    <nav class="sidebar-nav">
        <ul class="nav-list primary-nav">
            <li class="nav-item">
                <a href="index.php" class="nav-link <?php echo ($currentPage == 'index') ? 'active' : ''; ?>">
                    <span class="nav-icon material-symbols-rounded">
                        dashboard
                    </span>
                    <span class="nav-label">Painel</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="pedidos.php" class="nav-link <?php echo ($currentPage == 'pedidos') ? 'active' : ''; ?>">
                    <span class="nav-icon material-symbols-rounded">
                        calendar_today
                    </span>
                    <span class="nav-label">Pedidos</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="notificacoes.php" class="nav-link <?php echo ($currentPage == 'notificacoes') ? 'active' : ''; ?>">
                    <span class="nav-icon material-symbols-rounded">
                        notifications
                    </span>
                    <span class="nav-label">Notificações</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="clientes.php" class="nav-link <?php echo ($currentPage == 'clientes') ? 'active' : ''; ?>">
                    <span class="nav-icon material-symbols-rounded">
                        group
                    </span>
                    <span class="nav-label">Clientes</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="produtos.php" class="nav-link <?php echo ($currentPage == 'produtos') ? 'active' : ''; ?>">
                    <span class="nav-icon material-symbols-rounded">
                        analytics
                    </span>
                    <span class="nav-label">Produtos</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="estoque.php" class="nav-link <?php echo ($currentPage == 'estoque') ? 'active' : ''; ?>">
                    <span class="nav-icon material-symbols-rounded">
                        star
                    </span>
                    <span class="nav-label">Estoque</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="configuracoes.php" class="nav-link <?php echo ($currentPage == 'configuracoes') ? 'active' : ''; ?>">
                    <span class="nav-icon material-symbols-rounded">
                        settings
                    </span>
                    <span class="nav-label">Configurações</span>
                </a>
            </li>
        </ul>
        
        <ul class="nav-list secondary-nav">
            <li class="nav-item">
                <a href="perfil.php" class="nav-link <?php echo ($currentPage == 'perfil') ? 'active' : ''; ?>">
                    <span class="nav-icon material-symbols-rounded">
                        account_circle
                    </span>
                    <span class="nav-label">Perfil</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="logout.php" class="nav-link">
                    <span class="nav-icon material-symbols-rounded">
                        logout
                    </span>
                    <span class="nav-label">Logout</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>