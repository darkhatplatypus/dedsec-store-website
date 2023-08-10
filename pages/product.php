<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font API -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;500;700;900&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- My css -->
    <link rel="stylesheet" href="../css/style.css">
    <title>Products</title>
</head>
<body class="bg-light">


    <!-- header and Navigation bar -->
    <div id="header-navigation-container">
        <?php include '../pages/component-html/header-navbar.php';?>
    </div>
    <!-- Ending of Navigation bar  -->

    <!-- BODY -->
    <div class="p-5 row row-cols-lg-2 row-cols-1 m-0">
        
        <!-- Categories + Sort by -->
        <div class="col col-lg-3 d-flex flex-column align-items-md-start align-items-center mb-5">

            <div style="width: 200px;">
                <!-- Categories -->
                <div class="mb-lg-5 mb-1">

                    <!-- Header + Button dropdown -->
                    <div class="pb-1 border-bottom border-dark d-flex justify-content-between">
                        <div class="fw-bolder fb bg-light">Categories</div>
                        <span class="d-lg-none">
                            <a class="btn p-0 m-0" data-bs-toggle="collapse" href="#categories-dropdown" aria-expanded="false" aria-controls="categories-dropdown" >
                                <img src="../images/products-img/dropdown_icon.png" alt="dropdown-icon">
                            </a>
                        </span>
                    </div>

                    <!-- Content -->
                    <div>
                        <ul class="p-0 m-0 list-group list-group-flush d-lg-flex collapse" id="categories-dropdown">
                            <li class="list-group-item border-0 fb ps-0 bg-light"><a class="fb fw-bolder text-decoration-none" href="#">All</a></li>
                            <li class="list-group-item border-0 fb ps-0 bg-light"><a class="fb text-decoration-none" href="">Laptops</a></li>
                            <li class="list-group-item border-0 fb ps-0 bg-light"><a class="fb text-decoration-none" href="">Pentesting</a></li>
                            <li class="list-group-item border-0 fb ps-0 bg-light"><a class="fb text-decoration-none" href="">Microcontrollers</a></li>
                            <li class="list-group-item border-0 fb ps-0 bg-light"><a class="fb text-decoration-none" href="">Tiny computers</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Sort by -->
                <div>
                    <!-- Header + Button dropdown -->
                    <div class="pb-1 border-bottom border-dark d-flex justify-content-between">
                        <div class="fw-bolder fb">Sort by</div>
                        <span class="d-lg-none">
                            <a class="btn p-0 m-0" data-bs-toggle="collapse" href="#sortby-dropdown" aria-expanded="false" aria-controls="categories-dropdown" >
                                <img src="../images/products-img/dropdown_icon.png" alt="dropdown-icon">
                            </a>
                        </span>
                    </div>
                    <!-- Content -->
                    <ul class="list-group list-group-flush d-lg-flex collapse" id="sortby-dropdown">
                        <li class="form-check bg-light">
                            <input class="form-check-input rounded-0 shadow-none" type="radio" name="flexCheck-payment" id="default" checked>
                            <label class="form-check-label fb" for="default">Default</label>
                        </li>
                        <li class="form-check bg-light" >
                            <input class="form-check-input rounded-0 shadow-none" type="radio" name="flexCheck-payment" id="price-low-high">
                            <label class="form-check-label fb" for="price-low-high">Price (low-high)</label>
                        </li>
                        <li class="form-check bg-light" >
                            <input class="form-check-input rounded-0 shadow-none" type="radio" name="flexCheck-payment" id="price-high-low">
                            <label class="form-check-label fb" for="price-high-low">Price (high-low)</label>
                        </li>
                    </ul>

                </div>

            </div>
            
        </div>

        <!-- Products displayment -->
        <div class="col col-lg-9">

            <!-- Header -->
            <div class="d-flex flex-column align-items-md-start align-items-center">
                <!-- Results -->
                <div class="fb">20 results</div>
            </div>

            <!-- Loading Products -->
            <div id="Products-Container">
                <button type="button" class="btn btn-primary my-3" onclick="generateItem()">Generate Items for testing purposes</button>

                <!-- Template -->
                <div class="col-lg-10 col-sm-12 card border-0 border-bottom border-dark rounded-0 bg-light mb-3" id="laptop14">
                    <div class="row">

                        <!-- Product's img -->
                        <div class="col-md-2 col-4">
                            <img src='../images/products-img/Laptop13.png' alt="img" class="rounded">
                        </div>

                        <!-- Product's content -->
                        <div class="col-md-10 col-8">
                            <div class="card-body pt-0">
                                <div class="d-md-flex justify-content-md-between">
                                    <h5 class="card-titles fb" id="product-name-price">DEDSEC Laptop 13 (DMA Ryzen™ 7040 Series)</h5>
                                    <span class="fb fw-bolder">$9999.00</span>
                                </div>
                                
                                <ul class="features">
                                    <li class="fb">Extremely modular design with upgradable components</li>
                                    <li class="fb">Comes with DMA Ryzen™ 7040 Series and 13th Gen ENTEL®</li>
                                    <li class="fb">Out-of-box compatibility with most Linux distros</li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="align-self-end  align-content-end p-0 m-0"><button type="button" class="btn btn-primary m-0 mb-3 align-content-end align-self-end">Add to cart</button></div>
                    <!-- <hr> -->
                </div>


            </div>

        </div>

    </div>
    <!-- END OF BODY -->

    <!-- Footer -->
    <div id="footer-container">
        <?php include '../pages/component-html/footer.php';?>
    </div>
    <!-- Ending Footer -->

    <!-- Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- Script for fixed navbar -->
    <script src="../scripts/handle_view/fixed_navbar.js"></script>
    <!-- Handle menu bar -->
    <script src="../scripts/handle_view/handle_menu.js"></script>
    <!-- Handle sign in-up -->
    <script src="../scripts/handle_sign/handle_sign.js"></script>
    <!-- Loading Products -->
    <script src="../scripts/handle_view/product_loader.js"></script>

</body>
</html>