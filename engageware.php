<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LEVERAGE - Engageware</title>
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon.ico" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- aos -->
    <link href="../assets/css/aos.css" rel="stylesheet">
    <!-- owl carousel -->
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <!-- style sheet -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <!-- color stylesheet -->
    <link id="skin-switcher-css" href="../assets/css/color-1.css" rel="stylesheet">
    <!-- responsive stylesheet -->
    <link href="../assets/css/responsive.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-105142522-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-105142522-1');
    </script>
    <script type="text/javascript">
        piAId = '514811';
        piCId = '168940';
        piHostname = 'pi.pardot.com';

        (function() {
            function async_load() {
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.src = ('https:' == document.location.protocol ? 'https://pi' : 'http://cdn') + '.pardot.com/pd.js';
                var c = document.getElementsByTagName('script')[0];
                c.parentNode.insertBefore(s, c);
            }
            if (window.attachEvent) {
                window.attachEvent('onload', async_load);
            } else {
                window.addEventListener('load', async_load, false);
            }
        })();
    </script>


    <style>
        .bs-example {
            margin: 20px;
        }

        .accordion .fa {
            margin-right: 0.5rem;
        }

        h2 a {
            text-decoration: underline !important;
        }
    </style>
    <script>
        $(document).ready(function() {
            // Add minus icon for collapse element which is open by default
            $(".collapse.show").each(function() {
                $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
            });

            // Toggle plus minus icon on show hide of collapse element
            $(".collapse").on('show.bs.collapse', function() {
                $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
            }).on('hide.bs.collapse', function() {
                $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
            });
        });
    </script>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="nav_sec">
            <div class="container">
                <?php include '../assets/inc/nav-test.php'; ?>
            </div>
        </div>
    </header>
    <!-- Section -->

    <!-- Slider Sec -->
    <section class="inner_banner">
        <div class="container">
            <h1><img src="../assets/images/solutions/Engageware-logo.png" alt="Engageware" width="603" height="149" class="img-fluid"></h1>
            <ul class="breadcrum">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../solutions.php">Solutions</a></li>
                <li>Engageware</li>
            </ul>
        </div>
    </section>
    <!-- About Sec -->
    <section class="about_sec service_sec2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="detail">

                        <p style="text-align: center; margin-bottom: 3rem;"><a href="mailto:consult@myleverage.com" class="myButton">Contact Us!</a></p>

                        <h2><a href="../assets/docs/CUSG_Technology-Engageware_Appointment_Scheduling_Product_Sheet.pdf" target="_blank" rel="noopener noreferrer">Intelligent Online Appointment Scheduling</a></h2>

                        <p>When members book an appointment, using artificial intelligence, they’ll be matched with the employee best qualified to serve them – ensuring the best possible customer experience and the personalized attention your members demand and deserve.</p>

                        <h2><a href="../assets/docs/CUSG_Technology-EW Chatbot.pdf" target="_blank" rel="noopener noreferrer">Engageware Chatbot</a></h2>

                        <p>Guided conversations that pull your members through journeys to increase product conversions and deliver self-service – on a 24/7 basis. Reporting and analysis so you can determine what your members are looking for in your digital channels.</p>

                        <h2><a href="../assets/docs/CUSG_Technology-EW Consumer.pdf" target="_blank" rel="noopener noreferrer">Automated Support</a></h2>

                        <p>Unify, manage, and deliver automated support and engaging journeys across your mobile, chat, and web platforms to create a complete self-service solution. You will decrease contact center inquiries, increase product engagement, and deliver a better consumer experience.</p>

                        <h2><a href="../assets/docs/CUSG_Technology-EW Employee.pdf" target="_blank" rel="noopener noreferrer">Employee Support</a></h2>

                        <p>Make every employee a subject matter expert through centralization of policies, procedures, documentation, product information, and forms into a single web-based portal that is easy to use, manage, and is always up to date.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <section class="footer_detail footer_detail_3">
            <?php include '../assets/inc/footer.php'; ?>
        </section>
    </footer>
    <!-- Js -->
    <script src="../assets/js/owl.carousel.js"></script>
    <!-- theme Whatsapp chat -->
    <script src="../assets/js/script.js"></script>
</body>

</html>