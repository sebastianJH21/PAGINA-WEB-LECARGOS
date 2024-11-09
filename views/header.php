<?php 
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!-- header section strats -->
<header class="header_section">
    <div class="header_top">
        <div class="container-fluid ">
            <div class="contact_nav">
                <a href="">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span>
                        Call : +01 123455678990
                    </span>
                </a>
                <a href="">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span>
                        Email : demo@gmail.com
                    </span>
                </a>
                <a href="">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span>
                        Location
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="header_bottom">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="index.php">
                    <span>
                        <img src="../images/logo.png" alt="Logo Empresa Lecargo">
                    </span>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  ">
                        <li class="nav-item <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item <?php echo ($current_page == 'service.php') ? 'active' : ''; ?>">
                            <a class="nav-link" href="service.php">Services</a>
                        </li>
                        <li class="nav-item <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">
                            <a class="nav-link" href="about.php"> About</a>
                        </li>
                        <li class="nav-item <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- end header section -->