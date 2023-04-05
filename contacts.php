<?php include("assets/includes/head.php");?>

<meta property="og:site_name" content="<?php echo $lang_array['site-name']; ?>" />
<meta property="og:title" content="<?php echo $lang_array['contacts-title']; ?>" />
<meta property="og:description" content="<?php echo $lang_array['contacts-description']; ?>" />
<meta property="og:type" content="website" />
<meta property="og:image" content="assets/images/logo75px.png" />
<meta property="og:url" content="<?php echo $lang_array['contacts-url']; ?>" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="<?php echo $lang_array['contacts-title']; ?>" />
<meta name="twitter:description" content="<?php echo $lang_array['contacts-description']; ?>" />
<meta name="twitter:site" content="@Sefraym" />
<meta name="twitter:image" content="assets/images/logo75px.png" />
<meta name="twitter:creator" content="@Sefraym" />
<meta name="robots" content="index, follow" />

<link rel="canonical" href="<?php echo $lang_array['contacts-url']; ?>" />

<!-- #Social Media End -->

<title><?php echo $lang_array['contacts-title']; ?></title>

<meta name="description" content="<?php echo $lang_array['contacts-description']; ?>" />

<meta name="keywords" content="<?php echo $lang_array['contacts-keywords']; ?>" />

</head>

<!-- End Head -->

<body>

    <!-- Preloader -->

    <?php include("assets/includes/preloader.php");?>

    <!-- End Preloader -->



    <!-- Header -->

    <?php include("assets/includes/header.php");?>

    <!-- End Header -->



    <!-- Content -->

    <main>

        <section class="section-parallax page-image-title"
            style="background-image: url(assets/images/contact-back1.jpg);">
            <div class="section-mask"></div>
            <div class="section-content">
                <div class="container">
                    <h1 class="text-white">İletişime Geç</h1>
                </div>
            </div>
        </section>

        <section class="section-white section-padding-08">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 px-md-5 mb-5 mb-lg-0">
                        <h4 class="text-dark">Merhaba De</h4>
                        <h2 class="text-dark font-size-3">Bize ne zaman ihtiyacınız olursa, <span
                                class="text-blue">Sizin için</span> buradayız</h2>
                        <p class="pt-4 pb-5 text-text">Yardım etmek ve sahip olabileceğiniz herhangi bir soruyu yanıtlamak için buradayız.
                            senden haber almak için sabırsızlanıyoruz</p>
                        <h6 class="d-inline-block me-5"><a href="tel:+90 05416945536" class="text-dark">+90 541 694 55 36 </a></h6>
                        <h6 class="d-inline-block"><a href="mailto:sefraymcompany@gmail.com"
                                class="text-dark">sefraymcompany@gmail.com</a></h6>
                    </div>

                    <div class="col-lg-6 px-md-5">
                        <h3 class="mb-4">Yorum Gönder</h3>
                        <form name="contactform" method="POST" id="contactform">
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="form-outline mb-4">
                                        <textarea class="form-control" id="contactformcomment" name="contactformcomment"
                                            placeholder="Yorum"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-outline mb-4">
                                        <input type="text" class="form-control" id="contactformname"
                                            name="contactformname" placeholder="isim" />
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-outline mb-4">
                                        <input type="text" class="form-control" id="contactformemail"
                                            name="contactformemail" placeholder="Email" />
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-outline mb-4">
                                        <input type="text" class="form-control" id="contactformphone"
                                            name="contactformphone" placeholder="Telefon" />
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-outline mb-4">
                                        <input type="text" class="form-control" id="contactformcountry"
                                            name="contactformcountry" placeholder="Ülke" />
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <button type="submit" class="btn-eff-01 btn-eff-02-pre">Gönder</button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <!-- End Content -->



    <!-- Footer -->

    <?php include("assets/includes/footer.php");?>

    <!-- End Footer -->



    <!-- JS -->

    <?php include("assets/includes/scripts.php");?>
    <script src="assets/js/validate-contact.js"></script>

    <!-- End JS -->

</body>

</html>