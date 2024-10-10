<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PT Bara Blasting Perkasa | Contact Us</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>

<div class="page-wrapper">

    <!-- Main Header -->
    <header class="main-header header-style-one">
        <!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container d-flex flex-wrap">
                    <!-- Info List -->
                    <ul class="info-list">
                        <li><a href="#"><span class="icon fa-solid fa-phone fa-fw"></span>+62 21 837 85938</a></li>
                        <li><a href="#"><span class="icon fa-solid fa-envelope fa-fw"></span>company.info@barablastingperkasa.co.id</a></li>
                        <li><a href="#"><span class="icon fa-solid fa-map fa-fw"></span>Office Address: Menara Imperium 10th Floor, Jalan H.R. Rasuna Said Kav 1,<br> Setiabudi, Jakarta Selatan 12980</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Other Header Code -->

    </header>
    <!-- End Main Header -->

    <!-- Page Title -->
    <section class="page-title" style="background-image:url('{{ asset('images/background/7.jpg') }}')">
        <div class="auto-container">
            <h2>Contact Us</h2>
            <ul class="bread-crumb clearfix" role="navigation" aria-label="Breadcrumb">
                <li><a href="{{ url('/') }}" aria-label="Home">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </section>

    <!-- End Page Title -->

    <!-- Contact One -->
    <section class="contact-one" style="background-image:url('{{ asset('images/background/map-1.png') }}')">
        <div class="auto-container">
            <div class="sec-title">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="left-box">
                        <div class="sec-title_title">Contact us</div>
                    </div>
                </div>
            </div>

            <!-- Display Error or Success Messages -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row clearfix">
                <!-- Form Column -->
                <div class="form-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="contact-form">
                            <form method="POST" action="{{ route('send.email') }}" id="contact-form">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="username">Name (required)</label>
                                        <input type="text" id="username" name="username" placeholder="Your name*" required>
                                    </div>
                            
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="to_email">Email address (required)</label>
                                        <input type="email" id="to_email" name="to_email" placeholder="Recipient's email" required>
                                    </div>
                            
                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <label for="phone">Phone (optional)</label>
                                        <input type="text" id="phone" name="phone" placeholder="Phone">
                                    </div>
                            
                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <label for="subject">Subject (required)</label>
                                        <input type="text" id="subject" name="subject" placeholder="Subject" required>
                                    </div>
                            
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label for="message">Your message</label>
                                        <textarea id="message" name="body" placeholder="Your text here..." required></textarea>
                                    </div>
                            
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button class="btn-style-seven theme-btn" type="submit">
                                            <span class="btn-wrap">
                                                <span class="text-one">Send message</span>
                                                <span class="text-two">Send message</span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>

                <!-- Info Column (Same as Original) -->
                <div class="info-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Contact Block for Address, Phone, Email (same as original) -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact One -->

    <!-- Map Section and Footer (same as original) -->
    
</div>
<!-- End PageWrapper -->

<!-- Script Files (same as original) -->

</body>
</html>
