<?php
include 'script-login.php';
include "conn/connect.php";
@$key_search = $_GET["s"];
if ($key_search) {
    $sql = "SELECT * FROM articles WHERE topic_name LIKE '%" . $key_search . "%' ";
    $q = mysqli_query($conn, $sql) or die("Error in query: $sql " . mysqli_error($conn));
} else {
    $sql = "SELECT * FROM articles ORDER BY id DESC LIMIT 0,6 ";
    $q = mysqli_query($conn, $sql) or die("Error in query: $sql " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="th">

<head>
    <title>g2gbet168 คาสิโนออนไลน์ บาคาร่า มั่นคงที่สุดในไทย ฝาก ถอน ออโต้ เริ่มต้นเพียง 1 บาท</title>
    <meta name="title" content="g2gbet168 คาสิโนออนไลน์ บาคาร่า มั่นคงที่สุดในไทย ฝาก ถอน ออโต้ เริ่มต้นเพียง 1 บาท " />
    <meta name="description" content="g2gbet168 เว็บไซต์ของเรา คือผู้ให้บริการ เกมเดิมพันพนันออนไลน์ ครบวงจร ในเว็บไซต์จะมีเกมเดิมพันทุกรูปแบบ เปิดให้บริการ ไม่ว่าจะเป็นเกมเดิมพัน คาสิโนสด เดิมพันบาคาร่า เกมสล็อต เกมยิงปลา ลอตเตอรี่ บริการครบทุกรูปแบบ นอกจากนั้นยังโดดเด่น ในด้านการเสนอ ตลาดการเดิมพันกีฬา ที่ดีที่สุด" />

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="content-language" content="th" />
    <meta http-equiv="content-type" content="text/html;" charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="robots" content="index,follow" />
    <meta name="Author" content="g2gbet168 ">
    <meta name="googlebots" content="all">
    <meta name="audience" content="all">
    <meta name="Rating" content="General">
    <meta name="distribution" content="Global">
    <meta name="allow-search" content="yes">

    <meta property="og:locale" content="th_TH" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="g2gbet168 คาสิโนออนไลน์ บาคาร่า มั่นคงที่สุดในไทย ฝาก ถอน ออโต้ เริ่มต้นเพียง 1 บาท" />
    <meta property="og:description" content="g2gbet168 เว็บไซต์ของเรา คือผู้ให้บริการ เกมเดิมพันพนันออนไลน์ ครบวงจร ในเว็บไซต์จะมีเกมเดิมพันทุกรูปแบบ เปิดให้บริการ ไม่ว่าจะเป็นเกมเดิมพัน คาสิโนสด เดิมพันบาคาร่า เกมสล็อต เกมยิงปลา ลอตเตอรี่ บริการครบทุกรูปแบบ นอกจากนั้นยังโดดเด่น ในด้านการเสนอ ตลาดการเดิมพันกีฬา ที่ดีที่สุด" />
    <meta property="og:url" content="#/" />
    <meta property="og:site_name" content="g2gbet" />
    <meta property="og:image" content="./img/logo-g2gbet168.webp" />

    <meta property="twitter:url" content="#/">
    <meta property="twitter:image" content="./img/logo-g2gbet168.webp">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="g2gbet168 คาสิโนออนไลน์ บาคาร่า มั่นคงที่สุดในไทย ฝาก ถอน ออโต้ เริ่มต้นเพียง 1 บาท" />
    <meta name="twitter:description" content="g2gbet168 เว็บไซต์ของเรา คือผู้ให้บริการ เกมเดิมพันพนันออนไลน์ ครบวงจร ในเว็บไซต์จะมีเกมเดิมพันทุกรูปแบบ เปิดให้บริการ ไม่ว่าจะเป็นเกมเดิมพัน คาสิโนสด เดิมพันบาคาร่า เกมสล็อต เกมยิงปลา ลอตเตอรี่ บริการครบทุกรูปแบบ นอกจากนั้นยังโดดเด่น ในด้านการเสนอ ตลาดการเดิมพันกีฬา ที่ดีที่สุด" />
    <meta name="twitter:site" content="g2gbet168">
    <meta name="twitter:creator" content="g2gbet168">

    <link rel="canonical" href="#/" />
    <link rel="alternate" href="#/" hreflang="th-TH" />

    <link rel="shortcut icon" href="./favicon.webp" type="image/x-icon" />
    <link rel="icon" href="./favicon.webp" type="image/x-icon" />
    <link rel="apple-touch-icon" href="./favicon.webp" />

    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "url": "#/",
            "logo": "#/img/logo-g2gbet168.webp"
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebPage",
            "name": "g2gbet168",
            "speakable": {
                "@type": "SpeakableSpecification",
                "xPath": [
                    "/html/head/title",
                    "/html/head/meta[@name='description']/@content"
                ]
            },
            "url": "#/"
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "url": "#/",
            "name": "g2gbet168",
            "description": "g2gbet168 คาสิโนออนไลน์ บาคาร่า มั่นคงที่สุดในไทย",
            "potentialAction": [{
                "@type": "SearchAction",
                "target": {
                    "@type": "EntryPoint",
                    "urlTemplate": "#/?s={search_term_string}"
                },
                "query-input": "required name=search_term_string"
            }]
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "name": "g2gbet168"
            }]
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Store",
            "image": [
                "#/img/logo-g2gbet168.webp",
                "#/img/g2gbet168img-01.webp",
                "#/img/g2gbet168img-02.webp"
            ],
            "name": "g2gbet168",
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "TH"
            },
            "url": "#/",
            "priceRange": "฿฿฿",
            "telephone": "+6696-921-9245",
            "openingHoursSpecification": [{
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": [
                        "Monday",
                        "Tuesday",
                        "Wednesday",
                        "Thursday",
                        "Friday",
                        "Saturday"
                    ],
                    "opens": "08:00",
                    "closes": "23:59"
                },
                {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": "Sunday",
                    "opens": "08:00",
                    "closes": "23:00"
                }
            ]

        }
    </script>
    <style>
        <?php
        include('bootstrap/bootstrap.css');
        include('css/style.css');
        ?>
    </style>
