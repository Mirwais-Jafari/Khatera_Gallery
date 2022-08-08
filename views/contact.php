<!DOCTYPE html>
<html>
<head>
	<title>Contact | Khatera Gallery</title>
</head>
<?php require("header.php"); ?>

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="../assets/img/bg4.png"></div>

    <div class="container-fluid tm-mt-60">
        <div class="row tm-mb-50">
            <div class="col-lg-4 col-12 mb-5">
                <h2 class="tm-text-primary mb-5">Contact Page</h2>
                <form id="contact-form" action="" method="POST" class="tm-contact-form mx-auto">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control rounded-0" placeholder="Name" required />
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control rounded-0" placeholder="Email" required />
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="contact-select" name="inquiry">
                            <option value="-">Subject</option>
                            <option value="sales">Sales &amp; Marketing</option>
                            <option value="photography">Photography</option>
                            <option value="request"> Representation request </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea rows="8" name="message" class="form-control rounded-0" placeholder="Message" required=></textarea>
                    </div>

                    <div class="form-group tm-text-right">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </form>                
            </div>
            <div class="col-lg-4 col-12 mb-5">
                <div class="tm-address-col">
                    <h2 class="tm-text-primary mb-5">Our Address</h2>
                    <p class="tm-mb-50"> First agency: <br> Kabul, pole Sorkh, beside the Islamic Bank.</p>
                    <p class="tm-mb-50"> Second agency: <br> Kabul, Istgah dawa khana, next to the Dubai tower.</p>
                    <p class="tm-mb-50"> Third agency: <br> Ghazni, Adeh Qarabagh, infront of the Khatam Alnabien Hospital.</p>
                    <ul class="tm-contacts">
                        <li>
                            <a href="#" class="tm-text-gray">
                                <i class="fas fa-envelope"></i>
                                Email: mirwais.jafari760@gamil.com
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tm-text-gray">
                                <i class="fas fa-phone"></i>
                                Tel: 785-544-760
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tm-text-gray">
                                <i class="fas fa-globe"></i>
                                URL: www.khateraGallery.com
                            </a>
                        </li>
                    </ul>
                </div>                
            </div>
            <div class="col-lg-4 col-12">
                <h2 class="tm-text-primary mb-5">Our Location</h2>
                <!-- Map -->
                <div class="mapouter mb-4">
                    <div class="gmap-canvas">
                        <iframe width="100%" height="520" id="gmap-canvas"
                            src="https://maps.google.com/maps?q=Kabul,pole+sorkh"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>               
            </div>
        </div>
        <div class="row tm-mb-74 tm-people-row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12 mb-5">
                <img src="../assets/img/mirwais.JPG" alt="Image" class="mb-4 img-fluid" style="width:420px;height:236px;object-fit:cover;">
                <h2 class="tm-text-primary mb-4">Mirwais Jafari</h2>
                <h3 class="tm-text-secondary h5 mb-4">Developer & Designer</h3>
                <p class="mb-4">
                    I am a student in Kabul university from 2019, I study in computer science faculty,IS department.
                    i'm interested in frontend and i want to be a full stack develper.
                </p>
                <ul class="tm-social pl-0 mb-0">
                    <li><a href="https://facebook.com"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://whatsapp.com"><i class="fab fa-whatsapp"></i></a></li>
                    <li><a href="https://linkedin.com"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="https://instagram.com"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12 mb-5">
                <img src="../assets/img/yaser.jpg" alt="Image" class="mb-4 img-fluid" style="width:420px;height:236px;object-fit:contain;">
                <h2 class="tm-text-primary mb-4"> Yaser Saee</h2>
                <h3 class="tm-text-secondary h5 mb-4"> Developer $ Designer</h3>
                <p class="mb-4">
                I am a student in Kabul university from 2019, I study in computer science faculty,IS department.
                    i'm interested in frontend and i want to be a full stack develper.
                </p>
                <ul class="tm-social pl-0 mb-0">
                    <li><a href="https://facebook.com"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://linkedin.com"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="https://instagram.com"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
<?php require("footer.php"); ?>