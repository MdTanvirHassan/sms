<?php //if ($page['description'] != ""): ?>
    <?php //echo $page['description']; ?>
<?php //endif; ?>

<!doctype html>
<html lang="en">

<head>
    <style>

body {
    font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen-Sans, Ubuntu, Cantarell, Helvetica Neue, sans-serif;
    font-weight: 400;
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.6em;
    color: #999999;
    box-sizing: border-box;
    padding: 0;
    margin: 0px;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    color: #000 !important;
    font-family: "SolaimanLipi";
}

p {
    line-height: 1.5rem;
    font-family: "SolaimanLipi";
}

ul {
    list-style: none;
    float: left;
    width: 100%;
    padding: 0;
    padding-left: 0px !important;
}

ul li {
    /* display: inline-block; */
}

.dropdown-menu {
    animation: 0.5s slideup;
}

@keyframes slideup {
    from {
        transform: translateY(10%);
    }

    to {
        transform: translateY(0);
    }
}
.dropdown-menu{
    width: 200px;
    border-radius: 0;
}
.dropdown-menu li a.dropdown-item:hover{
    color: #fff;
}
.header {
    padding: 15px 0;

    text-align: center;
}

/* .header-bg{
    box-shadow: 0px -2px 6px 0px rgba(0,0,0,0.5);
  } */
.bg-color {
    background-color: #034F72;
    padding: 0px !important;
}

.navbar-wrapper .navbar ul li {
    border-right: 1px solid #fff;
}

.navbar-wrapper .navbar ul li a:hover {
    background-color: #74010D;
}

.nav-item .nav-link.active {
    background-color: #74010D;
}

.header img {
    width: 130px;
}

.school-name h1 {
    font-size: 30px;
    font-weight: 600;
}

.school-name h3 {
    font-size: 22px;
}

.school-name h4 {
    font-size: 20px;
}

ul li a.nav-link {
    padding: 8px 23px !important;
    color: #fff;
}

.title-section .top-marquee {
    background-color: #ededed;
    height: 45px;
}

.carousel-inner {
    background-repeat: no-repeat;
    background-position: 50%;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    margin: auto;
}

.carousel-item {
    height: 430px;
}

.carousel-item img {
    background-size: cover;
    background-position: 100%;
    background-repeat: no-repeat;
    min-width: 100%;
    min-height: 100%;
}

.marquee-title {
    position: absolute;
    background-color: #005de7;
    padding: 10px 10px;
    color: #fff;
    z-index: 1;
}

.title-section .top-marquee ul li a {
    padding: 10px 50px !important;
    text-decoration: none;
    color: #FA0000;
    display: inline-block;
    font-size: 14px;
}

.title-section .top-marquee ul li a:hover {
    color: #087C04;
}

.title-section .top-marquee ul li {
    display: inline-block;
}

.content-section {
    margin: 50px 0;
}

