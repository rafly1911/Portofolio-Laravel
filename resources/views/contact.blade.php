    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contact Me - MyWebsite</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

        <!-- Custom CSS -->
        <link href="{{ asset('assets/css/contact.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    </head>
    <body>

        <!-- Include Navbar -->
        @include('partials.nav')

        <section class="py-5 bg-secondary text-white position-relative bg-dark">
            <div id="contact" class="contact-area section-padding">
                <div class="container">										
                    <div class="section-title text-center">
                        <h1>Contact Me</h1>
                        <p>Menjadi semakin dekat dan semakin mengenal satu sama lain dengan saya</p>
                    </div>					

                    <div class="row">
                        <div class="col-lg-7">	
                            <div class="contact">
                                <form class="form" method="POST" action="https://formspree.io/f/xblyaggd">
                                    <div class="row">
                                        <div class="form-group col-md-6 mb-5">
                                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                                        </div>
                                        <div class="form-group col-md-12 mb-5">
                                            <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                                        </div>
                                        <div class="form-group col-md-12 mb-5">
                                            <textarea rows="6" name="message" class="form-control" placeholder="Your Message" required></textarea>
                                        </div>

                                        <!-- Anti-spam honeypot -->
                                        <input type="text" name="_gotcha" style="display:none">

                                        <!-- Redirect after submit (optional) -->
                                        <input type="hidden" name="_next" value="https://yourwebsite.com/thanks">

                                        <div class="col-md-12 text-center mb-5">
                                            <button type="submit" class="btn btn-contact-bg" title="Submit Your Message!">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><!--- END COL --> 

                        <div class="col-lg-5">
                            <div class="single_address mb-4">
                                <i class="fa fa-map-marker"></i>
                                <h4>Address</h4>
                                <p>50, Kota Bambu Selatan, Jakarta Barat, DKI Jakarta</p>
                            </div>
                            <div class="single_address mb-4">
                                <i class="fa fa-envelope"></i>
                                <h4>Send your message</h4>
                                <p>fadriansyah1911@gmail.com</p>
                            </div>
                            <div class="single_address mb-4">
                                <i class="fa fa-phone"></i>
                                <h4>Call us on</h4>
                                <p>(+62) 085156344108</p>
                            </div>
                        </div><!--- END COL --> 
                    </div><!--- END ROW -->
                </div><!--- END CONTAINER -->	
            </div>
        </section>

    </body>
    </html>
