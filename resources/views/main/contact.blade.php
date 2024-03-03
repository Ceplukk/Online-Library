@extends('layoutsMain.main')
@section('content')
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Contact Us</h3>
                    <span class="breadcrumb"><a href="{{route('online.library')}}">Home</a> > Contact Us</span>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-page section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>Say Hello!</h2>
                        </div>
                        <p>Online Library Online is meticulously designed to enhance your online library experience. This
                            user-friendly template is crafted to suit the needs of your digital library or e-learning
                            platform. Utilize Online Library Online for any purpose related to online knowledge
                            repositories.
                            Thank you for choosing Online Library Online to elevate your digital reading and learning
                            environment.</p>
                        <ul>
                            <li><span>Address</span> Jl. Raya Kb. Jeruk No.27, RT.1/RW.9, Kemanggisan, Kec. Palmerah, Kota
                                Jakarta Barat, Daerah Khusus Ibukota Jakarta 11530</li>
                            <li><span>Phone</span>+62 897-7651-650</li>
                            <li><span>Email</span>yazid.mauln@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4685425915973!2d106.77967440976593!3d-6.2017531607258025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6dcc7d2c4ad%3A0x209cb1eef39be168!2sUniversitas%20Bina%20Nusantara%20Kampus%20Anggrek!5e0!3m2!1sid!2sid!4v1702222897802!5m2!1sid!2sid"
                                        width="100%" height="325px" frameborder="0" style="border:0; border-radius: 23px;"
                                        allowfullscreen=""></iframe>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <form id="contact-form" action="" method="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input type="name" name="name" id="name"
                                                    placeholder="Your Name..." autocomplete="on" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input type="surname" name="surname" id="surname"
                                                    placeholder="Your Surname..." autocomplete="on" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                                    placeholder="Your E-mail..." required="">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input type="subject" name="subject" id="subject" placeholder="Subject..."
                                                    autocomplete="on">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <button type="submit" id="form-submit" class="orange-button">Send Message
                                                    Now</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
