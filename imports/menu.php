<nav class="navbar">
    <button class="menu-toggle" aria-label="Ouvrir le menu">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </button>

    <ul class="nav-links">
        <li><a class="nav-btn" href="index.php">ACCUEIL</a></li>
        <li><a class="nav-btn" href="produits.php">LES PRODUITS</a></li>

        <?php if (isset($_SESSION['id'])): ?>
            <li><a class="nav-btn" href="administration.php">ADMINISTRATION</a></li>
            <li><a class="nav-btn" href="deconnexion.php">DÉCONNEXION</a></li>
        <?php else: ?>
            <li><a class="nav-btn" href="connexion.php">CONNEXION</a></li>
        <?php endif; ?>
    </ul>
</nav>