</head>

<body>
    <header class="header" style="overflow-x: hidden;">
        <button class="openmenu" type="button" onclick="openNav()"><span>&#9776;</span></button>
        <div class="container-fluid px-0 fluid-head">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-3 text-center">
                    <a href="./">
                        <img data-src="./img/logo-sabai999.webp" class="lazy img-fluid" width="293" height="153" alt="logo sabai999">
                    </a>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-9 f_right">
                    <form action="" method="POST">
                        <div class="group-input">
                            <label for="int-username"><img data-src="./img/icon/ic-user.webp" class="lazy img-fluid" width="35" height="35" alt="icon username"> Personal ID</label>
                            <input type="text" class="int-username" name="user" placeholder="Username" required>
                        </div>
                        <div class="group-input">
                            <label for="int-password"><img data-src="./img/icon/ic-pass.webp" class="lazy img-fluid" width="35" height="35" alt="icon username"> Security Code</label>
                            <input type="text" class="int-password" name="user" placeholder="Password" required>
                        </div>
                        <button type="submit" name="login" class="btn-login">Log In</button>
                    </form>
                </div>
            </div>
        </div>
        <nav class="navlink">
            <a href="./">sabai999</a>
            <a href="./casino/">คาสิโน</a>
            <a href="./lotto/">หวย</a>
            <a href="./slot/">สล็อต</a>
            <a href="./sport/">กีฬา</a>
            <a href="./entrance/">ทางเข้า</a>
            <a href="./register/">สมัคร</a>
            <a href="./getmoney/">ลิงค์รับทรัพย์</a>
            <a href="./contact/">ติดต่อ</a>
        </nav><br>
        <div class="slideshow-container mb-1" >
            <div class="mySlides">
                <img data-src="./img/banner-sabai999-01.webp" class="lazy img-fluid" width="100%" height="100%" alt="banner-sabai999">
            </div>
            <div class="mySlides">
                <img data-src="./img/banner-sabai999-02.webp" class="lazy img-fluid" width="100%" height="100%" alt="banner-sabai999">
            </div>
            <div class="mySlides">
                <img data-src="./img/banner-sabai999-03.webp" class="lazy img-fluid" width="100%" height="100%" alt="banner-sabai999">
            </div>
            <a class="prevs" onclick="plusSlides(-1)"><img data-src="./img/img-prevs.webp" class="lazy img-fluid" width="62" height="84" alt="prev"></a>
            <a class="nexts" onclick="plusSlides(1)"><img data-src="./img/img-nexts.webp" class="lazy img-fluid" width="62" height="84" alt="next"></a>
        </div>
        <div class="container text-center" >
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <br>
        <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">
                <img data-src="./img/logo-sabai999.webp" class="lazy img-max " width="291" height="151" alt="logo sabai999">
             <a href="./">sabai999</a>
            <a href="./casino/">คาสิโน</a>
            <a href="./lotto/">หวย</a>
            <a href="./slot/">สล็อต</a>
            <a href="./sport/">กีฬา</a>
            <a href="./entrance/">ทางเข้า</a>
            <a href="./register/">สมัคร</a>
            <a href="./getmoney/">ลิงค์รับทรัพย์</a>
            <a href="./contact/">ติดต่อ</a>
            </div>
        </div>

    </header>
    <section class="card_header">
        <div class="flex-box-container">
            <div class="fixd_width box_1">
                <img data-src="./img/img-headerstep01.webp" class="lazy img-fluid" width="60" height="61" alt="สมัครบัญชี">
            </div>
            <div class="fixd_width box_2">
                <div class="cg"></div>
                <img data-src="./img/img-headerstep02.webp" class="lazy img-fluid" width="60" height="61" alt="กรอกโปรไฟล์">
            </div>
            <div class="fixd_width box_3">
                <div class="cg"></div>
                <img data-src="./img/img-headerstep03.webp" class="lazy img-fluid" width="60" height="61" alt="ฝากเงินเดิมพัน">
            </div>
            <div class="fixd_width box_4">
                <div class="cg"></div>
                <img data-src="./img/img-headerstep04.webp" class="lazy img-fluid" width="60" height="61" alt="เริ่มต้นเดิมพัน">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3 my-1">
                    <strong class="str_bd" style="border-bottom:5px solid #ec1e82;"><span style="color: #ec1e82;">01</span>สมัครบัญชี</strong>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 my-1">
                    <strong class="str_bd" style="border-bottom:5px solid #555555;"><span style="color: #555555;">02</span>กรอกโปรไฟล์</strong>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 my-1">
                    <strong class="str_bd" style="border-bottom:5px solid #000000;"><span>03</span>ฝากเงินเดิมพัน</strong>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 my-1">
                    <strong class="str_bd" style="border-bottom:5px solid #a0a0a0;"><span style="color: #a0a0a0;">04</span>เริ่มต้นเดิมพัน</strong>
                </div>
            </div>

            <br>
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="card_dark none-mb">
                        <img data-src="./img/logo-sabai999.webp" class="lazy img-max" width="200" height="153" alt="logo sabai999">
                        <br>
                        <div class="px-1">
                            <a class="a_border" href="">Add Line</a>
                            <a class="a_border" href="">ฝาก - ถอน</a>
                            <a class="a_border" href="">สมัครสมาชิก</a>
                            <a class="a_border" href="">โปรโมชั่น</a>
                            <a class="a_border" href="">คำถามที่พบบ่อย</a>
                            <a class="a_border" href="">บริการ 24 ชม.</a>
                        </div>
                    </div>
                    <br>
                    <div class="card_dark">
                        <p class="mb-0 bg_demo">ทดลองเล่น</p>
                        <div class="box-flex">
                            <img data-src="./img/sabai999-demo.webp" class="lazy img-fluid" width="40" height="243" alt="sabai999ทดลองเล่น">
                            <div class="boxtext">
                                <p class="mb-0">มีบริการ ทดลองเล่น
                                    คาสิโน ทดลองเล่น
                                    บาคาร่า ทดลองเล่น
                                    สล็อต ตัวช่วยดีๆ ที่ไม่ควรมองข้าม </p>

                                <a href="" class="link-play">play</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="card_dark">
                        <div class="row">
                            <div class="col-lg-6 my-2 pd-10">
                                <p class="p_mode">หมวด คาสิโนสด</p>
                                <div class="box-flex">
                                    <img data-src="./img/mode-casino.webp" class="lazy img-fluid" width="40" height="243" alt="หมวด คาสิโนสด">
                                    <div class="boxtext">
                                        <p>บริการเกมคาสิโนสดมากมาย แบ่งออกเป็นเกมส์บาคาร่า รูเล็ต ไฮโล เสือมังกร แถมยังมีบริการ ห้องเกมคาสิโนมากกว่า 10 ห้อง</p>
                                        <a href="./casino/" class="link-play">play</a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6 my-2 pd-10">
                                <p class="p_mode">หมวด พนันกีฬา</p>
                                <div class="box-flex">
                                    <img data-src="./img/mode-sport.webp" class="lazy img-fluid" width="40" height="243" alt="หมวด พนันกีฬา">
                                    <div class="boxtext">
                                        <p>มีเกมกีฬาให้เลือกได้มากมาย ไม่ว่าจะเป็น กีฬาฟุตบอล บาสเกตบอล อเมริกันฟุตบอล เบสบอล มวยสากล เทนนิส แบดมินตัน และอื่นๆ อีกมากมาย </p>
                                        <a href="./sport/" class="link-play">play</a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6 my-2 pd-10">
                                <p class="p_mode">หมวด ลอตเตอรี่ </p>
                                <div class="box-flex">
                                    <img data-src="./img/mode-lotto.webp" class="lazy img-fluid" width="40" height="243" alt="หมวด ลอตเตอรี่">
                                    <div class="boxtext">
                                        <p>ขาดไม่ได้ สำหรับบริกา รเดิมพันแทงหวย ซื้อหวยออนไลน์ การเสี่ยงโชคที่คนไทย ชื่นชอบมากที่สุด บริการหวยครบ เว็บตรง ปลอดภัย </p>
                                        <a href="./lotto/" class="link-play">play</a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6 my-2 pd-10">
                                <p class="p_mode">หมวด เกมสล็อต</p>
                                <div class="box-flex">
                                    <img data-src="./img/mode-slot.webp" class="lazy img-fluid" width="40" height="243" alt="หมวด เกมสล็อต">
                                    <div class="boxtext">
                                        <p>ทางเว็บได้รวมค่ายเกมสล็อตออนไลน์ชั้นนำ เข้ามาให้คุณลูกค้า เลือกเล่นแบบจุใจได้ทั้งวัน อาทิ Joker Gaming, Fox Slot, Pocket Games Soft</p>
                                        <a href="./slot/" class="link-play">play</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    if (!$key_search) {
    ?>
        <article class="content">
            <section class="main-content">
                <div class="container">
                    <div class="bg-pink">
                        <h1 class="text-center" style="color: #fff100;">sabai999</h1>
                        <p class="mb-0 white"><strong>sabai999</strong> เว็บพนันออนไลน์ ที่มาพร้อมระบบการเล่น พนันที่ทันสมัยที่สุด ผู้ให้บริการเกมพนันออนไลน์ รวมเอาเกมเดิมพันมากมาย หลากหลายค่าย เข้ามาให้เลือกเดิมพัน เล่นครบที่เว็บไซต์เดียว มอบความสนุกสนาน กับการเดิมพัน เกมพนันออนไลน์ ไม่มีเบื่อ ด้วยมือถือ สมาร์ทโฟนของท่าน เดิมพันง่าย ได้ตลอดทั้งวัน 24 ชั่วโมง สนุกได้เต็มที่ ครบทุกอรรถรส บริการเกมพนันออนไลน์ ครบทุกรูปแบบ ไม่ว่าจะเป็นบริการ เกมพนันออนไลน์ ในหมวดหมู่บริการ เกมคาสิโนสด กีฬาเดิมพัน ยิงปลา หวยออนไลน์ แทงบอล รวมถึงเกมสล็อตออนไลน์ จากค่ายชั้นนำ รวมมาให้เล่นที่เว็บเดียว แหล่งรวมความบันเทิง ที่เหมาะกับคนที่ต้องการ ความสนุกสนาน และเงินรางวัล แบบจัดเต็ม เว็บพนันออนไลน์ ที่ตอบโจทย์นักพนัน ชาวไทยมากที่สุด สมาชิกที่ต้องการเงินรางวัล สุดคุ้มค่า พร้อมระบบการเล่น ที่ทันสมัยต้องไม่พลาด เว็บพนันออนไลน์ รวมเกมออนไลน์ มีทุกประเภท ให้เลือกเดิมพันมากมาย หลายแบบ ตลอดทั้งวัน หน้าเว็บรองรับ การใช้งานทุกอุปกรณ์ สมัครสมาชิกวันนี้ รับข้อเสนอพิเศษมากมาย </p>

                    </div>
                </div>
            </section>
            <section class="secon_content">
                <div class="container">
                    <div class="bg-radisdark">
                        <div class="row">
                            <div class="col-lg-6">
                                <img data-src="./img/img-sabai999-main01.webp" class="lazy img-max" width="545" height="545" alt="เว็บพนันออนไลน์ ออโต้ เล่นได้ทุกแบบ sabai999">
                            </div>
                            <div class="col-lg-6">
                                <h2 class="text-center" style="color: #ed008c;">เว็บพนันออนไลน์ ออโต้ เล่นได้ทุกแบบ sabai999</h2>
                                <p class="white">เราคือเว็บไซต์บริการ พนันออนไลน์ขนาดใหญ่ การเงินมั่นคง มีความน่าเชื่อถือ ปลอดภัย ตามมาตรฐานระดับสากล ให้บริการเกมพนันออนไลน์ที่หลากหลาย มีเกมให้เลือกเล่นมากมาย ครบถ้วน </p>
                                <p class="white">สมัครสมาชิก <strong>sabai999</strong> รับโบนัสพิเศษ เครดิตฟรี และโปรโมชั่นดีๆ รับประกันความพึงพอใจ เพราะเราจัดเตรียม สิทธิพิเศษต่างๆ ไว้ให้แก่สมาชิก ทุกวัน แบบจัด หนักจัดเต็ม และเรายังมีระบบฝาก ถอน ชั้นเลิศ ที่สามารถทำรายการ ธุรกรรมอย่างรวดเร็ว </p>
                                <p class="white">ช่วยให้การเล่น เกมส์พนันออนไลน์ ในยุคปัจจุบันของท่าน สะดวก และง่ายมากขึ้น ผ่านระบบอัตโนมัติ ที่แม่นยำ พร้อมให้ท่านได้สนุก กับทุกเกมเดิมพันที่เราคัดสรรมาเป็นอย่างดี นักพนันชาวไทย และต่างชาติเลือกใช้บริการ เป็นอันดับต้นๆ </p>
                                <p class="white">เว็บไซต์ พนันออนไลน์ที่สวยงาม โปรโมชั่นดีตลอดทั้งปี และมีเกมส์ให้เลือกเล่นมากมาย ครบทุกความต้องการ เรายังเป็นพันธมิตร กับผู้ให้บริการ คาสิโนออนไลน์ ระดับโลกมากมาย ให้เลือกเล่นมากกว่า 15 ค่ายชั้นนำ</p>
                                <p class="white">ด้วยแพลตฟอร์มที่ได้มาตรฐาน มีเจ้าหน้าที่เฉพาะด้าน คอยให้บริการ ดูแลคุณลูกค้า อย่างมืออาชีพ พร้อมจะให้ประสบการณ์ เล่นพนันออนไลน์ และคาสิโนที่เหนือกว่าแก่ท่าน </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="secon_content">
                <div class="container">
                    <div class="row my-3 align-items-center">
                        <div class="col-lg-6">
                            <div class="bg-pink">
                                <h2 class="text-center" style="color: #fff100;">แนะนำหมวดเกมต่างๆ ของเว็บพนันชั้นนำของไทย</h2>
                                <p class="white">แหล่งรวมเกมส์พนันออนไลน์ ครบทุกชนิด มีให้เลือกเล่นตามใจท่าน ไม่ว่าจะเป็นหมวดหมู่เกมส์กีฬา คาสิโนสด เกมสล็อต ลอตเตอรี่ และเกมพนันชนิดอื่นๆ อีกมากมาย ท่านสามารถเลือก เกมที่ถูกใจ เข้าสู่เนื้อหา แต่ละหมวดเกมส์ มีแบรนด์เกมส์ มากมายที่น่าสนใจ ให้ท่านได้เลือกเล่น ครบทุกอรรถรส </p>
                                <h3 class="h5">หมวด คาสิโนสด </h3>
                                <p class="white">บริการเกมคาสิโนสดมากมาย แบ่งออกเป็นเกมส์บาคาร่า รูเล็ต ไฮโล เสือมังกร แถมยังมีบริการ ห้องเกมคาสิโนมากกว่า 10 ห้อง นำเสนอตัวเลือก ผู้ให้บริการคาสิโนสด ชั้นนำระดับแนวหน้า จัดเตรียมมาให้เลือกมากมาย อาทิ eBET , SA Gaming, Allbet , Mega Wheel, HOT GraphWM Casino,Sexy Gaming , CT855 Live Casino เป็นต้น</p>
                                <h3 class="h5">หมวด พนันกีฬา </h3>
                                <p class="white">มีเกมกีฬาให้เลือกได้มากมาย ไม่ว่าจะเป็น กีฬาฟุตบอล บาสเกตบอล อเมริกันฟุตบอล เบสบอล มวยสากล เทนนิส แบดมินตัน และอื่นๆ อีกมากมาย ตลอดจนถึงกีฬายอดฮิตอย่าง esport เหมาะสำหรับคนที่ชื่นชอบกีฬา และต้องการเดิมพัน ในวงการนักพนันส่วนใหญ่ ก็มักเลือกใช้บริการที่นี่ ครบถ้วนทุกตัวเลือก การเดิมพัน พนันกีฬาออนไลน์ </p>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="bg-pink">
                                <h3 class="h5">หมวด ลอตเตอรี่ </h3>
                                <p class="white">ขาดไม่ได้ สำหรับบริกา รเดิมพันแทงหวย ซื้อหวยออนไลน์ การเสี่ยงโชคที่คนไทย ชื่นชอบมากที่สุด บริการหวยครบ เว็บตรง ปลอดภัย มีหวยให้เลือกเล่นมากมาย ไม่ว่าจะเป็นหวยรัฐบาล หวยไทย หวยลาว หรือหวยปิงปอง เว็บหวยออนไลน์จ่ายสูงสุดในไทย บริการแทงหวยขั้นต่ำ เริ่มต้นเพียงแค่ 1 บาท จ่ายสูงสุดถึงบาทละ 900 บาท</p>
                                <h3 class="h5">หมวด เกมสล็อต</h3>
                                <p class="white">ทางเว็บได้รวมค่ายเกมสล็อตออนไลน์ชั้นนำ เข้ามาให้คุณลูกค้า เลือกเล่นแบบจุใจได้ทั้งวัน อาทิ Joker Gaming, Fox Slot, Pocket Games Soft, CQ9 Gaming, Habanero, FC Slot , Pragmatic Play, AE Gaming, Live 22 , Jili Slot , Red Tiger เป็นต้น เปิดให้บริการลูกค้า แบบไม่มีเบื่อ กับรูปแบบการเดิมพันใหม่ ปั่นสล็อตบนมือถือได้ทุกที่ ทุกเวลา </p>
                                <div class=" d-block text-center">
                                    <img data-src="./img/mode-casino.webp" class="lazy img-fluid" width="120" height="120" alt="หมวด คาสิโนสด">
                                    <img data-src="./img/mode-sport.webp" class="lazy img-fluid" width="120" height="120" alt="หมวด พนันกีฬา">
                                    <img data-src="./img/mode-lotto.webp" class="lazy img-fluid" width="120" height="120" alt="หมวด ลอตเตอรี่">
                                    <img data-src="./img/mode-slot.webp" class="lazy img-fluid" width="120" height="120" alt="หมวด เกมสล็อต">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="secon_content">
                <div class="container">
                    <div class="bg-radisdark">
                        <div class="row">
                            <div class="col-lg-6">
                                <h2 class="text-center" style="color: #ed008c;">พบโปรโมชั่น ข้อเสนอสุดเร้าใจ ฝากถอนใน 2 วินาที</h2>
                                <p class="white">จัดเต็มกับข้อเสนอ โปรโมชั่นสุดพิเศษของ <strong>sabai999</strong> ที่ยากเกินจะปฏิเสธ เราเข้าใจถึงนักเดิมพันมือใหม่ ที่อาจยังทุนน้อย หรือรองรับความเสี่ยงได้ไม่มาก สามารถใช้โปรโมชั่นของเรา ในการเริ่มต้นเล่นได้เป็นอย่างดี นักเดิมพันระดับมืออาชีพ มักใช้โปรโมชั่นของเรา เพื่อสร้างความได้เปรียบ ทางด้านเทคนิค และเพิ่มโอกาสในการสร้างรายได้ </p>
                                <p class="white">มีบริการ ทดลองเล่นคาสิโน ทดลองเล่นบาคาร่า ทดลองเล่นสล็อต ตัวช่วยดีๆ ที่ไม่ควรมองข้าม ทำให้ท่านสามารถ บริหารจัดการเงินทุน ได้อย่างคล่องแคล่ว หากเดิมพันแบบมืออาชีพ ควรคำนึงถึงโบนัสแรกเข้า เป็นสิ่งสำคัญ สมัครสมาชิกใหม่ รับโบนัสเครดิตฟรี มอบโบนัสทุกยอด การแนะนำผ่าน ระบบลิงค์รับทรัพย์ เหมาะสำหรับขาประจำ ที่ต้องการสร้างรายได้</p>
                                <p class="white">สมัครสมาชิก ได้รับโปรโมชั่นมากมาย ลงทะเบียนสมัครสมาชิกฟรี ได้ด้วยตัวเอง ไม่กี่ขั้นตอน บนหน้าเว็บไซต์ ของเราแค่นี้ ก็สามารถเข้าใช้งาน โดยไม่ต้องง้อ Admin และไม่ยุ่งยาก อย่างที่คิด เพียงลูกค้าจำเป็นต้องใช้ข้อมูลจริง ในการสมัครเท่านั้น ลงทะเบียนสมัครสมาชิก ได้ฟรีไม่เสียค่าใช้จ่าย แม้แต่บาทเดียว</p>
                            </div>
                            <div class="col-lg-6">
                                <img data-src="./img/img-sabai999-main02.webp" class="lazy img-max" width="545" height="545" alt="พบโปรโมชั่น ข้อเสนอสุดเร้าใจ ฝากถอนใน 2 วินาที">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>
        <article class="site-article pt-2">
            <div class="container">
                <p class="str-news text-center  mb-0"><a href="./all-articles/">บทความ</a></p>
                <div class="row justify-content-center align-items-end ">
                    <?php
                    include_once './conn/connect.php';
                    $sql = "SELECT * FROM articles 
    ORDER BY id DESC  LIMIT 0,3 ";
                    $q = mysqli_query($conn, $sql) or die("Error in query: $sql " . mysqli_error($conn));
                    while ($resuret = mysqli_fetch_array($q)) {
                        $d_topic = $resuret['topic_name'];
                        $d_dec = strip_tags(mb_substr($resuret['descripion'], 0, 100, 'utf-8'));
                        $img = $resuret['image_banner'];
                        $date = date("Y-m-d", strtotime($resuret['create_at']));
                        $view = $resuret['view'];
                        $seo_dec = $resuret['descripion_seo'];
                        $url_articles_seo = $resuret['url_articles_seo'];
                        $article_id = $resuret['id'];
                    ?>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="bg_articles my-2">
                                <a href="./view/<?php echo $url_articles_seo; ?>" class="article-link" rel="ugc">
                                    <figure class="news-articles-img">
                                        <div class="bg-img">
                                            <img class="lazy img-fluid zoom" data-src="./backend/uploads/article-img/<?php echo $img ?>" alt="<?php echo $d_topic ?>" width="100%" height="100%">
                                        </div>
                                    </figure>
                                    <div class="px-2">
                                        <strong class="news-articles-h4"><?php echo trim(strip_tags(mb_substr($d_topic, 0, 30, 'utf-8'))); ?></strong>
                                        <div class="d-flex flex-column text-center view_date">
                                            <span>
                                                โพสเมื่อ : <?php echo $date; ?>
                                            </span>
                                            <span>
                                                ผู้เข้าชม : <?php echo $view; ?>
                                            </span>
                                        </div>

                                        <p class="news-articles-p "><?php echo trim(strip_tags(mb_substr($seo_dec, 0, 120, 'utf-8'))); ?></p>
                                    </div>
                                </a>
                                <div class="card__footer">
                                    <div class="user">
                                        <div class="user__info">
                                            <p>TEGS :</p>
                                            <?php
                                            $sql_tag = "SELECT tag.tag_url as tag_url,tag.name as name FROM (tag
                                    left join tag_log on tag.id = tag_log.tag_id)
                                    where articles_id = $article_id ";
                                            $query_tag = mysqli_query($conn, $sql_tag) or die("Error in query: $sql " . mysqli_error($conn));
                                            while ($result_tag = $query_tag->fetch_assoc()) {
                                            ?>
                                                <a href="./tag/<?php echo $result_tag['tag_url']; ?>" style="text-decoration: none;">
                                                    <span class="tag tag-red"><?php echo $result_tag['name'] ?></span>
                                                </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
        </article>
    <?php
    } else {
    ?>
        <article class="article-container-card pt-2">
            <div class="container">
                <div class="text-center ">
                    <p class="text-bold-search mb-0 ">
                        Search By : <?php echo $key_search; ?>
                    </p>
                </div>
                <div class="row justify-content-center align-items-end mt-2">
                    <?php
                    while ($resuret = mysqli_fetch_array($q)) {
                        $d_topic = $resuret['topic_name'];
                        $d_dec = strip_tags(mb_substr($resuret['descripion'], 0, 100, 'utf-8'));
                        $img = $resuret['image_banner'];
                        $date = date("Y-m-d", strtotime($resuret['create_at']));
                        $view = $resuret['view'];
                        $seo_dec = $resuret['descripion_seo'];
                        $url_articles_seo = $resuret['url_articles_seo'];
                        $article_id = $resuret['id'];
                    ?>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="bg_articles my-2">
                                <a href="./view/<?php echo $url_articles_seo; ?>" class="article-link" rel="ugc">
                                    <figure class="news-articles-img">
                                        <div class="bg-img">
                                            <img class="lazy img-fluid zoom" data-src="./backend/uploads/article-img/<?php echo $img ?>" alt="<?php echo $d_topic ?>" width="100%" height="100%">
                                        </div>
                                    </figure>
                                    <div class="px-2">
                                        <strong class="news-articles-h4"><?php echo trim(strip_tags(mb_substr($d_topic, 0, 30, 'utf-8'))); ?></strong>
                                        <div class="d-flex flex-column text-center view_date">
                                            <span>
                                                โพสเมื่อ : <?php echo $date; ?>
                                            </span>
                                            <span>
                                                ผู้เข้าชม : <?php echo $view; ?>
                                            </span>
                                        </div>

                                        <p class="news-articles-p "><?php echo trim(strip_tags(mb_substr($seo_dec, 0, 120, 'utf-8'))); ?></p>

                                    </div>
                                </a>
                                <div class="card__footer">
                                    <div class="user">
                                        <div class="user__info">
                                            <p>TEGS :</p>
                                            <?php
                                            $sql_tag = "SELECT tag.tag_url as tag_url,tag.name as name FROM (tag
                                    left join tag_log on tag.id = tag_log.tag_id)
                                    where articles_id = $article_id ";
                                            $query_tag = mysqli_query($conn, $sql_tag) or die("Error in query: $sql " . mysqli_error($conn));
                                            while ($result_tag = $query_tag->fetch_assoc()) {
                                            ?>
                                                <a href="./tag/<?php echo $result_tag['tag_url']; ?>" style="text-decoration: none;">
                                                    <span class="tag tag-red"><?php echo $result_tag['name'] ?></span>
                                                </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
        </article>
    <?php
    }
    ?>
    <footer class="footer-container">
        <div style=" background-color: #e5e5e5;padding: 20px;">
            <div class="container">
                <img data-src="./img/logo-sabai999.webp" class="lazy img-max" width="200" height="153" alt="logo sabai999">
                <br>
                <form action="./?s=s" method="GET" class="search_action">
                    <button type="submit"><img data-src="./img/search.webp" class="lazy img-fluid" width="49" height="49" alt="search"></button>
                    <input type="text" name="s" placeholder="search..." class="name_search" required>
                </form>
                <br>
                <div class="d-block text-center">
                    <a href="./" class="a-foot">หน้าหลัก</a>
                    <a href="./backend/login.php" class="a-foot">เข้าสู่ระบบ</a>
                </div>
            </div>
        </div>
        <div style="background-color: #ee4377;padding: 20px;">
            <div class="container">
                <div class="d-block text-center">
                    <img data-src="./img/imgfooter01.webp" class="lazy img-fluid d-inline-block mx-5 my-2" width="78" height="78" alt="card-img">
                    <img data-src="./img/imgfooter02.webp" class="lazy img-fluid d-inline-block mx-5 my-2" width="78" height="78" alt="card-img">
                    <img data-src="./img/imgfooter03.webp" class="lazy img-fluid d-inline-block mx-5 my-2" width="78" height="78" alt="card-img">
                </div>
            </div>
        </div>
    </footer>
    <div id="navbar__footer">
        <a href="./"><img data-src="./img/icon/icon-nav01.webp" class="lazy img-fluid" width="40" height="40" alt="icon-home"><span>หน้าหลัก</span> </a>
        <a href="./entrance/"><img data-src="./img/icon/icon-nav02.webp" class="lazy img-fluid" width="40" height="40" alt="icon เข้าสู่ระบบ"><span>เข้าสู่ระบบ</span> </a>
        <a href="./register/"><img data-src="./img/icon/icon-nav03.webp" class="lazy img-fluid" width="40" height="40" alt="icon สมัครสมาชิก"><span>สมัครสมาชิก</span> </a>
        <a href="./getmoney/"><img data-src="./img/icon/icon-nav04.webp" class="lazy img-fluid" width="40" height="40" alt="icon ลิงค์รับทรพย์"><span>ลิงค์รับทรพย์</span> </a>
        <a href="./contact/"><img data-src="./img/icon/icon-nav05.webp" class="lazy img-fluid" width="40" height="40" alt="icon ติดต่อ"><span>ติดต่อ</span> </a>
    </div>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides((slideIndex += n));
        }

        function currentSlide(n) {
            showSlides((slideIndex = n));
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1;
            }
            if (n < 1) {
                slideIndex = slides.length;
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" activess", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " activess";
        }
        var slideIndexss = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            var dotss = document.getElementsByClassName("dot");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            for (i = 0; i < dotss.length; i++) {
                dotss[i].className = dotss[i].className.replace(" activess", "");
            }
            slideIndexss++;
            if (slideIndexss > x.length) {
                slideIndexss = 1;
            }
            x[slideIndexss - 1].style.display = "block";
            dotss[slideIndexss - 1].className += " activess";
            setTimeout(carousel, 2000);
        }
    </script>
    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "80%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>
    <!-- start lazyload -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var lazyloadImages;

            if ("IntersectionObserver" in window) {
                lazyloadImages = document.querySelectorAll(".lazy");
                var imageObserver = new IntersectionObserver(function(entries, observer) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            var image = entry.target;
                            image.src = image.dataset.src;
                            image.classList.remove("lazy");
                            imageObserver.unobserve(image);
                        }
                    });
                });

                lazyloadImages.forEach(function(image) {
                    imageObserver.observe(image);
                });
            } else {
                var lazyloadThrottleTimeout;
                lazyloadImages = document.querySelectorAll(".lazy");

                function lazyload() {
                    if (lazyloadThrottleTimeout) {
                        clearTimeout(lazyloadThrottleTimeout);
                    }

                    lazyloadThrottleTimeout = setTimeout(function() {
                        var scrollTop = window.pageYOffset;
                        lazyloadImages.forEach(function(img) {
                            if (img.offsetTop < (window.innerHeight + scrollTop)) {
                                img.src = img.dataset.src;
                                img.classList.remove('lazy');
                            }
                        });
                        if (lazyloadImages.length == 0) {
                            document.removeEventListener("scroll", lazyload);
                            window.removeEventListener("resize", lazyload);
                            window.removeEventListener("orientationChange", lazyload);
                        }
                    }, 20);
                }

                document.addEventListener("scroll", lazyload);
                window.addEventListener("resize", lazyload);
                window.addEventListener("orientationChange", lazyload);
            }
        })
    </script>
    <!--end lazyload -->
</body>

</html>