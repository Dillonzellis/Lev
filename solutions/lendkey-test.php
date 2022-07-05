<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LEVERAGE - Lendkey</title>
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
        .detail a {
            font-weight: bold;
            color: #000;
        }

        .myButton{
            width: 90%;
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

    <!-- Remodal styles -->
    <link rel="stylesheet" href="../remodal/dist/remodal.css">
    <link rel="stylesheet" href="../remodal/dist/remodal-default-theme.css">

</head>

<body>
    <!-- Header -->
    <header>
        <div class="nav_sec">
            <div class="container">
                <?php include '../assets/inc/nav.php'; ?>
            </div>
        </div>
    </header>
    <!-- Section -->

    <!-- Slider Sec -->
    <section class="inner_banner">
        <div class="container">
            <h1><img src="../assets/images/solutions/lendkey.png" alt="Lendkey" width="400" height="auto" class="img-fluid"></h1>
            <ul class="breadcrum">
                <li><a href="../index.php">Home</a></li>

                <li><a href="../solutions.php">Solutions</a></li>
                <li>Lendkey</li>
            </ul>
        </div>
    </section>
    <!-- About Sec -->
    <section class="about_sec service_sec2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="detail">



                        <p><strong><a style="font-weight: bold;" href="../assets/docs/LendKey-HIL-Product Sheet 042122.pdf" target="_blank" rel="noopener noreferrer">Home Improvement Loan</a></strong><p>

                        <p>LendKey’s home improvement loan solution is for credit unions looking to add a supplemental channel to deploy capital, grow loans, and earn an attractive net ROA. This unique participation program is easy to set up and requires minimal credit union resources to support. LendKey drives the demand and manages the program, while the credit union reviews the loans and funds upon approval</p>

                        <p><strong><a href="../assets/docs/LendKey-Refi-Product Sheet 042122.pdf" target="_blank" rel="noopener noreferrer">Student Loan Refinancing & Consolidation</a></p></strong>

                        <p>Student loan refinancing and consolidation serves as a gateway product for graduate students and professionals in the market for other products that a credit union provides. This enables credit unions to achieve new member acquisition and address an aging member base. With LendKey’s student loan refinancing and consolidation solution, credit unions will deliver a relevant product to cultivate relationships, immediately deploy capital, and experience strong performance. </p>

                        <p><strong><a href="../assets/docs/LendKey-Student-Loans-Product Sheet 042122.pdf" target="_blank" rel="noopener noreferrer">Private Student Loan</a></strong></p>

                        <p>Private student loans sit at the beginning of the consumer credit journey and will likely be a member’s first product with the credit union. This enables credit unions to attract and retain younger members for a lifetime of lending. With LendKey’s private student loan solution, credit unions will achieve member acquisition, asset diversification, guaranteed capital deployment, and strong returns.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">

                    <pa><a href="mailto:consult@myleverage.com" class="myButton">Contact Us!</a></p>

                    <p><a href="#" data-remodal-target="form" class="myButton" style="width: 90%;">Request Resources</a></p>

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
    <script src="../remodal/remodal.js"></script>
    <script src="../remodal/remodal.min.js"></script>

    <!--REMODALS-->
    <div class="remodal" data-remodal-id="form">
        <a data-remodal-action="close" class="remodal-close"></a>
        <h3>Request Resources</h3>
        <p>Resources may include:</p>

        <ul style="list-style: disc; padding-left: 25px;">
            <li>• Product Sheet</li>
            <li>• Product Video</li>
            <li>• Testimonial Video</li>
            <li>• White Paper</li>
            <li>• Case Study</li>
        </ul>

        <p>To fulfill your request, please provide the following:</p>
        <p><em>* = Required field.</em></p>
        <p align="center"><iframe src="https://go.pardot.com/l/513811/2022-07-05/3twzm9c" width="100%" height="500" type="text/html" frameborder="0" allowTransparency="true" style="border: 0"></iframe><a data-remodal-action="cancel" class="remodal-cancel" href="#">Close</a>
    </div>

</body>

</html>