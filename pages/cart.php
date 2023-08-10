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
    <title>Your cart</title>
</head>
<body class="bg-light">

    <!-- header and Navigation bar -->
    <div id="header-navigation-container">
        <?php include '../pages/component-html/header-navbar.php';?>
    </div>
    <!-- Ending of Navigation bar  -->

    <!-- BODY CART -->
    <div class="row p-5 m-0" id="content">

        <!-- HEADER -->
        <h1 class="fw-bolder">Your cart</h1>

        <!-- Product container -->
        <div class="col-lg-8 col-sm-12 col-md-12 border-0 bg-light p-md-5 p-4">

            <!-- Product template -->
            <div class="col-lg-10 col-sm-12 card border-0 border-bottom border-dark rounded-0 bg-light mb-3 pe-0" id="laptop14">
                <div class="row">

                    <!-- Product's img -->
                    <div class="col-md-2 col-4">
                        <img class="img-fluid" src='../images/cart-img/Laptop13.png' alt="img" class="rounded">
                    </div>

                    <!-- Product's content -->
                    <div class="col-md-10 col-8">
                        <div class="pt-0 p-0">

                            <div class="d-md-flex justify-content-md-between">
                                <h5 class="fb" id="product-name-price">DEDSEC Laptop 13 (DMA Ryzen™ 7040 Series)</h5>
                                <span class="fb fw-bolder">$9999.00</span>
                            </div>
                            
                            <div class="features">
                                DMA Ryzen™ 7 7840U (8c/16t, up to 5.1GHz) | 
                                64GB DDR5-5600 (2x32) | 4TB WW_BLACK™ SN850X | 
                                Radeon™ 700M Graphics | 80Wh | Fedora Workstation 38
                            </div>
                            
                        </div>
                    </div>

                </div>

                <!-- Qty + btn -->
                <div class="my-3 col-md-10 offset-md-2">
                    <span class="float-start" id="quantity">Qty: 1</span>
                    <a href="#" onclick="" style="float:right;" id="bin-icon">
                    <img src="../images/cart-img/cart-bin-icon.png" alt="bin-icon"></a>
                </div>
            </div>
            <!-- End of Product template -->

        </div>

        <!-- Cart info -->
        <div class="col-lg-4 col-12 col-md-7 p-5 offset-lg-0 offset-md-5 offset-0 " id="checkout-information" style="background-color: #F2F2F2; border-radius: 10px;">
            
            <!-- Detail info -->
            <div id="checkout-statement">
                <span style="float:left;" id="delivery">Delivery</span>
                <span style="float:right;">Date</span>
                <br>
                <span style="float:left;" id="subtotal">Subtotal</span>
                <span style="float:right;">$$$</span>
                <br>
                <span style="float:left;" id="estimated-tax">Estimated tax</span>
                <span style="float:right;">$$$</span>
                <br>
                <span style="float:left;" id="shipping">Shipping</span>
                <span style="float:right;">$$$</span>
                <br>
            </div>
            <hr style="height: 2px; color: black;">

            <!-- Total Price -->
            <div id="total">
                <span class="float-start"><h4>Total</h4></span>
                <span class="float-end"><h4>$$$</h4></span>
                <br>
                <br>
                <div class="float-end">
                    <button type="button" class="btn btn-primary">Continue to checkout ⟶</button>
                </div>
                
                <br>
                <br>
            </div>
            <hr style="height: 2px; color: black;">

            <!-- Warranty info -->
            <div id="warranty-information">
                <p>30-day money back guarantee</p>
                <p>Free shipping on orders above $200</p>
                <p>1-year limited warranty</p>
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
    
</body>
</html>