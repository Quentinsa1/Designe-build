@extends('partials.template')
@section('content')
<div class="page-content">
    <!-- inner page banner -->
    <div class="dez-bnr-inr overlay-black-middle" style="background-image:url({{ asset('assets/images/background/b2.jpg') }});">
        <div class="container">
            <div class="dez-bnr-inr-entry">
                <h1 class="text-white" style="text-align: center">Contact-Nous </h1>
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="javascript:void(0);">Acceuil</a></li>
                <li>Contact-Nous</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <!-- contact area -->
    <div class="section-full content-inner bg-white contact-style-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                    <div class="icon-bx-wraper bx-style-1 p-a30 center">
                        <div class="icon-xl text-primary m-b20"> <a href="javascript:void(0);" class="icon-cell"><i class="fas fa-map-marker-alt"></i></a> </div>
                        <div class="icon-content">
                            <h5 class="dez-tilte text-uppercase">Addresse</h5>
                            <p>Bénin: llot 4007 Fifadji-Houto, Cotonou Bénin</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                    <div class="icon-bx-wraper bx-style-1 p-a30 center">
                        <div class="icon-xl text-primary m-b20"> <a href="javascript:void(0);" class="icon-cell"><i class="fa fa-envelope"></i></a> </div>
                        <div class="icon-content">
                            <h5 class="dez-tilte text-uppercase">Email</h5>
                            <p>d&b@7elite-group.com <br> </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                    <div class="icon-bx-wraper bx-style-1 p-a30 center">
                        <div class="icon-xl text-primary m-b20"> <a href="javascript:void(0);" class="icon-cell"><i class="fa fa-phone"></i></a> </div>
                        <div class="icon-content">
                            <h5 class="dez-tilte text-uppercase">Phone</h5>
                            <p>+229 99 53 57 60 <br> +229 99 53 57 60</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                    <div class="icon-bx-wraper bx-style-1 p-a30 center">
                        <div class="icon-xl text-primary m-b20"> <a href="javascript:void(0);" class="icon-cell"><i class="fa fa-fax"></i></a> </div>
                        <div class="icon-content">
                            <h5 class="dez-tilte text-uppercase">Content title</h5>
                            <p>+12 3456 7890 <br> +23 123 456 7890</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Left part start -->
                <div class="col-lg-6">
                    <div class="p-a30 bg-gray clearfix m-b30 ">
                        <h2>Nous Envoyer un Message</h2>
                        <div class="dzFormMsg"></div>
                        <form method="post" class="dzForm" action="contact_smtp.php">
                        <input type="hidden" value="Contact" name="dzToDo" >
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="dzName" type="text" required class="form-control" placeholder="Votre Nom">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="dzEmail" type="email" class="form-control" required  placeholder="Votre Mail" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="dzPhoneNumber" type="text" required class="form-control" placeholder="Téléphone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="dzSubject" type="text" required class="form-control" placeholder="Objet">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <textarea name="dzMessage" rows="4" class="form-control" required placeholder="Message..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="g-recaptcha" data-sitekey="<!-- Put Your ReCapctha Site Key -->" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                                            <input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button name="submit" type="submit" value="Submit" class="site-button "> <span>Envoyer</span> </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6 d-flex">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.013923000541!2d2.4204744153264074!3d6.498932595377692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1023556d6a3e9e3d%3A0x2df9e6a5a4a8a1e1!2sFifadji-Houto%2C%20Cotonou%2C%20B%C3%A9nin!5e0!3m2!1sfr!2sfr!4v1620000000000!5m2!1sfr!2sfr"
                            class="align-self-stretch m-b30"
                            style="border:0; width:100%; min-height:350px;"
                            allowfullscreen
                            loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area  END -->
</div>
<!-- Ils nous font confiance END -->
@endsection