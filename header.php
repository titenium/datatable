<header>
    <nav id="navBar" class="navbar sticky-top navbar-light bg-light">
        <div class="container-fluid">
            <div class="header-right">
                <a class="navbar-brand" href="#">
                    <img src="<?= LOGO ?>" alt="<?= SITE_NAME ?>" width="30px" height="24px">
                </a>
                
                <label id="switch" class="switch">
                    <input type="checkbox" onchange="toggleTheme()" value="1" id="slider">
                    <span class="slider round"></span>
                </label>
            </div>
            <?php 
                if (isset($_SESSION['user'])) {
            ?>    
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php if($_SERVER['REQUEST_URI'] == '/index.php' || $_SERVER['REQUEST_URI'] == '/'){?>active <?php } ?>" aria-current="page" href="<?= SITE_URL ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($_SERVER['REQUEST_URI'] == '/user.php'){?>active <?php } ?>" href="<?= SITE_URL ?>/user.php">Users</a>
                    </li>
                </ul>
            </div>
            <?php } ?>        
        </div>
    </nav>
</header>