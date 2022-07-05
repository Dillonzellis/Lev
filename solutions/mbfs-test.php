<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LEVERAGE - MBFS</title>
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
            <h1><img src="../assets/images/logos/mbfs.png" alt="MBFS" width="340" height="169" class="img-fluid"></h1>
            <ul class="breadcrum">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../solutions.php">Solutions</a></li>
                <li>MBFS</li>
            </ul>
        </div>
    </section>
    <!-- About Sec -->
    <section class="about_sec service_sec2">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-8">
                    <div class="detail">
                        <p>Member Business Financial Services, LLC (MBFS)
                            was created to assist credit unions in providing
                            services to the local business community in a safe,
                            efficient, and effective manner. MBFS is owned
                            by credit unions and uses that inside perspective
                            in helping credit unions provide more business
                            loans at a cost lower than they could individually.
                            Since its inception in 2008, the CUSO has grown
                            to manage 7,500+ business loans with more than
                            $2 billion in business loan balances.</p>

                        <p><strong style="font-weight: 600;">Business Loan Training and Program Strategic Development</strong></p>

                        <p>MBFS offers comprehensive training to
                            credit union boards of directors and senior
                            management on a wide variety of topics. Training
                            can be delivered either in person or virtually.
                            Programs are customizable to meet specific needs
                            but can include loan policy development, starting
                            a business lending program, sales planning, and
                            risk management.</p>

                        <p><strong style="font-weight: 600;">Transactional Services</strong></p>

                        <ul style="list-style: disc; padding-left: 25px;">
                            <li>• Credit Analysis for New & Existing Loan</li>
                            <li>• Independent Portfolio Reviews</li>
                            <li>• Loan Documentation</li>
                            <li>• Loan Servicing & Portfolio Monitoring</li>
                        </ul>

                        <p><strong style="font-weight: 600;">Credit Union Shared Relationship Managers</strong></p>

                        <p>A serious challenge for credit union business
                            services programs is hiring and retaining skilled,
                            qualified candidates in a cost-effective fashion.
                            MBFS offers credit union clients a Shared
                            Relationship Manager service to combat this
                            problem. MBFS hires a business lender to work
                            in a geographic market shared among credit
                            unions. Participating credit unions share in new
                            loan originations as a lead lender or participant.
                            This system allows credit unions to efficiently grow
                            their portfolios of both member and nonmember
                            business loans.</p>

                        <p><strong style="font-weight: 600;">Nu Direction Lending</strong></p>

                        <p>Credit unions can often struggle to fund loans to
                            small businesses that may need non-real estate
                            loans to grow their business. MBFS has formed Nu
                            Direction Lending to help fill in the gap for these
                            loans to small businesses. The loans are funded in
                            a fintech-like atmosphere for your member. The
                            loans are then divided up multiple times to sell
                            the loans to credit union participants in a strongly
                            diversified risk basis. Credit unions can also act as
                            a referral partner for Nu Direction Lending and to
                            build fee income at the credit union.</p>

                        <p align="center"><iframe width="560" height="315" src="https://www.youtube.com/embed/WYvIfaahU_A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>


                        <!-- <p><a href="mailto:consult@myleverage.com" class="myButton">Contact Us!</a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="../assets/docs/MBFS-Product-Sheet.pdf" target="_blank" class="myButton">Resources</a></p> -->

                        <h2>FAQs</h2>

                        <div class="bs-example">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"><i class="fa fa-plus"></i> Is my credit union big enough to do business lending?</button>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>70 percent of credit unions over $50
                                                million in assets have at least one commercial
                                                loan on the books. That doesn’t include
                                                business purpose loans under $50,000 or
                                                residential rental properties that do not meet
                                                the regulatory definition of a business loan.
                                                In 2017, the NCUA also provided small credit
                                                unions regulatory relief that are looking to
                                                assist members with business-related needs.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"><i class="fa fa-plus"></i> What if we don't have anyone in-house to do business loans?</button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>NCUA Regulations permit the use of
                                                a CUSO that is independent of the loan
                                                transaction to assist the credit union with
                                                business lending. Like other vendors, the
                                                credit union must conduct due diligence
                                                along with understanding risks associated
                                                with business lending relative to size and
                                                complexity of the loan portfolio.</p>

                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"><i class="fa fa-plus"></i> Are residential rental properties still business loans?</button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Yes and No. In 2018, Congress amended
                                                the Federal Credit Union Act so that loans
                                                secured with any 1-4 family residential
                                                property are no longer classified as a member
                                                business loan. However, credit unions must
                                                still properly underwrite, close and manage
                                                the risk associated with this category of
                                                loan. Residential investment property loans
                                                have many of the same risk characteristics
                                                of business loans and should be managed
                                                differently than residential mortgages.</p>

                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"><i class="fa fa-plus"></i> Why are SBA loans so difficult?</button>
                                        </h2>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Loans guaranteed by the Small Business
                                                Administration are an excellent way
                                                to complement your business lending
                                                program and provide financing to the local
                                                community. However, unless the credit
                                                union has extensive in-house resources and
                                                experience in underwriting, closing, and
                                                servicing these loans, it can be a frustrating
                                                experience. The SBA loan process can be
                                                quite different from traditional business loans.
                                                It is highly advisable to utilize a third party
                                                who specializes in this type of financing to
                                                make the process much more pleasant for the
                                                borrower and credit union.</p>

                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive"><i class="fa fa-plus"></i> Can I buy participation loans?</button>
                                        </h2>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Credit unions can purchase a portion
                                                of other credit unions’ business loans as an
                                                excellent way to diversify risk, build income,
                                                and assist other credit unions. Credit unions
                                                purchasing loans need to exercise the same
                                                level of diligence in originating and closing
                                                the loan as if they were making the loan to
                                                one of their members. Participation loans
                                                should have the same credit criteria as other
                                                loans and should be viewed as a “loan” with
                                                credit risk and not an investment.</p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-4">

                    <p><a href="mailto:consult@myleverage.com" class="myButton" style="width: 90%;">Contact Us</a></p>

                    <!--<h2>Resources</h2>
						
					<p><a href="../assets/docs/Glia-Slick.pdf" target="_blank" class="myButton" style="width: 90%;">Product Sheet</a></p>
						<p><a href="https://youtu.be/xQScLTMWk6g" target="_blank" class="myButton" style="width: 90%;">Video</a></p>-->

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
        <p align="center"><iframe src="https://go.pardot.com/l/513811/2022-07-05/3twzrmk" width="100%" height="500" type="text/html" frameborder="0" allowTransparency="true" style="border: 0"></iframe></p>
        <a data-remodal-action="cancel" class="remodal-cancel" href="#">Close</a>
    </div>

</body>

</html>