<?php if(!class_exists('Rain\Tpl')){exit;}?>

<section class="mo-content">
    <div class="row">
        <div class="large-12 columns">
            <ul id="pagetitle">
                <li class="pagetitle-left mo-animate" data-animate="bounceIn">
                    <i class="icon-map"></i>
                </li>

                <li class="pagetitle-right mo-animate" data-animate="fadeInLeft">
                    <h2>Contact Us</h2>
                    <p>We deliver intelligent full builds for adventurous brands.</p>

                    <div class="breadcrumb">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li class="current-page"><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="mo-content">
    <div class="row">
        <div class="large-12 columns">
            <div id="map"></div>

            <div id="map-info" class="mo-animate" data-animate="fadeInRight">
                <div id="mini-logo">
                    <h2>Standard Flutter<span>*</span></h2>
                </div>
                <p><strong>Brasil</strong><br/>
                    Rua da Consolação, 3367<br/>
                    São Paulo, São Paulo<br/>
                    Tel: +51 11 39xx 3796
                </p>
                <p>Lorem ipsum dolor consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
        </div>
    </div>
</section>

<section class="mo-content">
    <div class="row">
        <div class="large-12 columns">
            <ul class="large-block-grid-3 medium-block-grid-3 medium-block-grid-potrait-1 small-block-grid-1 no-gutter contact-list">
                <li class="mo-animate" data-animate="fadeInLeft">
                    <i class="icon-phonealt"></i>
                    <p class="mo-tablet ptop gap" data-bottom="5">Our Telephone</p>
                    <h4 class="gap" data-bottom="5">+1 212 966 3796</h4>
                    <p>Excepteur sint occaecat cupidatat</p>
                </li>
                <li class="mo-animate" data-animate="fadeInLeft" data-delay="300">
                    <i class="icon-envelope"></i>
                    <p class="mo-tablet ptop gap" data-bottom="5">Our Email</p>
                    <h4 class="gap" data-bottom="5">hello@standardflutter.com</h4>
                    <p>Duis aute irure dolor reprehenderit</p>
                </li>
                <li class="mo-animate" data-animate="fadeInLeft" data-delay="600">
                    <i class="icon-time"></i>
                    <p class="mo-tablet ptop gap" data-bottom="5">Office Hours</p>
                    <h4 class="gap" data-bottom="5">7:00 - 18:00</h4>
                    <p>Architecto beatae vitae dictasun</p>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="mo-content">
    <div class="row">
        <div class="large-6 medium-6 medium-potrait-12 columns mo-animate" data-animate="fadeInLeft">
            <img src="img/sample/contact_img.jpg" alt="" class="img-left gap" data-bottom="30" />
            <h4 class="mo-animate" data-animate="fadeInLeft">Drop Us a Line</h4>
            <p class="mo-animate" data-animate="fadeInDown">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
        </div>

        <div class="large-6 medium-6 medium-potrait-12 columns">
            <div class="alert-box green success-contact">
                <i class="icon-circleselect"></i>
                Your message has been sent <strong>successfully</strong> Thank you!
                <a data-component="alert" href="#" class="close">&times;</a>
            </div>

            <form action="#" class="mo-animate" data-animate="fadeInDown">
                <ul class="contact-form">
                    <li class="input-half left name-ico">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Seu Nome">
                    </li>
                    <li class="input-half right email-ico">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Seu Email">
                    </li>
                    <li class="subj-ico">
                        <input type="text" name="subject" class="form-control" id="subject" placeholder="Assunto">
                    </li>
                    <li>
                        <textarea name="message" class="form-control" id="message" rows="8" placeholder="Sua Mensagem"></textarea>
                    </li>
                    <li>
                        <button class="button bluex mo-animate" data-animate="bounceIn" id="buttonsend">Send Message</button>
                        <span class="loading"></span>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</section>