.history-school h3 {
    font-size: 18px;
    font-weight: 600;
    margin: 0px 0 15px;
    background-image: linear-gradient(120deg, #0245AF 0%, #138CDC 100%);
    display: inline-block;
    width: 100%;
    padding: 15px 5px;
    color: #fff !important;
}

.title-info h5,
.title-info-two h5,
.title-info-three h5,
.title-info-fore h5 {
    font-size: 15px;
    color: #fff !important;
    padding-top: 6px;
    font-weight: 500;
}

.title-info {
    padding: 7px 7px 7px 8px;
    background-color: transparent;
    background-image: linear-gradient(120deg, #A63247 0%, #DA526A 100%);
}

.title-info-two {
    padding: 7px 7px 7px 7px;
    background-color: transparent;
    background-image: linear-gradient(120deg, #07894C 0%, #38CE86 100%);
}

.title-info-three {
    padding: 7px 7px 7px 8px;
    background-color: transparent;
    background-image: linear-gradient(118deg, #985E04 0%, #D5901D 100%);
}

.title-info-fore {
    padding: 7px 7px 7px 7px;
    background-color: transparent;
    background-image: linear-gradient(120deg, #1D77B2 0%, #4CA7E2 100%);
}
.clearfix-card .float-start img{
    width: 100px;
    padding: 10px;
    margin: 18px;
}

.image-size {
    width: 100%;
    height: 250px !important;
}

.card-wrapper {
    margin: 15px 0;
    text-align: center;
    border-radius: 5px;
    border: 1px solid #ccc;
    display: inline-block;
    width: 100%;
}

.card-wrapper h5 {
    background-color: #0bd3de;
    color: #fff !important;
    padding: 15px 0;
}

.card-wrapper ul {
    padding: 15px;
}

.card-wrapper ul li a {
    display: inline-block;
    width: 100%;
    text-decoration: none;
    border-top: 1px solid #ccc;
    padding: 10px 0;
    color: #000;
}

.card-wrapper ul li a:hover {
    background: #0bd3de;
    color: #fff;
}

.footer {
    background-color: #034F72;
    padding: 100px 0;
}

.footer .left img {
    width: 150px;
    margin: 5px 0;
}

.footer .left-center h3 {
    color: #fff !important;
    text-transform: uppercase;
    font-size: 18px;
    font-weight: 700;
}

.footer .left-center {
    color: #fff;
}

.footer .left-center ul,
.footer .right ul {
    padding-left: 0px !important;
}

.footer .right-center,
.footer .right {
    padding-left: 0px !important;

}

.footer .right-center ul li,
.footer .right ul li {
    list-style: inside;
    color: #fff;
}

.footer .right-center ul li a,
.footer .right ul li a {
    text-decoration: none;
    color: #fff;
    font-size: 15px;
    padding: 12px 0;
}

.footer .right-center ul li a:hover,
.footer .right ul li a:hover {
    color: #ffe601;
}

.small-footer {
    background-color: #036390;
    padding: 15px 0px;
    color: #fff;
}

.list-button ul li a {
    text-decoration: none;
    padding: 10px 10px;
    display: inline-block;
    width: 100%;
    background-color: #D4172A;
    margin: 0 0 15px;
    color: #fff;
    font-weight: 500;
    font-size: 15px;
}

.list-button ul li a:hover {
    background-color: #087c04;
}

.list-button ul li a i {
    margin-right: 15px;
    font-size: 25px;
}

.notice-board h3,
.official-link h3 {
    font-size: 20px;
    font-weight: 600;
    margin: 10px 0;
    background-image: linear-gradient(120deg, #0245AF 0%, #138CDC 100%);
    display: inline-block;
    width: 100%;
    padding: 15px 5px;
    color: #fff !important;
}

.official-link ul {
    background-color: #EBEBEB;
    margin: -20px 0px 20px 0px;
    padding: 21px 17px 23px 17px;
}

.official-link ul li a i {
    font-size: 20px;
    margin-right: 15px;
}

.official-link ul li a {
    text-decoration: none;
    color: #54595f;
    margin-left: 15px;
    font-size: 14px;
    padding: 7px 0;
    display: inline-block;
}

.content-notice {
    display: inline-block;
    height: 400px;
}

.content-notice {
    height: 400px;
}

.content-notice ul li a {
    text-decoration: none;
    padding: 15px 0;
    display: inline-block;
    border-bottom: 1px solid #ccc;
    width: 100%;
}

/*managing comate start*/
.testimonial-item {
    background-image: linear-gradient(120deg, #0245AF 0%, #138CDC 100%);
    padding: 70px 30px;
    margin: 30px 15px;
    float: left;
}
.testimonial-item h4{
    color: #fff !important;
}

.testimonial-clients,
.teachers-sliders {
    overflow: hidden;
}

.testimonial-clients .testimonial-item .clearfix .float-start img,
.teachers-sliders .testimonial-item .clearfix .float-start img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
}

.testimonial-clients .testimonial-item .clearfix .float-end p,
.teachers-sliders .testimonial-item .clearfix .float-end p {
    font-size: 13px;
    text-transform: uppercase;
    color: #fff;
    font-weight: 500;
}

.testimonial-clients .testimonial-item .clearfix .float-start i,
.teachers-sliders .testimonial-item .clearfix .float-start i {
    position: relative;
    bottom: 0px;
    font-size: 20px;
    font-weight: 500;
    color: #fff;
    background-color: #0779e4;
    padding: 7px;
    border-radius: 25px;
    left: -25px;
    top: 25px;
}

.testimonial-clients .testimonial-item .clearfix .float-end,
.teachers-sliders .testimonial-item .clearfix .float-end {
    margin-top: 20px;
}

.testimonial-item .testimonial-p {
    margin-top: 30px;
    color: #fff !important;
}

.slick-center {
    background-color: #0779e4;
    color: #fff;
}

.slick-center .float-end p,
.slick-center .float-end h4 {
    color: #fff !important;
}

.slick-center.testimonial-item .clearfix .float-start i {
    background-color: #fff !important;
    color: #0779e4;
}

.testimonial-clients .slick-prev,
.teachers-sliders .slick-prev {
    margin-top: 27.9%;
    position: absolute;
    left: 45%;
    width: 80px;
    background-color: #0779e4;
    border: 0;
    border-radius: 25px;
    color: #fff;
    font-size: 12px;
}

.testimonial-clients .slick-next {
    left: 52%;
    position: relative;
    width: 80px;
    background-color: #0779e4;
    border: 0;
    border-radius: 25px;
    color: #fff;
    font-size: 12px;
    margin-top: 6px;
}

.achievements-wrapper {
    margin: 100px 0;
}

.achievements-items img {
    width: 100%;
}

.achievements-items {
    border: 1px solid #ccc;
    margin: 10px 0px !important;
    padding: 10px 0;
}

.teachers-bg {
    border-radius: 5px;
    padding: 15px 0;
}

.teachers-sliders .slick-center {
    background-color: #0779e4;
    color: #000;
}

.techers-wrap {
    height: auto;
    width: 100%;
    border: 1px solid #ccc;
    text-align: center;
    padding: 0;
}

.techers-wrap img {
    width: 100%;
    height: 300px;
}

.teachers-dig p{ color: #fff !important;}

.teachers-sliders .testimonial-item {
    background-color: transparent;
    padding: 0;
    margin: 15px;
    float: left;
}
.techers-wrap .teachers-dig h4{
    color: #fff !important;
}
.teachers-sliders .slick-next {
    left: 52%;
    position: relative;
    width: 80px;
    background-color: #0779e4;
    border: 0;
    border-radius: 25px;
    color: #fff;
    font-size: 12px;
    margin-top: 15px;
}

.content-principle h1 {
    text-transform: uppercase;
    font-weight: 600;
}

.content-principle h3,
.content-principle h4 {
    text-transform: uppercase;
    font-weight: 600;
    font-size: 16px;
    color: #9A462D !important;
}

.priciple-images ul li {
    float: left;
    list-style: none;
}

.priciple-images ul li a {
    width: 50px;
    height: 50px;
    display: inline-block;
    margin: 13px;
    text-align: center;
    padding: 9px 0px;
    background-color: #034f72;
    color: #fff;
    font-size: 20px;
    border-radius: 7px;
}

.teachers-item .card-body strong {
    text-align: center;
    text-decoration: none;
    font-size: 20px;
    font-weight: 600;
    display: inline-block;
    width: 100%;
}

.teachers-item .card-body span {
    text-align: center;
    text-decoration: none;
    font-size: 15px;
    display: inline-block;
    width: 100%;
    color: #ccc;
}

.teachers-images ul {
    display: inline-block;
    width: 100%;
}

.teachers-images ul li {
    float: left;
    list-style: none;
}

.teachers-images ul li a {
    width: 40px;
    height: 40px;
    display: inline-block;
    margin: 13px 18px;
    text-align: center;
    padding: 6px 0px;
    background-color: #034f72;
    color: #fff;
    font-size: 17px;
    border-radius: 50%;
}

.teachers-images ul li a:hover {
    background-color: #b0aeae;
    color: #000;
}
.clearfix-card .float-end{
    width: 280px;
}
.clearfix-card ul li {
    margin: 7px 0;
}
.clearfix-card ul li a{
 text-decoration: none;
 color: #000;
 font-size: 14px;
padding: 5px;
}
.clearfix-card ul li a:hover{
    color:#087c04;
}
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link href="css/style.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <link href="font/font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>


    
    
    <section class="title-section">
        <div class="container">
            <div class="col-12 col-sm-12">
                <div class="marquee-title">
                    <span>বিশেষ ঘোষণা</span>
                </div>
                <div class="top-marquee">

                    <marquee behavior='scroll' direction='left' scrollamount='5' onmouseover='this.stop()' onmouseout='this.start()'>
                        <ul>
                            <li>
                                <a href="#">
                                    <span>◉ সাত্তার জুট মিলস মডেল উচ্চ
                                        বিদ্যালয়ের অফিসিয়াল ওয়েবসাইটে আপনাকে
                                        স্বাগতম।</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>◉ আগামী নির্বাচনী পরীক্ষা ৭
                                        আগস্টের পরিবর্তে ৫ সেপ্টেম্বর
                                        অনুষ্ঠিত হবে</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>◉আমাদের স্কুলে একজন গণিত শিক্ষক
                                        নিয়োগ দেয়া হবে</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>◉ ১৫ আগস্ট আমাদের স্কুলে অনুষ্ঠান
                                        আয়োজন করা হবে</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>◉ ১৬ আগস্ট স্কুল বন্ধ
                                        থাকিবে</span>
                                </a>
                            </li>
                        </ul>
                    </marquee>
                </div>
            </div>
        </div>
    </section>
    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="col-md-12">
                        <div class="history-school p-1 mb-3">
                            <h3>প্রতিষ্ঠানের ইতিহাস</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="images/history.jpg" name="" alt="" class="img-fluid image-size">
                        </div>
                        <div class="col-md-8">
                            <p>
                                জীবনের শ্রেষ্ঠ অর্জন হল শিক্ষা । শিক্ষার প্রথম
                                এবং প্রধান কাজ হল পরিবেশের সাথে শিক্ষার্থীর
                                সংগতি বিধান করা । শিক্ষা অর্জনে আনুষ্ঠানিক
                                শিক্ষার গুরুত্ব অনস্বীকার্য আর আনুষ্ঠানিক শিক্ষা
                                অর্জনে শিক্ষা প্রতিষ্ঠান তথা বিদ্যালয়ের কোন
                                বিকল্প নেই । তাই দিনাজপুর সরকারি বালিকা উচ্চ
                                বিদ্যালয় দীর্ঘ দিন ধরে শিক্ষা অর্জনের লক্ষ্যে সে
                                ভূমিকা নিষ্ঠার সাথে পালন করে আসছে । উত্তরাঞ্চল
                                তথা সমগ্র বাংলাদেশে যে কয়টি আদর্শ শিক্ষা
                                প্রতিষ্ঠান রয়েছে, দিনাজপুর সরকারি বালিকা উচ্চ
                                বিদ্যালয় নিঃসন্দেহে তাদের অন্যতম ।
                                সু-প্রসিদ্ধ কাটারী ভোগ চাল আরত রসাল লিচুর জেলা
                                দিনাজপুর । সেই জেলার মাঝ দিয়ে বয়ে গেছে পুনর্ভবা
                                নদী । এই নদীর প্রায় ছয় কিলোমিটার পুর্বে
                                সমান্তরাল ভাবে বহমান ছিল গর্ভেশ্বরী নদী । কালের
                                বিবর্তনে যা আজ মরা নদীর রূপ নিয়েছে । এই দুই নদীর
                                মাঝখানে গড়ে উঠেছিল একটি বন্দর নগরী । এই বন্দর
                                নগরীর আধুনিক রূপ আজকের দিনাজপুর শহর । আর এই
                                শহরের প্রাণ কেন্দ্রে এক মনোরম পরিবেশে এই
                                বিদ্যালয়টি অবস্থিত ।
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="history-school p-1 mb-3">
                            <h3>প্রধান শিক্ষকের বাণী</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="images/21.00.40.jpg" name="" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <p>
                                "শিক্ষা হলো আলো, জ্ঞানের উজ্জ্বল আলো, যা আমাদের জীবনে প্রজন্মের উন্নতি এবং সমাজের সুধারণে প্রথম পথ প্রদর্শন করে। আমরা শিক্ষার মাধ্যমে নতুন দিনের প্রথম আলোকিত পথে অগ্রসর হতে পারি, এবং এই উজ্জ্বল পথে আমাদের শিক্ষার্থীদের আগামী দিনের নেতৃত্বক্ষম নাগরিক হিসেবে সমর্থ করতে পারি।</p>

                            <p> আমরা শিক্ষার মাধ্যমে জ্ঞানের আলো জাগিয়ে, সমস্যা সমাধানে উপস্থিত হতে সমর্থ করি, এবং মানবিক মূল্যগুলির প্রতি সদয় আগ্রহ জাগিয়ে দেই। আমরা যেসব ছাত্র-ছাত্রীদের মাধ্যমে নতুন আলো বিশ্বের আকাশে এনে প্রতিষ্ঠা দেওয়ার দিকে চলতে চাই, তাদের সাথে সাথে এই পথে এগিয়ে যাওয়া নিশ্চিত করে নেই। আমরা একটি সাধারণ শিক্ষা প্রতিষ্ঠান থেকে একটি অসীম সম্পন্ন জীবনের নির্মাতা তৈরি করতে সাহায্য করি।</p>

                            <p> এই স্কুল একটি শিক্ষার মন্দির, একটি জ্ঞানের উজ্জ্বল অগ্নিকুণ্ড, এবং আমাদের ভবিষ্যতের শুভ আলোকের উত্তরণ ক্ষেত্র। আমরা গর্বিত এবং নির্ভরশীল, এবং এই সফল পথে এগিয়ে যাওয়ার সাথে সাথে আমরা এই সমৃদ্ধ সমাজে একজন ভাল নাগরিক হিসেবে আমাদের দেশের উন্নতির দিকে যাচ্ছি।"</p>

                            ফেমাস ইন্সটিটিউট হাই স্কুল
                            </p>
                        </div>
                    </div>
                    <div class="row mt-5 mb-5">
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="clearfix clearfix-card">
                                    <div class="title-info">
                                        <h5 class="mt-0">ছাত্রছাত্রীদের তথ্য</h5>
                                    </div>
                                    <div class="float-start">
                                        <img src="images/menu01.jpg-copy-150x150.png" name="" alt="" class="align-self-center mr-3">
                                    </div>
                                    <div class="float-end">
                                        <ul>
                                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">ছাত্রছাত্রীর আসন সংখ্যা</a></li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">ভর্তি তথ্য</a></li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">নোটিশ</a></li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">রুটিন</a></li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">কৃতি শিক্ষার্থী</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="clearfix clearfix-card">
                                    <div class="title-info-two">
                                        <h5 class="mt-0">শিক্ষকদের তথ্য</h5>
                                    </div>
                                    <div class="float-start">
                                        <img src="images/te.png" name="" alt="" class="align-self-center mr-3">
                                    </div>
                                    <div class="float-end">
                                        <ul>
                                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">শিক্ষকবৃন্দ</a></li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">শূণ্যপদের তালিকা</a></li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">প্রাক্তন প্রধান শিক্ষক</a></li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">কর্মকর্তা কর্মচারী</a></li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">পরিচালনা পরিষদ</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="clearfix clearfix-card">
                                    <div class="title-info-three">
                                        <h5 class="mt-0">ডাউনলোড</h5>
                                    </div>
                                    <div class="float-start">
                                        <img src="images/do-150x150.png" name="" alt="" class="align-self-center mr-3">
                                    </div>
                                    <div class="float-end">
                                        <ul>
                                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">১ম সাময়িকি পরীক্ষার রুটিন ডাউনলোড</a></li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">এসএসসি পরীক্ষার রুটিন ডাউনলোড</a></li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">ছুটির নোটিশ ডাউনলোড</a></li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">ভর্তি ফরম ডাউনলোড</a></li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">পরীক্ষার রুটিন ডাউনলোড</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="clearfix clearfix-card">
                                    <div class="title-info-fore">
                                        <h5 class="mt-0">একাডেমীক তথ্য</h5>
                                    </div>
                                    <div class="float-start">
                                        <img src="images/ca-150x150.png" name="" alt="" class="align-self-center mr-3">
                                    </div>
                                    <div class="float-end">
                                        <ul>
                                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">নোটিশ</a></li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">কক্ষ সংখ্যা</a></li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">ছুটির তালিকা</a></li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">মাল্টিমিডিয়া ক্লাসরুম</a></li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">ছাত্রছাত্রীর আসন সংখ্যা</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="list-button">
                        <ul>
                            <li><a href="#" class="button"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>ভর্তি তথ্য</a></li>
                            <li><a href="#" class="button"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>ভর্তি ফরম</a></li>
                            <li><a href="#" class="button"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>ফটোগ্যালারী</a></li>
                            <li><a href="#" class="button"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>ভিডিও গ্যালারী</a></li>
                        </ul>
                    </div>
                    <div class="notice-board">
                        <h3>নোটিশ বোর্ড</h3>
                        <div class="content-notice">
                            <marquee behavior='scroll' direction='up' scrollamount='3' onmouseover='this.stop()' onmouseout='this.start()'>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <span>◉ সাত্তার জুট মিলস মডেল উচ্চ
                                                বিদ্যালয়ের অফিসিয়াল ওয়েবসাইটে আপনাকে
                                                স্বাগতম।</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>◉ আগামী নির্বাচনী পরীক্ষা ৭
                                                আগস্টের পরিবর্তে ৫ সেপ্টেম্বর
                                                অনুষ্ঠিত হবে</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>◉আমাদের স্কুলে একজন গণিত শিক্ষক
                                                নিয়োগ দেয়া হবে</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>◉ ১৫ আগস্ট আমাদের স্কুলে অনুষ্ঠান
                                                আয়োজন করা হবে</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>◉ ১৬ আগস্ট স্কুল বন্ধ
                                                থাকিবে</span>
                                        </a>
                                    </li>
                                </ul>
                            </marquee>
                        </div>
                    </div>
                    <div class="official-link">
                        <h3>অফিসিয়াল লিংক</h3>
                        <ul>
                            <li><a href="#"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>শিক্ষা মন্ত্রণালয়</a></li>
                            <li><a href="#"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>ব্যানবেইজ</a></li>
                            <li><a href="#"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>সেকায়েপ</a></li>
                            <li><a href="#"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>এসএসসি/এইচএসসি ফলাফল</a></li>
                            <li><a href="#"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>সেকায়েপ</a></li>
                        </ul>
                    </div>
                    <div class="official-link">
                        <h3>গুরুত্বপূর্ণ তথ্য</h3>
                        <ul>
                            <li><a href="#"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>ই-বুক</a></li>
                            <li><a href="#"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>শিক্ষক বাতায়ন</a></li>
                            <li><a href="#"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>জাতীয় শিক্ষা বোর্ড</a></li>
                            <li><a href="#"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>এসএসসি/এইচএসসি ফলাফল</a></li>
                            <li><a href="#"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>মাধ্যমিক ও উচ্চ শিক্ষা অধিদপ্তর</a></li>
                            <li><a href="#"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>মাল্টিমিডিয়া ক্লাসরুম ম্যানেজমেন্ট</a></li>
                            <li><a href="#"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>বিদ্যালয়ের অফিসিয়াল ফেসবুক পেজ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-section" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="services-title text-center">
                        <h5>ম্যানেজিং কমিটি</h5>
                        <h2 class="text-lg">আমাদের সফল ম্যানেজিং কমিটি</h2>
                    </div>
                </div>

                <!-- offset-md-3 -->
                <div class="col-md-12">
                    <div class="testimonial-clients teachers-bg">

                        <div class="testimonial-item col-md-4">
                            <div class=" clearfix">
                                <div class="float-start">
                                    <img src="images/15.07.00.jpg" alt="">
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                                <div class="float-end">
                                    <h4>ROGER SCOTT</h4>
                                    <p>MARKETING MANAGER</p>
                                </div>
                            </div>
                            <p class="testimonial-p">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>


                        <div class="testimonial-item col-md-4">
                            <div class=" clearfix">
                                <div class="float-start">
                                    <img src="images/3.jpg" alt="">
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                                <div class="float-end">
                                    <h4>ROGER SCOTT</h4>
                                    <p>MARKETING MANAGER</p>
                                </div>
                            </div>
                            <p class="testimonial-p">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>


                        <div class="testimonial-item col-md-4">
                            <div class=" clearfix">
                                <div class="float-start">
                                    <img src="images/2.jpg" alt="">
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                                <div class="float-end">
                                    <h4>ROGER SCOTT</h4>
                                    <p>MARKETING MANAGER</p>
                                </div>
                            </div>
                            <p class="testimonial-p">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>


                        <div class="testimonial-item col-md-4">
                            <div class=" clearfix">
                                <div class="float-start">
                                    <img src="images/1.jpg" alt="">
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                                <div class="float-end">
                                    <h4>ROGER SCOTT</h4>
                                    <p>MARKETING MANAGER</p>
                                </div>
                            </div>
                            <p class="testimonial-p">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>

                        <div class="testimonial-item col-md-4">
                            <div class=" clearfix">
                                <div class="float-start">
                                    <img src="images/4.jpg" alt="">
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                                <div class="float-end">
                                    <h4>ROGER SCOTT</h4>
                                    <p>MARKETING MANAGER</p>
                                </div>
                            </div>
                            <p class="testimonial-p">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </section>



    <section class="achievements-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="official-link">
                        <h3>Achievements</h3>
                    </div>
                    <div class="row achievements-items">
                        <div class="col-md-4 float-left">
                            <img class="img-responsive" src="images/5.jpg" alt="">
                        </div>
                        <div class="col-md-8 float-right">
                            <h5 class="mt-0">Media heading</h5>
                            <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</p>
                            <span>Date:</span>
                        </div>
                    </div>
                    <div class="row achievements-items">
                        <div class="col-md-4 float-left">
                            <img class="img-responsive" src="images/5.jpg" alt="">
                        </div>
                        <div class="col-md-8 float-right">
                            <h5 class="mt-0">Media heading</h5>
                            <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</p>
                            <span>Date:</span>
                        </div>
                    </div>
                    <div class="row achievements-items">
                        <div class="col-md-4 float-left">
                            <img class="img-responsive" src="images/5.jpg" alt="">
                        </div>
                        <div class="col-md-8 float-right">
                            <h5 class="mt-0">Media heading</h5>
                            <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</p>
                            <span>Date:</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="official-link">
                        <h3>Events</h3>
                    </div>
                    <div class="row achievements-items">
                        <div class="col-md-4 float-left">
                            <img class="img-responsive" src="images/5.jpg" alt="">
                        </div>
                        <div class="col-md-8 float-right">
                            <h5 class="mt-0">Media heading</h5>
                            <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</p>
                            <span>Date:</span>
                        </div>
                    </div>
                    <div class="row achievements-items">
                        <div class="col-md-4 float-left">
                            <img class="img-responsive" src="images/5.jpg" alt="">
                        </div>
                        <div class="col-md-8 float-right">
                            <h5 class="mt-0">Media heading</h5>
                            <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</p>
                            <span>Date:</span>
                        </div>
                    </div>
                    <div class="row achievements-items">
                        <div class="col-md-4 float-left">
                            <img class="img-responsive" src="images/5.jpg" alt="">
                        </div>
                        <div class="col-md-8 float-right">
                            <h5 class="mt-0">Media heading</h5>
                            <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</p>
                            <span>Date:</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="testimonial-section mb-5" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="services-title text-center mt-5">
                        <h5>শিক্ষক</h5>
                        <h2 class="text-lg">আমাদের সফল শিক্ষক</h2>
                    </div>
                </div>

                <!-- offset-md-3 -->
                <div class="col-md-12">
                    <div class="teachers-sliders">

                        <div class="testimonial-item col-md-4">
                            <div class="techers-wrap">
                                <img src="images/15.07.00.jpg" alt="">
                                <div class="teachers-dig">
                                    <h4>ROGER SCOTT</h4>
                                    <p>MARKETING MANAGER</p>
                                </div>
                            </div>
                        </div>


                        <div class="testimonial-item col-md-4">
                            <div class="techers-wrap">
                                <img src="images/3.jpg" alt="">
                                <div class="teachers-dig">
                                    <h4>ROGER SCOTT</h4>
                                    <p>MARKETING MANAGER</p>
                                </div>
                            </div>

                        </div>


                        <div class="testimonial-item col-md-4">
                            <div class="techers-wrap">
                                <img src="images/2.jpg" alt="">
                                <div class="teachers-dig">
                                    <h4>ROGER SCOTT</h4>
                                    <p>MARKETING MANAGER</p>
                                </div>
                            </div>

                        </div>


                        <div class="testimonial-item col-md-4">
                            <div class="techers-wrap">
                                <img src="images/1.jpg" alt="">
                                <div class="teachers-dig">
                                    <h4>ROGER SCOTT</h4>
                                    <p>MARKETING MANAGER</p>
                                </div>
                            </div>

                        </div>

                        <div class="testimonial-item col-md-4">
                            <div class="techers-wrap">
                                <img src="images/4.jpg" alt="">
                                <div class="teachers-dig">
                                    <h4>ROGER SCOTT</h4>
                                    <p>MARKETING MANAGER</p>
                                </div>
                            </div>

                        </div>
                        <div class="testimonial-item col-md-4">
                            <div class="techers-wrap">
                                <img src="images/4.jpg" alt="">
                                <div class="teachers-dig">
                                    <h4>ROGER SCOTT</h4>
                                    <p>MARKETING MANAGER</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>


            </div>
        </div>
    </section>


    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="left">
                        <img src="images/logo.png" name="" alt="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="left-center">
                        <h3>Address:</h3>
                        <p>Sattar Jute Mills Model High School, Kanchan, Rupgonj, Narayangonj.</p>
                        <ul>
                            <li>Tel : 01717-232810</li>
                            <li>Email: info@sjmmhs.com</li>
                            <li> Web: sjmmhs.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="right-center">
                        <ul>
                            <li><a href="#">ই-বুক</a></li>
                            <li><a href="#">শিক্ষক বাতায়ন</a></li>
                            <li><a href="#">জাতীয় শিক্ষা বোর্ড</a></li>
                            <li><a href="#">এসএসসি/এইচএসসি ফলাফল</a></li>
                            <li><a href="#">মাধ্যমিক ও উচ্চ শিক্ষা অধিদপ্তর</a></li>
                            <li><a href="#">মাল্টিমিডিয়া ক্লাসরুম ম্যানেজমেন্ট</a></li>
                            <li><a href="#">বিদ্যালয়ের অফিসিয়াল ফেসবুক পেজ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="right">
                        <ul>
                            <li><a href="#">ই-বুক</a></li>
                            <li><a href="#">শিক্ষক বাতায়ন</a></li>
                            <li><a href="#">জাতীয় শিক্ষা বোর্ড</a></li>
                            <li><a href="#">এসএসসি/এইচএসসি ফলাফল</a></li>
                            <li><a href="#">মাধ্যমিক ও উচ্চ শিক্ষা অধিদপ্তর</a></li>
                            <li><a href="#">মাল্টিমিডিয়া ক্লাসরুম ম্যানেজমেন্ট</a></li>
                            <li><a href="#">বিদ্যালয়ের অফিসিয়াল ফেসবুক পেজ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="small-footer">
        <div class="container">
            <div class="col-md-12">
                <p class="text-center">Copyrights <i class="fa fa-copyright"></i> 2010-23. All Rights Reserved By <a href="#">4axiz IT Ltd.</a></span></p>
            </div>
        </div>
    </section>




    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="font/slick/slick.min.js" integrity="" crossorigin="anonymous"></script>
    <script src="js/custom.js" integrity="" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
  
  $('.testimonial-clients').slick({
      centerMode: true,
      centerPadding: '60px',
      slidesToShow: 3,
      autoplay: true,
      autoplaySpeed: 2000,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        }
      ]
    });

    $('.teachers-sliders').slick({
      centerMode: true,
      centerPadding: '60px',
      slidesToShow: 4,
      autoplay: true,
      autoplaySpeed: 2000,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        }
      ]
    });
  });

 
    </script>
</body>

</html>