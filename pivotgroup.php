<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LEVERAGE - Pivot Group</title>
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
                <li>Pivot Group</li>
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

                        <p>In a world in which Cyber Security can never be taken for granted, organizations must be positioned to handle the unexpected. To support the ever-increasing Cyber Security needs of credit unions, LEVERAGE has teamed with PIVOT Group to focus on effective solutions for auditing, assessments, and compliance services. PIVOT Group has a 17-year history of providing Cyber Security solutions in order to protect data and systems, and comply with Information Security and Data Privacy regulations</p>

                        <p>The PIVOT Group is dedicated to protecting today’s credit unions from the multitude of current and emerging security threats and has developed compliance offerings that incorporate analysis and execution of the following elements:</p>

                        <ul>
                            <li>Vulnerability Testing</li>
                            <li>Penetration Testing</li>
                            <li>IT Security Control Assessment</li>
                            <li>Cyber Security Risk Assessment</li>
                            <li>Information Security Training</li>
                        </ul>

                        <p>PIVOT Group is the only neutral firm that solely focuses on Information Security services. Rather than selling or reselling technology, our unique organization redefines Information Security by tailoring solutions. We take the fear out of Information Security and help Credit Unions make it a business enabler and competitive advantage. Our international consultant practice delivers the complete life cycle of security services that meet the business, resource, and regulatory requirements of our clients through working with our clients on the following elements:</p>

                        <ul>
                            <li>Meet NCUA Reg 748 A&B Requirements</li>
                            <li>Meet Data Privacy State, National, and Regulatory Compliance</li>
                            <li> Audit and Test Human, IT, and Physical Controls</li>
                            <li>Audit and Test Incident Response Programs</li>
                            <li>Identifying Cyber Security Risks</li>
                            <li>Provide Real Life Security Awareness Programs</li>
                            <li> Prepare Actionable Remediation Plans Prioritized by Criticality</li>
                            <li>Share Information Security Best Practices</li>
                            <li>Develop Executive Management Reporting on Audit Results and Business Risks</li>
                        </ul>

                        <h2>FAQs</h2>

                        <div class="bs-example">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"><i class="fa fa-plus"></i>Is my credit union required to have a Cyber Security program in place?</button>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p> NCUA Guidelines under Reg 748A require each credit union to “Implement a comprehensive written information security program that includes administrative, technical, and physical safeguards.” In addition, the program needs to be assessed on a regular/required basis and adjusted accordingly based on the results of the assessments</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo"><i class="fa fa-plus"></i>How will my staff know how to implement these measures?</button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p> PIVOT offers an education component to train all employees using the most up-to-date best practices for handling current threats and compliance requirements.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseFour"><i class="fa fa-plus"></i> We must respond to an examiner in the next 30 days. Can PIVOT help?</button>
                                        </h2>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Yes. PIVOT’s services are provided based on your needs and time frames both pre-exam and post-exam.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseFive"><i class="fa fa-plus"></i>How should our credit union begin assessing our needs?</button>
                                        </h2>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p> PIVOT has created a Road to Successful Information Security Methodology.</p>

                                            <ol>
                                                <li>The first step is to “Look.” You should do a business assessment to identify critical information assets and internal and external threats and should perform a vulnerability assessment to evaluate risks.</li>
                                                <li>The second step is “Plan” or create a strategy based on those assessments.</li>
                                                <li>The third step is “Act.” PIVOT Group works with your team and your roadmap from the above steps to maintain a safe environment and meet regulatory compliance at your credit union.</li>
                                                <li>The final step is “Repeat.” Information Security is a process requiring continual assessments and improvements.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingSix">
                                        <h2 class="mb-0">
                                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseSix"><i class="fa fa-plus"></i>How often is vulnerability, penetration and phishing testing done?</button>
                                        </h2>
                                    </div>
                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>It depends on the size of the credit union, the complexity and sophistication of the IT infrastructure, and if the credit union has experienced any material changes or data compromise. A baseline line requirement for smaller credit unions is they should be performed at least once a year. For the medium to the largest credit unions they are performed quarterly, monthly, and sometimes weekly depending on the results of their Risk Assessments.</p>
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