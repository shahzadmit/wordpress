<header class="top_header">
    <div class="logo">
        <a href="/">
            <img src="img/logo.png" alt="" />
        </a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex d-xs-flex d-sm-flex d-md-block justify-content-between align-items-center menus_global_wrapper">
                    <button class="d-block d-xs-block d-sm-block d-md-none btn btn-primary custom_button-5 top_menu_button" type="button" data-bs-toggle="offcanvas" data-bs-target="#modibleMenu" aria-controls="modibleMenu">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="modibleMenu" aria-labelledby="modibleMenuLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="modibleMenuLabel">Das Menü</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <?php require 'top_menu.part.php'; ?>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div id="mainmenu" class="d-none d-xs-none d-sm-none d-md-flex align-items-center">
                            <nav id="index-navigation" class="index-navigation" role="navigation">
                                <div class="menu-mainmenu_de-container">
                                    <?php require 'top_menu.part.php'; ?>
                                </div>
                            </nav>
                        </div>
                        <div class="right_info d-flex">
                            <div class="card align-items-center">
                                <img src="img/user.png" class="card-img-top" alt="">
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary card-text" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Händler
                                    </button>
                                </div>
                            </div>
                            <div class="card align-items-center">
                                <img src="img/settings.png" class="card-img-top" alt="">
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary card-text" data-bs-toggle="modal" data-bs-target="#modal_ers">
                                        Ersatzteile
                                    </button>
                                </div>
                            </div>
                            <div class="card align-items-center">
                                <img src="img/phone.png" class="card-img-top" alt="">
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary card-text" data-bs-toggle="modal" data-bs-target="#modal_contakt">
                                        Kontakt
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>