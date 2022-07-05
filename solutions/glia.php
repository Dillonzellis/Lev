<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LEVERAGE - Glia</title>
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
            <h1><img src="../assets/images/logos/glia.png" alt="Access Softek, Inc." width="340" height="169" class="img-fluid"></h1>
            <ul class="breadcrum">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../solutions.php">Solutions</a></li>
                <li>Glia</li>
            </ul>
        </div>
    </section>
    <!-- About Sec -->
    <section class="about_sec service_sec2">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-8">
                    <div class="detail">

                        <p>Glia, available from LEVERAGE, breaks down the walls of traditional member support by combining all communication means into one unified, digital member service experience that is always on-screen and starts wherever the person is. Regardless of where it begins, each interaction can easily and seamlessly move between channels, without losing continuity and context or having to restart the conversation – gone are the days of “Please re-enter your...”</p>

                        <p><strong style="font-weight: 600;">Reducing Member Effort</strong></p>

                        <p>Credit unions thrive on the high-touch, personalized one-to-one service they offer. Glia reduces member efforts by offering:</p>

                        <ul style="list-style: disc; padding-left: 25px;">
                            <li>• <strong style="font-weight: 600;">Engage Members</strong> - Using chat, social, SMS, phone, online voice and video</li>
                            <li>• <strong style="font-weight: 600;">Live Observation</strong> - Enables member service
                                representatives to see what a visitor sees</li>
                            <li>• <strong style="font-weight: 600;">Dual-cursor CoBrowsing</strong> - Empowers
                                member service representatives to view and
                                co-pilot members’ on-screen experiences</li>
                            <li>• <strong style="font-weight: 600;">AI-powered operator assistants</strong> - Gives
                                contextual response suggestions and
                                compliance alerts to member service
                                representatives to support serving members</li>
                            <li>• <strong style="font-weight: 600;">AI Orchestrator</strong> - Enables plug-and-play
                                management of multiple bot engines, along
                                with tools to optimize them</li>
                        </ul>

                        <p><strong style="font-weight: 600;">Enterprise Reliability and Security</strong></p>

                        <p>Glia’s platform was architected from the ground-up to exceed the security, reliability and compliance needs of the most demanding financial enterprises. Glia masks out sensitive form fields on-screen and encrypts interactions to ensure privacy, security, and peace of mind for customers and agents. Glia runs on a hardened Amazon Web Services (AWS) infrastructure, using the latest encryption technologies and independently deployable microservices to ensure scalability and high availability. Dedicated GSEC-certified security staff and SOC-2 audited controls provide end-to-end security validated by independent experts and major financial institution security/compliance teams.</p>


                        <h2>FAQs</h2>

                        <div class="bs-example">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"><i class="fa fa-plus"></i> How can Glia help our credit union with the increased number of interactions we are getting?</button>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>More and more, members are engaging with you
                                                through online channels, like your online banking
                                                site, or mobile banking application. Glia allows you
                                                to meet your members at their point of need and
                                                provides a digital-first servicing option. This way, the
                                                member can engage with you via chat, text, video, or
                                                audio, directly from your digital property. When the
                                                member initiates an engagement with you directly
                                                from your site, this eliminates the need to call the
                                                credit union. For those members who do contact
                                                the credit union through an off-line phone call, Glia
                                                enables you to pair their phone calls with a digital
                                                session, so the operator can utilize Live Observation
                                                of the member’s screen, CoBrowse with the member
                                                through their web session, teach the member how to
                                                use the digital properties, and ultimately achieve first
                                                call resolution.</p>

                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo"><i class="fa fa-plus"></i> What is the implementation timeframe for Glia?</button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Glia is an extremely lightweight platform and can
                                                easily be integrated into your digital assets, like your
                                                public site, online banking portal, lending pages,
                                                etc., with a single line of javascript. Furthermore,
                                                the implementation timeframe is typically three to
                                                six weeks; this includes integration into your digital
                                                properties, configuration of business logic rules
                                                on your sites, as well as training for your staff and
                                                operators.</p>

                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseFour"><i class="fa fa-plus"></i> What support do you provide to the credit union at implementation?</button>
                                        </h2>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Glia is committed to providing WhiteGlove
                                                Service with all of our customers, starting with
                                                the implementation process all the way through
                                                post-launch and beyond. Glia will assign a Launch
                                                Manager, who will guide you through the three
                                                to six week implementation period to launch day.
                                                Additionally, a Customer Success Manager will be
                                                designated to your credit union. The CSM is your
                                                consultative expert who will help establish your
                                                strategic objectives, as well as the key performance
                                                indicators for your member interactions. Not only
                                                will your CSM actively monitor usage and interaction
                                                rates, but they will also provide guidance and best
                                                practices along the way, in addition to conducting
                                                quarterly business reviews to ensure a strong
                                                return on your investment and an excellent overall
                                                experience.</p>

                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseFive"><i class="fa fa-plus"></i> Does Glia require integration to our core processor?</button>
                                        </h2>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>No, Glia does not require integration into
                                                your core processor. Rather, Glia is a system
                                                of engagement that interacts with your digital
                                                properties, and the technology providers for those
                                                sites (i.e. digital banking, online account opening
                                                and lending, marketing sites, etc).</p>

                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingSix">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseSix"><i class="fa fa-plus"></i> What is CoBrowsing and how can it help provide better service to members?</button>
                                        </h2>
                                    </div>
                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>CoBrowsing, short for collaborative browsing, is
                                                joint navigation through the same site at the same
                                                time between the Member Service Representative
                                                or call center agent and the member. When
                                                coupled with Live Observation, or the agent’s
                                                ability to see the member’s session in real-time,
                                                CoBrowsing is an incredibly effective way to teach
                                                the member how to use the site and guide them
                                                through their session. In most cases, our customers
                                                experience a 20% faster issue resolution timeframe
                                                as well as drastic improvements in Member
                                                Satisfaction scores.</p>

                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingSeven">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseSeven"><i class="fa fa-plus"></i> How does Glia work with my existing chatbot provider?</button>
                                        </h2>
                                    </div>
                                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Glia complements any AI engine, and serves
                                                as the framework through which chatbot and
                                                live agent interactions are managed. This way,
                                                the credit union can deploy finely-tuned bots for
                                                specific areas of the site to optimize the user’s
                                                experience. This benefits the credit union by
                                                centralizing all routing and queueing, bot-tohuman
                                                transfers, and reporting into one system.
                                                Additionally, the AI engine can be leveraged to
                                                provide live agents with assisted responses based
                                                on the member’s specific question, which reduces
                                                the average handling timeframes and creates
                                                greater efficiencies across the service operation.</p>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <p><a href="mailto:consult@myleverage.com" class="myButton">Contact Us</a></p>
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
        <p align="center"><iframe src="https://go.pardot.com/l/513811/2021-12-07/3t53bpl" width="100%" height="325" type="text/html" frameborder="0" allowTransparency="true" style="border: 0"></iframe></p>
        <a data-remodal-action="cancel" class="remodal-cancel" href="#">Close</a>
    </div>

</body>

</html>