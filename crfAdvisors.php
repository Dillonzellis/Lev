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

        strong {
            font-weight: 600;
        }

        li {
            list-style: unset !important;
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
                <?php include '../assets/inc/nav.php'; ?>
            </div>
        </div>
    </header>
    <!-- Section -->

    <!-- Slider Sec -->
    <section class="inner_banner">
        <div class="container">
            <h1><img src="../assets/images/solutions/lendkey.png" alt="Access Softek, Inc." width="340" height="169" class="img-fluid"></h1>
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
                <div class="col-lg-12 col-md-12">
                    <div class="detail">

                        <p><a href="mailto:consult@myleverage.com" class="myButton">Contact Us!</a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="../assets/docs/LendKey-Product Sheet.pdf" target="_blank" class="myButton">Resources</a></p>

                        <p>In response to the high volume of requests from our credit unions, LEVERAGE has partnered with CRF Advisors to offer a CECL (Current Expected Credit Losses) solution. This offering will provide individualized consulting to assess how CECL Methodology will affect your credit union, what platform and data sets are needed to comply with new reporting requirements, as well as ongoing support for data collection and storage, forecasting, and reports.</p>

                        <p><strong>Current Expected Credit Losses</strong></p>

                        <p>CECL is used as shorthand for the new GAAP requirement to include expected life of loan (LOL) losses in the allowance for loan and lease losses (ALLL), versus the current incurred loss model. Generally, loss estimates will increase, be more volatile, and require subjective assumptions. Therefore, processes must be enhanced and well-documented to ensure future compliance as new CECL models and data requirements go into effect. </p>

                        <p><strong>Loan Loss Reserve</strong></p>

                        <p>CECL Methodology will change loan loss, reserve calculations, and will have implications across many aspects of day-to-day operations for credit unions. CRF Advisors will review and analyze methodologies, provide assistance with documenting requirements, ensure proper systems inputs, and monitor roles and responsibilities to ensure compliance and transparency of the implementation process throughout the organization.</p>

                        <p><strong>Credit Union benefits from CRF Advisors include:</strong></p>


                        <ul>
                            <li> Consulting and guidance to your management team throughout the design, implementation, and ongoing use of the CECL Program and Platform</li>
                            <li>Access to CRF Advisors dedicated experts for development, customization, implementation, and monitoring of the CECL Platform and Program</li>
                            <li>Established and approved timelines to track progress of the CECL Program with regular communication between CRF Advisors and credit union project team to ensure quality and accomplish objectives</li>
                            <li>Customized dashboard to meet the needs of your credit union with a broad range of data fields</li>
                            <li> Automated reports and summaries generated to satisfy regulatory requirements</li>
                        </ul>

                        <h2>FAQs</h2>

                        <div class="bs-example">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"><i class="fa fa-plus"></i>What is the CECL requirement?</button>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>In 2016, federal regulators issued a new GAAP accounting standard for the calculation of the Allowance for Loan and Lease Loss (ALLL). This new standard utilizes the current expected credit loss (CECL) calculation method versus the current incurred loss model.</p>
                                            <br>
                                            <p>Regulators have directed credit unions to comply in their Call Reports beginning on March 31, 2022.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo"><i class="fa fa-plus"></i>How will the implementation of the new CECL standard affect my credit union?</button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p> Generally, loss estimates will increase, be more volatile, and require subjective assumptions. Therefore, processes must be enhanced and well-documented to ensure future compliance as new CECL models and data requirements go into effect</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseFour"><i class="fa fa-plus"></i>How will the CECL requirement change what we currently do for loan losses?</button>
                                        </h2>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Each credit union is different, and CRF Advisors will consult with each leadership team to satisfy the CECL requirements with a clear, manageable, and complete solution.</p>
                                            <br>
                                            <p>Some of the key changes associated with the implementation of CECL are:</p>
                                            <br>
                                            <ul>
                                                <li> Move from incurred loss (historical losses) to a lifetime horizon (life of loan/ asset losses)
                                                <li>
                                                <li>Institutions will use a broader range of data to estimate expected losses</li>
                                                <li>Accounting for purchased credit impaired loans and <em>Off-Balance-Sheet Credit Exposures</em></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseFive"><i class="fa fa-plus"></i> Why have credit unions already begun to implement a CECL solution and what is the advantage of doing so?</button>
                                        </h2>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>One reason credit unions have opted to begin implementing a CECL program is to ensure they have enough time to see the effects on their balance sheets and make necessary changes before the required reporting date.</p>
                                            <br>
                                            <p>CECL has various calculation methodologies, and CRF Advisors will consult with your management team and board to ensure they understand and select the most effective methods to best meet credit unions’ needs.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingSix">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseSix"><i class="fa fa-plus"></i> How does CRF Advisors differ from other CECL Data Analytics Solutions?</button>
                                        </h2>
                                    </div>
                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p> CRF Advisors’ team uses its 30 years of experience in lending, credit, auditing, and credit modeling to develop a complete CECL solution that includes customized: training for management and board, program development, and reporting for each credit union. Also, the pricing for CRF Advisors’ complete CECL solution is typically lower than other competitive CECL solutions.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

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