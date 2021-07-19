<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">


    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="./public/js/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Template style -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>f
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <title>Trang chủ</title>

    <!-- <style>
        div{padding: 20px;}
        #header,#footer{background-color: yellow;}
    </style> -->
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" style="position: relative;">
    <section id="header">
        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="navbar">

                <a class="navbar-brand" href="#"><img src="public/images/logo.png" alt=""></a>
                <button class="navbar-toggler navbar-toggler-icon d-lg-none bg-dark" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">

                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mt-2 mt-lg-0 ml-auto ">

                        <li class="nav-item ml-2">
                            <a class="nav-link" href="#About"><span class="link-text">Về chúng tôi</span></a>
                        </li>
                        <li class="nav-item ml-2">
                            <a class="nav-link" href="#searchOrder"><span class="link-text">Tra cứu vận đơn</span></a>
                        </li>
                        <li class="nav-item ml-2">
                            <a class="nav-link" href="#service"><span class="link-text">Dịch vụ</span></a>
                        </li>


                        <li class="nav-item ml-2">
                            <a class="nav-link" href="#feel"><span class="link-text">Đối tác</span></a>
                        </li>
                        <li class="nav-item ml-2">
                            <a class="nav-link" href="#pthd"><span class="link-text">Phương thức hoạt động</span></a>
                        </li>
                        <li class="nav-item ml-2">
                            <a class="nav-link" href="#ncc"><span class="link-text">Nhà cung cấp nổi bật</span></a>
                        </li>
                        <li class="nav-item ml-2">
                            <a class="nav-link" href="#contact"><span class="link-text">Liên hệ</span></a>
                        </li>





                    </ul>

                </div>
            </nav>
            <div id="carouselId" class="carousel slide " data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselId" data-slide-to="1"></li>
                    <li data-target="#carouselId" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active header-search">
                        <img src="public/images/crs1.png" alt="First slide">
                        <div class="carousel-caption d-none d-md-block" id="carousel-container">
                            <div>
                                <h1>BOXE</h1>
                                <p>Chúng tôi cung cấp các dịch vụ vận chuyển nhanh, tin cậy, an toàn</p>
                                <form>
                                    <div class="input-group">
                                        <input type="email" class="form-control" size="50" placeholder="Email Address" required>
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-danger">Đăng kí</button>
                                        </div>
                                    </div>
                                </form>
                                <button type="button" class="btn btn-danger header-button my-5 "><a href="#About" class="text-decoration-none text-white">BẮT ĐẦU</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item header-search">
                        <img src="public/images/csr2.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block " id="carousel-container">
                            <div>
                                <h1>BOXE</h1>
                                <p>Giao hàng trong và ngoài nước dễ dàng hơn bao giờ hết với dịch vụ vận chuyển toàn diện của chúng tôi.</p>
                                <form>
                                    <div class="input-group">
                                        <input type="email" class="form-control" size="50" placeholder="Email Address" required>
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-danger">Đăng kí</button>
                                        </div>
                                    </div>
                                </form>
                                <button type="button" class="btn btn-danger header-button my-5 "><a href="#About" class="text-decoration-none text-white">BẮT ĐẦU</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item header-search">
                        <img src="public/images/crs3.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block " id="carousel-container">
                            <div>
                                <h1>BOXE</h1>
                                <p>Giải pháp giao hàng vượt trội dành cho
                                    mọi khách hàng</p>
                                <form>
                                    <div class="input-group">
                                        <input type="email" class="form-control" size="50" placeholder="Email Address" required>
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-danger">Đăng kí</button>
                                        </div>
                                    </div>
                                </form>
                                <button type="button" class="btn btn-danger header-button my-5 "><a href="#About" class="text-decoration-none text-white">BẮT ĐẦU</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </header>
    </section>

    <section id="About">
        <div class="container">

            <header class="header-title text-center">
                <h3 class="slideanim">Về chúng tôi</h3>
            </header>

            <div class="row d-flex flex-wrap mb-3">
                <div class="col-md-6 ">
                    <h2>Về chúng tôi</h2>
                    <p class="text-justify mr-5 slideanim">
                        Boxe - Công ty giao nhận đầu tiên tại Việt Nam được thành lập năm 2012, với sứ mệnh phục vụ nhu cầu vận chuyển chuyên nghiệp của các đối tác Thương mại điện tử trên toàn quốc. GHN cam kết mang đến cho khách hàng những trải nghiệm dịch vụ giao nhận nhanh, an toàn, hiệu quả giúp người bán hàng bán được nhiều hơn, người mua hàng hài lòng hơn.
                        Ở Logistics chúng tôi cam kết từng cá nhân có đủ không gian, được trao quyền để làm việc độc lập đồng thời tự học hỏi qua nhiều trải nghiệm để hoàn thiện bản thân.
                    </p>
                </div>
                <div class="col-md-6 about-img slideanim">
                    <img src="public/images/about.jpg" alt="">
                </div>
            </div>
            <h2>Thành tích nổi bật</h2>
            <div class="row">
                <div class="col-md-6 ">
                    <p class="text-justify mr-5">Boxe luôn dành trọn tâm huyết để mang đến những dịch vụ giao nhận xuất sắc nhất. Niềm đam mê chất lượng đã giúp GHN đạt được những thành tích đáng kinh ngạc trong suốt 8 năm qua:</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-check-circle"></i>10.000.000 đơn hàng được giao thành công mỗi tháng</li>
                        <li><i class="fa fa-check-circle"></i>Hơn 100.000 shop online và doanh nghiệp đã tin dùng</li>
                        <li><i class="fa fa-check-circle"></i>Đối tác chiến lược của Tiki, Shopee, Lazada, Sendo</li>
                        <li><i class="fa fa-check-circle"></i>Mạng lưới giao nhận phủ sóng 100% 63 tỉnh thành</li>
                        <li><i class="fa fa-check-circle"></i>Đạt tốc độ xử lý 500.000 đơn hàng/ ngày</li>
                    </ul>
                </div>
                <div class="col-md-6" style="background-image: linear-gradient(180deg, #e9f8ff 0%, #f3f1fd 100%);">
                    Dù bạn đang sở hữu một trang thương mại điện tử lớn, là chủ của một cửa hàng trực tuyến hay đơn giản một người bán hàng thông thường - GHN luôn sẵn sàng cung cấp dịch vụ giao nhận hàng chuyên nghiệp cho bạn.
                </div>
            </div>
        </div>
    </section>
    <section id="searchOrder" class="py-5">
        <div class="container">
            <header class="header-title text-center">
                <h3 class="slideanim">TRA CỨU ĐƠN HÀNG</h3>
            </header>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home"><span class="font-weight-bold">Tra cứu đơn hàng</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu1"><span class="font-weight-bold">Ước tính chi phí</span></a>
                </li>

            </ul>

            <!-- Tab panes -->
            <div class="tab-content border bg-light">
                <div class="tab-pane active container" id="home">
                    <div class="row">
                        <div class="col-md-12 py-5">
                            <div class="form-group">
                                <label>Mời quý khách nhập mã vận đơn để tra cứu (VD:
                                    S160689.MN1.A15.123456789 hoặc 123456789)</label>
                                <div class="row">
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="orderId" id="orderId" maxlength="50">
                                    </div>
                                    <div class="col-md-4">

                                        <button type="button" class="btn btn-danger w-100">Tìm đơn</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane container" id="menu1">
                    <div class="row">
                        <div class="col-md-12 py-5">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-5 d-flex align-items-center">

                                        <input type="text" name="" id="" class="form-control" placeholder="Nhập điểm bắt đầu" aria-describedby="helpId">
                                    </div>
                                    <div class="col-md-5 d-flex align-items-center">

                                        <input type="text" name="" id="" class="form-control" placeholder="Nhập điểm kết thúc" aria-describedby="helpId">


                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-danger w-100">Ước tính</button>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <section id="service" class="mt-auto">
        <div class="container" style="background-image: linear-gradient(-20deg, #e9defa 0%, #fbfcdb 100%);">
            <header class="header-title text-center mb-3">
                <h3 class="slideanim">Dịch vụ</h3>
                <span class="text-center">Chúng tôi cung cấp các dịch vụ</span>
            </header>
            <div class="row my-2">
                <div class="col-md-6   slideanim">
                    <div class="type-service d-flex">
                        <div class="icon-service">
                            <!-- <i class="fas fa-truck text-black-50"></i> -->
                        </div>
                        <div class="content-service">
                            <h2 class="service-title">Địa điểm tại 63+ tỉnh thành </h2>
                            <p class="text-justify mr-5">
                                Dịch vụ vận tải cho doanh nghiệp với hơn 1000 xe tải phủ sóng 63 tỉnh thành, quản lí trực tuyến 24/7
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6    slideanim">
                    <div class="type-service d-flex">
                        <div class="icon-service">
                            <!-- <i class="fab fa-algolia"></i> -->
                        </div>
                        <div class="content-service">
                            <h2 class="service-title">Giao hàng nhanh</h2>
                            <p class="text-justify mr-5">
                                Giao hành trong 2h trong nội thành. Ấp dụng tại Hà Nội và TP.HCM
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-2">

                <div class="  col-md-6  slideanim">
                    <div class="type-service d-flex">
                        <div class="icon-service">
                            <!-- <i class="fa fa-adjust    "></i> -->
                        </div>
                        <div class="content-service">
                            <h2 class="service-title">Dịch vụ hỗ trợ khách hàng 24/7</h2>
                            <p class="text-justify mr-5">
                                Mục tiêu của chúng tôi là biến mỗi trải nghiệm giao hàng trở nên thú vị - với miễn phí giao hàng nhiều lần, thay đổi lịch giao hàng chỉ qua một cú nhấp chuột chắn chắn sẽ mang lại sự hài lòng cho khách hàng của bạn.</p>
                        </div>
                    </div>
                </div>

                <div class="  col-md-6  slideanim">
                    <div class="type-service d-flex">

                        <div class="icon-service">
                            <!-- <i class="fas fa-anchor"></i> -->
                        </div>
                        <div class="content-service">
                            <h2 class="service-title"> Dịch vụ giao hàng thu hộ</h2>
                            <p class="text-justify mr-5">
                                Bạn muốn thu tiền từ khách hàng? Chúng tôi cung cấp dịch vụ giao hàng thu tiền hộ ở tất cả mọi nơi chúng tôi hoạt động.</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row my-2">
                <div class=" col-md-6   slideanim">
                    <div class="type-service d-flex">

                        <div class="icon-service">
                            <!-- <i class="fas fa-certificate"></i> -->
                        </div>
                        <div class="content-service">
                            <h2 class="service-title">Đa dạng dịch vụ</h2>
                            <p class="text-justify mr-5">
                                Nhiều lựa chọn về dịch vụ vận chuyển - chúng tôi cung cấp dịch vụ giao hàng trong ngày, giao hàng ngày tiếp theo, giao hàng hỏa tốc và giao hàng tiêu chuẩn.</p>
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 slideanim m">
                    <div class="type-service d-flex ">

                        <div class="icon-service">

                        </div>
                        <div class="content-service">
                            <h2 class="service-title">Đa dạng lựa chọn gửi hàng</h2>
                            <p class="text-justify mr-5">
                                Chúng tôi đem đến cho bạn nhiều lựa chọn gửi hàng – Chúng tôi có thể đến lấy đơn hàng trực tiếp hoặc bạn có thể đem đến mạng lưới các điểm gửi hàng của chúng tôi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section id="feel" class="py-5">
        <div class="container">
            <header class="header-title text-center slideanim">
                <h3 class="">CẢM NHẬN CỦA ĐỐI TÁC</h3>
            </header>
            <div class="row">
                <div class="col-md-3 ">
                    <div class="item-slide slile-item-partner4 border">
                        <div class="quote-image">
                            <picture>
                                <!-- <source srcset="//theme.hstatic.net/1000376681/1000564487/14/banner_customers4.jpg?v=1679" media="(max-width: 500px)"> -->
                                <!-- <source srcset="//theme.hstatic.net/1000376681/1000564487/14/banner_customers4.jpg?v=1679"> -->
                                <img src="public/images/feel1.jpg" class="" alt="Shopee" style="width:100%;">
                            </picture>
                        </div>
                        <div class="quote-body">
                            <div class="logo-quote">
                                <img src="public/images/feel1.1.png" class="" alt="Shopee" style="width:80px;height: 20px;">
                            </div>
                            <hr class="line-customer">
                            <p class="name-quote">Anh Trần Tuấn Anh</p>
                            <small>Giám Đốc Điều Hành Shopee Việt Nam</small>
                            <hr class="line-customer">
                            <p class="txt-quote">Boxe là một trong những đối tác vận chuyển uy tín của Shopee. Chúng tôi kỳ vọng với hệ thống phân loại hàng tự động, GHN không chỉ rút ngắn thời gian phân loại mà còn giúp cả người bán và người mua trên Shopee an tâm đơn hàng được giao nhanh hơn, an toàn hơn.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="item-slide slile-item-partner3 border">
                        <div class="quote-image">
                            <picture>
                                <!-- <source srcset="//theme.hstatic.net/1000376681/1000564487/14/banner_customers3.jpg?v=1679" media="(max-width: 500px)"> -->
                                <!-- <source srcset="//theme.hstatic.net/1000376681/1000564487/14/banner_customers3.jpg?v=1679"> -->
                                <img src="public/images/feel2.jpg" class="" alt="Sendo" style="width:100%;">
                            </picture>
                        </div>
                        <div class="quote-body">
                            <div class="logo-quote">
                                <img src="public/images/feel2.1.png" class="" alt="Sendo" style="width:80px;height: 20px;margin:auto;">
                            </div>
                            <hr class="line-customer">
                            <p class="name-quote">Anh Trần Hải Linh</p>
                            <small>Tổng Giám Đốc Sendo</small>
                            <hr class="line-customer">
                            <p class="txt-quote">"Boxe là một trong những đối tác quan trọng của Sendo với mục tiêu phục vụ ngành thương mại điện tử và nền kinh tế số đang tăng trưởng vượt bậc, là cầu nối vận chuyển hàng hoá từ các nhà bán đến tay người tiêu dùng một cách an toàn và nhanh chóng. "</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="item-slide slile-item-partner1 border">
                        <div class="quote-image">
                            <picture>
                                <!-- <source srcset="//theme.hstatic.net/1000376681/1000564487/14/banner_customers1.jpg?v=1679" media="(max-width: 500px)">
              <source srcset="//theme.hstatic.net/1000376681/1000564487/14/banner_customers1.jpg?v=1679"> -->
                                <img src="public/images/feel3.jpg" class="" alt="Lazada" style="width:100%;">
                            </picture>
                        </div>
                        <div class="quote-body">
                            <div class="logo-quote">
                                <img src="public/images/feel3.1.png" class="" alt="Lazada" style="width:80px;height: 20px;">
                            </div>
                            <hr class="line-customer">
                            <p class="name-quote">Anh Fabian Wandt</p>
                            <small>Giám Đốc Vận Hành Lazada</small>
                            <hr class="line-customer">
                            <p class="txt-quote">"Boxe đã và luôn là đối tác rất tin cậy của Lazada hơn 7 năm qua. Việc đầu tư vào Hệ thống phân loại hàng hoàn toàn tự động sẽ giúp GHN tăng tính cạnh tranh, đồng thời mang đến cho các đối tác như chúng tôi một dịch vụ vận chuyển xuất sắc." </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="item-slide slile-item-partner2 border">
                        <div class="quote-image">
                            <picture>

                                <img src="public/images/feel4.jpg" class="" alt="Tiki" style="width:100%;">
                            </picture>
                        </div>
                        <div class="quote-body">
                            <div class="logo-quote">
                                <img src="public/images/feel4.1.png" class="" alt="Tiki" style="width:80px;height: 20px;">
                            </div>
                            <hr class="line-customer">
                            <p class="name-quote">Anh Trần Ngọc Thái Sơn</p>
                            <small>Nhà Sáng Lập &amp; Tổng Giám Đốc Tiki</small>
                            <hr class="line-customer">
                            <p class="txt-quote">"Boxe là một đối tác quan trọng với Tiki, giúp hàng hoá trên Tiki đến được với nhiều tỉnh xa, thậm chí đến cả những huyện đảo. Điều này mang đến sự thuận lợi rất lớn cho khách hàng, xoá bỏ được các rào cản về địa lý. "</p>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section id="pthd" class="py-5">
        <div class="container">
            <header class="header-title text-center">
                <h3 class="slideanim">Phương thức hoạt động</h3>

            </header>
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h2>Tạo tài khoản</h2>
                        </div>
                        <div class="panel-body">
                            <p>Đăng nhập hoặc tạo tài khoản mới trên app hoặc website để bắt đầu.</p>

                        </div>
                        <div class="panel-footer">

                            <button class="btn btn-lg">Đăng nhập</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h2>Gửi hàng</h2>
                        </div>
                        <div class="panel-body">
                            <p>Gọi hotline để yêu cầu lấy hàng hoặc lên lịch lấy hàng tại trang quản lý.</p>
                        </div>
                        <div class="panel-footer">

                            <button class="btn btn-lg">Bắt đầu</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h2>Theo dõi đơn hàng</h2>
                        </div>
                        <div class="panel-body">
                            <p>Theo dõi đơn hàng của bạn theo thời gian thực qua app hoặc website</p>
                        </div>
                        <div class="panel-footer">

                            <button class="btn btn-lg">Theo dõi</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="ncc">
        <div class="container mb-5">
            <header class="header-title text-center slideanim">
                <h3 class="">Nhà cung cấp nổi bật</h3>
            </header>
            <div class="row border">
                <div class="col-md-4 ">
                    <div class="content ">
                        <div class="img2">
                            <img src="./public/images/ncc2.jpg" alt="">
                        </div>
                        <div class="noidung border ">
                            <h3 class="text-center text-info"><?php echo $row2[2]; ?> </h3>
                            <ul style="list-style:none;margin-left: 46px;">

                                <li>
                                    <span class="font-weight-bold">Nhóm:</span> <?php if ($row2[6] == 1) { ?>
                                        <span class="badge-danger badge">Tiêu dùng</span>
                                    <?php } elseif ($row2[6] == 2) { ?>
                                        <span class="badge badge-primary">Đồ uống</span>
                                    <?php } elseif ($row2[6] == 3) { ?>
                                        <span class="badge badge-success">Thức ăn nhanh</span>
                                    <?php } ?>
                                </li>
                                <li>
                                    <span class="font-weight-bold">Email: </span><span class="bg-danger" role="alert"><?php echo $row2[3]; ?></span>
                                </li>
                                <li>
                                    <span class="font-weight-bold">SĐT: </span><span class="bg-success" role="alert"><?php echo $row2[5]; ?></span>
                                </li>
                                <li>
                                    <span class="font-weight-bold">Địa chỉ: </span><span class="bg-success" role="alert"><?php echo $row2[4]; ?></span>
                                </li>
                            </ul>


                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content ">
                        <div class="img1">
                            <img src="./public/images/ncc1.jpg" alt="">
                        </div>
                        <div class="noidung border ">
                            <h2 class="text-center text-warning"><?php echo $row1[2]; ?> </h2>
                            <ul style="list-style:none;margin-left: 46px;">

                                <li> <span class="font-weight-bold">Nhóm:</span> <?php if ($row1[6] == 1) { ?>
                                        <span class="badge-danger badge">Tiêu dùng</span>
                                    <?php } elseif ($row1[6] == 2) { ?>
                                        <span class="badge badge-primary">Đồ uống</span>
                                    <?php } elseif ($row1[6] == 3) { ?>
                                        <span class="badge badge-success">Thức ăn nhanh</span>
                                    <?php } ?>
                                </li>
                                <li><span class="font-weight-bold">Email: </span><span class="bg-success"><?php echo $row1[3]; ?></span></li>
                                <li><span class="font-weight-bold">SĐT: </span><span class="bg-info"><?php echo $row1[5]; ?></span></li>
                                <li><span class="font-weight-bold">Địa chỉ: </span><span class="bg-info"><?php echo $row1[4]; ?></span></li>
                            </ul>


                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content">
                        <div class="img3">
                            <img src="./public/images/ncc3.jpg" alt="">
                        </div>

                        <div class="noidung border  ">
                            <h3 class="text-center text-muted"><?php echo $row3[2]; ?> </h3>
                            <ul style="list-style:none;margin-left: 46px;">

                                <li>
                                    <span class="font-weight-bold">Nhóm:</span>
                                    <?php if ($row3[6] == 1) { ?>
                                        <span class="badge-danger badge">Tiêu dùng</span>
                                    <?php } elseif ($row3[6] == 2) { ?>
                                        <span class="badge badge-primary">Đồ uống</span>
                                    <?php } elseif ($row3[6] == 3) { ?>
                                        <span class="badge badge-success">Thức ăn nhanh</span>
                                    <?php } ?>
                                </li>
                                <li><span class="font-weight-bold">Email: </span><span class="bg-warning"><?php echo $row3[3]; ?></span></li>
                                <li><span class="font-weight-bold">SĐT: </span><span class="bg-danger"><?php echo $row3[5]; ?></span></li>
                                <li><span class="font-weight-bold">Địa chỉ: </span><span class="bg-danger"><?php echo $row3[4]; ?></span></li>
                            </ul>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=contact>
        <div class="container mb-5">
            <header class="header-title text-center slideanim">
                <h3 class="">Liên Hệ</h3>
            </header>
            <div class="row border slideanim " style="background-image: linear-gradient(-20deg, #e9defa 0%, #fbfcdb 100%);">
                <div class="col-md-7 my-4 slideanim">



                    <form action="#" class="p-5 bg-white">


                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-black  font-weight-bold" for="fname">First Name</label>
                                <input type="text" id="fname" class="form-control" placeholder="Họ">
                            </div>
                            <div class="col-md-6">
                                <label class="text-black  font-weight-bold" for="lname">Last Name</label>
                                <input type="text" id="lname" class="form-control" placeholder="Tên">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black  font-weight-bold" for="email">Email</label>
                                <input type="email" id="email" class="form-control" placeholder="Nhập email của bạn">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black  font-weight-bold" for="subject">Chủ đề</label>
                                <input type="subject" id="subject" class="form-control" placeholder="Chủ đề">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black  font-weight-bold" for="message">Tin nhắn</label>
                                <textarea name="message" id="message" cols="30" rows="4" class="form-control" placeholder="Viết các câu hỏi or góp ý của bạn tại đây..."></textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Gửi tin nhắn" class="btn btn-danger py-2 px-4 text-white">
                            </div>
                        </div>


                    </form>
                </div>
                <div class="col-md-5 slideanim my-5">

                    <div class="p-4 mb-3  ">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="mb-0 font-weight-bold">Address</span>
                        <p class="mb-4"> KM10 Trần Phú, Hà Đông <br />
                            Hà Nội, Việt Nam</p>
                        <i class="fas fa-phone    "></i>
                        <span class="mb-0 font-weight-bold">Phone</span>
                        <p class="mb-4"><a href="#" class="text-decoration-none text-black-50">+84 123456789</a></p>
                        <i class="fas fa-mail-bulk    "></i>
                        <span class="mb-0 font-weight-bold">Email Address</span>
                        <p class="mb-0"><a href="#" class="text-decoration-none text-black-50">vhm@gmail.com</a></p>

                    </div>

                    <div class="p-4 mb-3 ">
                        <h3 class="h5 text-black mb-3">Nhiều hơn</h3>
                        <p>ĐĂNG KÝ
                            Tạo tài khoản để sử dụng dịch vụ giao hàng của Boxe ngay! Hãy nhớ rằng bạn sẽ bị tính phí vận chuyển ngay sau khi sử dụng dịch vụ!</p>
                        <p><a href="#" class="btn btn-danger px-4 py-2 text-white">Đăng kí ngay</a></p>
                    </div>

                </div>
            </div>
        </div>
        </div>

    </section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.2201016140107!2d105.78762981424448!3d20.983812494688667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135accedb1f23bf%3A0x7689c7eec4b3eb23!2zQW4gSMOyYSwgTeG7mSBMYW8sIEjDoCDEkMO0bmcsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1601976725235!5m2!1svi!2s" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <section id="footer" style="background-image: linear-gradient(to right, #a8caba 0%, #5d4157 100%);">
        <footer class="site-footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 footer-info">
                            <img src="public/images/logo.png" alt="" style="width: 50%;">
                            <p class="text-justify">
                                Công ty giao nhận đầu tiên tại Việt Nam được thành lập với sứ mệnh phục vụ nhu cầu vận chuyển chuyên nghiệp của các đối tác Thương mại điện tử trên toàn quốc.
                            </p>
                        </div>



                        <div class="col-lg-4 col-md-6 footer-contact">
                            <h4>Liên hệ</h4>
                            <p>
                                An Hòa, Hà Đông
                                Hà Nội, Việt Nam <br />

                            </p>

                            <div class="social-links">
                                <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
                                <a href="#" class="google-plus"><i class="fab fa-google-plus"></i></a>
                                <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
                                <a href=""><i class="fab fa-twitter    "></i></a>
                                <a href=""><i class="fab fa-instagram    "></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 footer-newsletter">
                            <h4>Nhận thông báo từ chúng tôi</h4>
                            <p>
                                Hãy để lại Email để nhận được những thông tin ưu đãi mới nhất và thông tin
                                dịch vụ mới trong thời gian tới.
                            </p>
                            <form action="#" method="post">
                                <input type="email" name="email" /><input type="submit" value="Đăng kí" />
                            </form>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-12">
                            <div class="border-top pt-5">
                                <p>

                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> Bản quyền thuộc về Boxe

                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <span class="text-center">
                                <a href="#myPage" title="To Top" class="text-decoration-none text-white">
                                    <i class="fas fa-chevron-circle-up " style="font-size:30px;"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            </div>


        </footer>
    </section>


    <script src="./public/js/app.js"></script>
</body>

</html>