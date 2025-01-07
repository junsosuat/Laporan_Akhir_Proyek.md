<div class="col-lg-3">
                <nav class="navbar navbar-expand-lg bg-light rounded bourder mt-2">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width:250px">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1     ">
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo ((isset ($_GET['x']) && $_GET['x']=='home') || !isset($_GET['x'])) ? 'active link-light' : 'link-dark' ; ?>" aria-current="page" href="home"><i class="bi bi-house-door"></i> Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  ps-2 <?php echo (isset ($_GET['x']) && $_GET['x']=='Menu') ? 'active link-light' : 'link-dark' ; ?> " href="Menu"><i class="bi bi-search"></i> Daftar Menu</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  ps-2 <?php echo (isset ($_GET['x']) && $_GET['x']=='Order') ? 'active link-light' : 'link-dark' ; ?> " href="Order"><i class="bi bi-cart4"></i> Order</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo (isset ($_GET['x']) && $_GET['x']=='Customer') ? 'active link-light' : 'link-dark' ; ?> " href="Customer"><i class="bi bi-person-fill"></i> Customer</a>
                                    </li>
                                    <?php 
                                    if ($hasil['level']==1){
                                    ?>
                                    <li class="nav-item">
                                        <a class="nav-link  ps-2 <?php echo (isset ($_GET['x']) && $_GET['x']=='User') ? 'active link-light' : 'link-dark' ; ?> " href="User"><i class="bi bi-grid-1x2"></i> User</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  ps-2 <?php echo (isset ($_GET['x']) && $_GET['x']=='Report') ? 'active link-light' : 'link-dark' ; ?> " href="Report"><i class="bi bi-file-earmark-ruled"></i> Report</a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>