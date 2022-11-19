
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport˜" content="width=device-width, initial-scale=1.0">
    <title>ThieenJ Store - Sneaker House</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>
    <script src="https://kit.fontawesome.com/0607d6f524.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="main">
        <div class="header">
            
<marquee direction="right"><h1 style="background-color:white;" class="store-name-top">ThieenJ Store Chuyên Bán Hàng Chính Hãng 100% Sỉ & Lẻ HCM </h1></marquee>
            <div class="navbar-top">
                <div class="navbar">
                    <a href="/index.html"><i class="fa fa-fw fa-home"></i> Trang Chủ</a>
                    <div class="dropdown">
                        <button class="dropbtn">Giày Sneaker 
                          <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                          <a href="/direct/mlb.html">MLB</a>
                          <a href="/direct/adidas.html">Adidas</a>
                          <a href="/direct/nike.html">Nike</a>
                        </div>
                    </div> 
                    <a href="/direct/clothes.html">Quần Áo</a>
                    <a href="/direct/balo.html">Túi - Balo</a>
                    <a href="/direct/balo.html">Thông Tin</a>
                </div>
            </div>
            <button style="position:fixed;bottom:20px;right:10px;width: 4%;height:10%" id="cart">
                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                Giỏ Hàng
            </button>
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Giỏ Hàng</h5>
                        <span class="close">&times;</span>
                    </div>
                    <div class="modal-body">
                        <div class="cart-row">
                            <span class="cart-item cart-header cart-column">Sản Phẩm</span>
                            <span class="cart-price cart-header cart-column">Giá</span>
                            <span class="cart-quantity cart-header cart-column">Số Lượng</span>
                        </div>
                        <div class="cart-items">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary close-footer">Đóng</button>
                            <a href="cashout_page.php" class="checkout-btn">
                                <button type="button" class="btn btn-primary order">Thanh Toán</button>
                            </a>  
                        </div>
                    </div>
                    </div>

                </div> 
        </div>
            <!-- End menu-bar -->
            <div class="left-container">
                <img src="/img/left&right-banner/Sale-label_PNG_pngimagesfree.com.png" alt="" class="logo-brand-left">
                <img src="/img/left&right-banner/Adidas_Logo.svg.png" alt="" class="logo-brand-left"><br>
                <img src="/img/left&right-banner/major-league-baseball-1-logo-png-transparent.png" alt="" class="logo-brand-left"><br>
                <img src="/img/left&right-banner/Nike-Logo-Background-PNG-Image.png" alt="" class="logo-brand-left">
            </div>    
            <div class="right-container">
                <img src="/img/left&right-banner/Sale-label_PNG_pngimagesfree.com.png" alt="" class="logo-brand-left">
                <img src="/img/left&right-banner/Adidas_Logo.svg.png" alt="" class="logo-brand-left"><br>
                <img src="/img/left&right-banner/major-league-baseball-1-logo-png-transparent.png" alt="" class="logo-brand-left"><br>
                <img src="/img/left&right-banner/Nike-Logo-Background-PNG-Image.png" alt="" class="logo-brand-left">
            </div>  
        <div class="sliders">
            <img src="img/banner-top.jpeg" alt="" class="image-slider">
        </div>
        
    </div>
    <div class="container">
        <div class="center">
            <div class = "rcm-products-title">
                <h1>Thương Hiệu MLB</h1>
                <div >
                <a class="link-to-detail" href="/direct/mlb.html">Xem tất cả <i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
            <!-- Main-product-of-brand -->r
            <div class="mlb"> 
                <div class="product-card">
                    <!-- Begin Product-card over the card -->
                    <div class="border-card">
                        <!-- Begin Border card  -->
                        <img style = "width: auto;" src="img/mlb/linner-begie-products.webp" alt="01" class="image-products">
                        <!-- Begin product-info classs  -->
                        <div class="product-info">       
                            <p class="products-name">Giày MLB Chunky Liner Màu Begie 2022</p>
                            <div class="product-price">       
                                <span>Giá : 150$</span>
                            </div>
                        </div><br>
                        <!-- End product-info classs  -->

                        <!-- Begin Button -->ư
                        <div class="btn-position">
                        <button onclick="window.location.href='/direct/cashout_page.html';" class = "btn-buy">Mua Ngay</button>
                            <button class = "btn-add">Thêm giỏ hàng</button>
                        </div>   
                        <!-- End Button -->
                        <!-- End Border Card - Viền  -->
                    </div>
                    <!-- End Product-card over the card -->
                </div>
                <div class="product-card">
                    <div class="border-card">
                        <img style = "width: auto;" src="img/mlb/linner-black-products.webp" alt="02" class="image-products">
                        <div class="product-info">       
                            <p class="products-name">Giày MLB Chunky Liner Màu Đen 2022</p>
                            <div class="product-price">       
                                <span>Giá : 150$</span>
                            </div>
                            </div><br>
                        <div class="btn-position">
                        <button onclick="window.location.href='/direct/cashout_page.html';" class = "btn-buy">Mua Ngay</button>
                            <button class = "btn-add">Thêm giỏ hàng</button>
                        </div>                    
                    </div>
                </div>
                <div class="product-card">
                    <div class="border-card">
                        <img style = "width: auto;" src="img/mlb/linner-green-products.webp" alt="03" class="image-products">
                        <div class="product-info">       
                            <p class="products-name">Giày MLB Chunky Liner Màu Xanh GREEN 2022</p>
                            <div class="product-price">       
                                <span>Giá : 150$</span>
                            </div>
                            </div><br>
                        <div class="btn-position">
                            <button onclick="window.location.href='cashout_page.php';" class = "btn-buy">Mua Ngay</button>
                            <button class = "btn-add">Thêm giỏ hàng</button>
                        </div>                   
                     </div>
                </div>
                <div class="product-card">
                    <div class="border-card">
                        <img style = "width: auto;" src="img/mlb/linner-gum-products.jpeg" alt="04" class="image-products">
                        <div class="product-info">       
                            <p class="products-name">Giày MLB Chunky Liner Màu GUM 2022</p>
                            <div class="product-price">       
                                <span>Giá : 150$</span>
                            </div>
                            </div><br>
                        <div class="btn-position">
                            <button onclick="window.location.href='cashout_page.php';" class = "btn-buy">Mua Ngay</button>
                            <button class = "btn-add">Thêm giỏ hàng</button>
                        </div>                    
                    </div>
                <!-- </div>
                    <div class="product-card">
                        <div class="border-card">
                            <img style = "width: auto;" src="img/mlb/mlb-acc-bbblue-bag.png" alt="06" class="image-products">
                            <div class="product-info">       
                                <p class="products-name">Túi Lồng MLB Monogram Baby Blue *2022*</p>
                                <div class="product-price"> 
                                    <span>Giá : 99$</span>
                                </div> 
                            </div><br>
                        </div> -->
                            <div class="btn-position">
                                <button onclick="window.location.href='cashout_page.php';" class = "btn-buy">Mua Ngay</button>
                                <button class = "btn-add">Thêm giỏ hàng</button>
                            </div>                    
                    </div>
                    <div class="product-card">
                        <div class="border-card">
                            <img style = "width: auto;" src="img/mlb//mlb-acc-bbblue.png" alt="07" class="image-products">
                            <div class="product-info">       
                            <p class="products-name">Túi Đeo Chéo MLB Monogram Baby Blue *2022*</p>
                            <div class="product-price"> 
                                <span>Giá : 99$</span>
                            </div> 
                            </div><br>
                            <div class="btn-position">
                                <button onclick="window.location.href='cashout_page.php';" class = "btn-buy">Mua Ngay</button>
                                <button class = "btn-add">Thêm giỏ hàng</button>
                            </div>                    
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="border-card">
                            <img style = "width: auto;" src="img/mlb/mlb-acc-wh-blu.jpg" alt="08" class="image-products">
                            <div class="product-info">       
                            <p class="products-name">Túi Đeo Chéo MLB Monogram Trắng Xanh 2 Ngăn *2022*</p>
                            <div class="product-price"> 
                                <span>Giá : 119$</span>
                            </div>
                            </div><br>
                            <div class="btn-position">
                                <button onclick="window.location.href='cashout_page.php';" class = "btn-buy">Mua Ngay</button>
                                <button class = "btn-add">Thêm giỏ hàng</button>
                            </div>                    
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="border-card">
                            <img style = "width:auto;" src="img/mlb/mlb-acc-white-tote.jpg" alt="09" class="image-products">
                            <div class="product-info">       
                            <p class="products-name">Túi Tote MLB Basic Trắng</p>
                            <div class="product-price"> 
                                <span>Giá : 89$</span>
                            </div>
                            </div><br>
                            <div class="btn-position">
                                <button onclick="window.location.href='cashout_page.php';" class = "btn-buy">Mua Ngay</button>
                                <button class = "btn-add">Thêm giỏ hàng</button>
                            </div>                    
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="border-card">
                            <img style = "width: auto;" src="img/mlb/mlb-acc-ylw.jpg" alt="010" class="image-products">
                            <div class="product-info">       
                            <p class="products-name">Túi Xách MLB Màu Đen</p>
                            <div class="product-price"> 
                                <span>Giá : 59$</span>
                            </div>
                            </div><br>
                            <div class="btn-position">
                                <button onclick="window.location.href='cashout_page.php';" class = "btn-buy">Mua Ngay</button>
                                <button class = "btn-add">Thêm giỏ hàng</button>
                            </div>                    
                        </div>
                    </div>               
                    <div class="product-card">
                        <div class="border-card">
                            <img style = "width: auto;" src="img/mlb/mlb-polo-môn.jpg"alt="011" class="image-products">
                            <div class="product-info">       
                            <p class="products-name">Áo Polo MLB Monogram Black</p>
                            <div class="product-price"> 
                                <span>Giá : 159$</span>
                            </div>
                            </div><br>
                            <div class="btn-position">
                                <button onclick="window.location.href='cashout_page.php';" class = "btn-buy">Mua Ngay</button>
                                <button class = "btn-add">Thêm giỏ hàng</button>
                            </div>                    
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="border-card">
                            <img style = "width: auto;" src="img/mlb/mlb-sw-mono-blu.jpg"alt="012" class="image-products">
                            <div class="product-info">       
                            <p class="products-name">Áo Sweater MLB Monogram Blue</p>
                            <div class="product-price"> 
                                <span>Giá : 189$</span>
                            </div>
                            </div><br>
                            <div class="btn-position">
                                <button onclick="window.location.href='cashout_page.php';" class = "btn-buy">Mua Ngay</button>
                                <button class = "btn-add">Thêm giỏ hàng</button>
                            </div>                    
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="border-card">
                            <img style = "width: auto;" src="img/mlb/mlb-sw-mono-wh.webp"alt="013" class="image-products">
                                <div class="product-info">       
                                <p class="products-name">Áo Sweater MLB Monogram Brown</p>
                                <div class="product-price"> 
                                    <span>Giá : 189$</span>
                                </div>
                        </div><br>
                            <div class="btn-position">
                                <button onclick="window.location.href='cashout_page.php';" class = "btn-buy">Mua Ngay</button>
                                <button class = "btn-add">Thêm giỏ hàng</button>
                            </div>
                    </div>
                    </div>
                    <div class="product-card">
                        <div class="border-card">
                            <img style = "width: auto;" src="img/mlb/mlb-trackpaint-mono-bl.jpg"alt="013" class="image-products">
                                <div class="product-info">       
                                <p class="products-name">Quần Jogger Monogram MLB Đen</p>
                                <div class="product-price"> 
                                    <span>Giá : 189$</span>
                                </div>
                        </div><br>
                            <div class="btn-position">
                                <button onclick="window.location.href='cashout_page.php';" class = "btn-buy">Mua Ngay</button>
                                <button class = "btn-add">Thêm giỏ hàng</button>
                            </div>
                    </div>
                    </div>
                    <div class="product-card">
                        <div class="border-card">
                            <img style = "width: auto;" src="img/mlb/mlb-short-jeans.jpg"alt="013" class="image-products">
                                <div class="product-info">       
                                <p class="products-name">Quần Short Jeans Xanh</p>
                                <div class="product-price"> 
                                    <span>Giá : 189$</span>
                                </div>
                        </div><br>
                            <div class="btn-position">
                                <button onclick="window.location.href='cashout_page.php';" class = "btn-buy">Mua Ngay</button>
                                <button class = "btn-add">Thêm giỏ hàng</button>
                            </div>
                </div>
                </div>
                    </div>
                    <div class = "rcm-products-title">
                        <h1>Thương Hiệu ADIDAS</h1>
                        <div >
                        <a class="link-to-detail" href="/direct/adidas.html">Xem tất cả <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                        </div>
                        <!-- Main-product-of-brand -->
                        <div class="adidas"> 
                            <div class="product-card">
                                <!-- Begin Product-card over the card -->
                                <div class="border-card">
                                    <!-- Begin Border card  -->
                                    <img style = "width: auto;" src="img/adidas/ad-eq-bl.webp" alt="21" class="image-products">
                                    <!-- Begin product-info classs  -->
                                    <div class="product-info">       
                                        <p class="products-name">Giày Adidas EQ21 Black</p>
                                        <div class="product-price">       
                                            <span>Giá : 59$</span>
                                        </div>
                                    </div>
                                </div><br>
                                    <!-- End product-info classs  -->
            
                                    <!-- Begin Button -->
                                    <div class="btn-position">
                                        <button onclick="window.location.href='cashout_page.php';" class = "btn-buy">Mua Ngay</button>
                                        <button class = "btn-add">Thêm giỏ hàng</button>
                                    </div>   
                                    <!-- End Button -->
                                    <!-- End Border Card - Viền  -->
                                <!-- End Product-card over the card -->
                            </div>
                            <div class="product-card">
                                <div class="border-card">
                                    <img style = "width: auto;" src="img/adidas/ad-jacket-3str.webp" alt="02" class="image-products">
                                    <div class="product-info">       
                                        <p class="products-name">Áo Khoác Adidas 3 Sọc</p>
                                        <div class="product-price">       
                                            <span>Giá : 39$</span>
                                        </div>
                                    </div><br>
                                    <div class="btn-position">
                                        <button onclick="window.location.href='cashout_page.php';" class = "btn-buy">Mua Ngay</button>
                                        <button class = "btn-add">Thêm giỏ hàng</button>
                                    </div>                    
                                </div>
                            </div>
                            <div class="product-card">
                                <div class="border-card">
                                    <img style = "width: auto;" src="img/adidas/ad-trackpaint-3str.webp" alt="03" class="image-products">
                                    <div class="product-info">       
                                        <p class="products-name">Quần Adidas Track Paints 3 sọc</p>
                                        <div class="product-price">       
                                            <span>Giá : 39$</span>
                                        </div>
                                        </div><br>
                                    <div class="btn-position">
                                        <button onclick="window.location.href='cashout_page.php';" class = "btn-buy">Mua Ngay</button>
                                        <button class = "btn-add">Thêm giỏ hàng</button>
                                    </div>                   
                                 </div>
                            </div>
                            <div class="product-card">
                                <div class="border-card">
                                    <img style = "width: auto;" src="img/adidas/ad-tshirt-3str.webp" alt="04" class="image-products">
                                    <div class="product-info">       
                                        <p class="products-name">Áo Thun Adidas 3 sọc</p>
                                        <div class="product-price">       
                                            <span>Giá : 150$</span>
                                        </div>
                                        </div><br>
                                    <div class="btn-position">
                                        <button onclick="window.location.href='cashout_page.php';" class = "btn-buy">Mua Ngay</button>
                                        <button class = "btn-add">Thêm giỏ hàng</button>
                                    </div>                    
                                </div>
                            </div>
                            <div class="product-card">
                                <img style = "width: auto;" src="img/adidas/ad-ub-wh.jpg" alt="05" class="image-products">
                                <div class="product-info">       
                                   <p class="products-name">Giày Adidas Ultraboost White</p>
                                   <div class="product-price">       
                                       <span>Giá : 150$</span>
                                   </div>
                                </div><br>
                               <div class="btn-position">
                                   <button onclick="window.location.href='cashout_page.php';" class = "btn-buy">Mua Ngay</button>
                                   <button class = "btn-add">Thêm giỏ hàng</button>
                               </div>   
                            </div>                 
                        <div class="product-card">
                                    <img style = "width: auto;" src="img/adidas/ad-yz-bluetint.webp" alt="05" class="image-products">
                                    <div class="product-info">       
                                        <p class="products-name">Giày Adidas Yeezy Bluetint</p>
                                        <div class="product-price">       
                                            <span>Giá : 150$</span>
                                        </div>
                                    </div><br>
                                    <div class="btn-position">
                                        <button onclick="window.location.href='cashout_page.php';" class = "btn-buy">Mua Ngay</button>
                                        <button class = "btn-add">Thêm giỏ hàng</button>
                                    </div>                    
                        </div>  
                    </div>
                            <div class = "rcm-products-title">
                                <h1>Thương Hiệu NIKE</h1>
                                <div >
                                <a class="link-to-detail" href="/direct/nike.html">Xem tất cả <i class="fa-solid fa-chevron-right"></i></a>
                                </div>
                            </div>
                                <!-- Main-product-of-brand -->
                                <div class="nike"> 
                                    <div class="product-card">
                                        <!-- Begin Product-card over the card -->
                                        <div class="border-card">
                                            <!-- Begin Border card  -->
                                            <img style = "width: auto;" src="img/nike/nike-af1-gc.webp" alt="11" class="image-products">
                                            <!-- Begin product-info classs  -->
                                            <div class="product-info">       
                                                <p class="products-name">Giày Nike AirForce 1 Gucci</p>
                                                <div class="product-price">       
                                                    <span>Giá : 150$</span>
                                                </div>
                                            </div><br>
                                            <!-- End product-info classs  -->
                    
                                            <!-- Begin Button -->
                                            <div class="btn-position">
                                                <button onclick="window.location.href='cashout_page.php';" class = "btn-buy">Mua Ngay</button>
                                                <button class = "btn-add">Thêm giỏ hàng</button>
                                            </div>   
                                            <!-- End Button -->
                                            <!-- End Border Card - Viền  -->
                                        </div>
                                        <!-- End Product-card over the card -->
                                    </div>
                                    <div class="product-card">
                                        <div class="border-card">
                                            <img style = "width: auto;" src="img/nike/nike-af1-sf.webp" alt="12" class="image-products">
                                            <div class="product-info">       
                                                <p class="products-name">Giày Nike Air Force 1 Sunflower</p>
                                                <div class="product-price">       
                                                    <span>Giá : 150$</span>
                                                </div>
                                            </div><br>
                                            <div class="btn-position">
                                                <button onclick="window.location.href='cashout_page.php';" class = "btn-buy">Mua Ngay</button>
                                                <button class = "btn-add">Thêm giỏ hàng</button>
                                            </div>                    
                                        </div>
                                    </div>
                                    <div class="product-card">
                                        <div class="border-card">
                                            <img style = "width: auto;" src="img/nike/nike-dunk-pd.webp" alt="03" class="image-products">
                                            <div class="product-info">       
                                                <p class="products-name">Giày Nike Dunk Panda</p>
                                                <div class="product-price">       
                                                    <span>Giá : 300$</span>
                                                </div>
                                            </div><br>
                                            <div class="btn-position">
                                                <button onclick="window.location.href='cashout_page.php';" class = "btn-buy">Mua Ngay</button>
                                                <button class = "btn-add">Thêm giỏ hàng</button>
                                            </div>                   
                                        </div>
                                    </div>
                                </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
            <div class="footer-col">
                <h4>Thông Tin Shop</h4>
                <ul>
                <li><a href="https://www.google.com/maps/dir//169+Phan+%C4%90%C4%83ng+L%C6%B0u,+Ph%C6%B0%E1%BB%9Dng+1,+Ph%C3%BA+Nhu%E1%BA%ADn,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam/@10.8004321,106.6795922,17z/data=!4m17!1m7!3m6!1s0x317528d751eb7055:0x479c05ce675aa87b!2zMTY5IFBoYW4gxJDEg25nIEzGsHUsIFBoxrDhu51uZyAxLCBQaMO6IE5odeG6rW4sIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!3b1!8m2!3d10.8004268!4d106.6817809!4m8!1m0!1m5!1m1!1s0x317528d751eb7055:0x479c05ce675aa87b!2m2!1d106.6817809!2d10.8004268!3e0?hl=vi-VN">169 Phan Đăng Lưu, P1, Quận Phú Nhuận, HCM</a></li>
                <li><a href="#"><i class="f a-sharp fa-solid fa-phone"></i> 0826426888</a></li>
                <li><a href="#"><i class="fa-sharp fa-solid fa-envelope"></i> thienctv03@gmail.com</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Thông Tin Dev</h4>
                <ul>
                <li><a href="https://www.facebook.com/nvt101203/"> <i class="fa-sharp fa-solid fa-user"></i> Nguyễn Văn Thiện</a></li>
                <li><a href="#"> <i class="fa-sharp fa-solid fa-id-card"></i> 2174802010394</a></li>
                <li><a href="#"> <i class="fa-sharp fa-solid fa-envelope"></i> thien.2174802010394@vanlanguni.vn</a></li>
                <li><a href="#"><i class="fa-sharp fa-solid fa-phone"></i> 0826426888</a></li>
                </ul>
            </div>
            <div class="footer-col">
            <h4>Thông Tin Dev</h4>
            <ul>
                <li><a href="https://www.facebook.com/coithichiu"> <i class="fa-sharp fa-solid fa-user"></i> Nguyễn Hữu Đức</a></li>
                <li><a href="#"> <i class="fa-sharp fa-solid fa-id-card"></i> 2174802010384</a></li>
                <li><a href="#"> <i class="fa-sharp fa-solid fa-envelope"></i> huuduc122003@gmail.com</a></li>
                <li><a href="#"><i class="fa-sharp fa-solid fa-phone"></i> 0336025684</a></li>
            </ul>
            </div>
            </div>
            </div>
        </div>
    </footer>
</body>
<script src="js/main.js">

</script>
    
</html>
