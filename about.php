<?php
/**
 * Template name: about page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Assignment_theme
 */

get_header();
?>
<!--about-us-->
<section class="section pt-50">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>About us</h5>
                    </div>
                </div>
            </div>
        
            <div class="row ">
                <div class="col-lg-8 mt-30">
                    <div class="about-us">
                        <div class="about-us-image">
                            <img src="assets/img/about-us.jpg" alt="">
                        </div>
                        <div class="description">
                            <h6>Thank you for checking out our blog website.</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus facere, nemo dignissimos, in labore nostrum provident
                                perferendis minima accusamus aliquam reprehenderit autem 
                            </p>
                            <p>
                                praesentium sunt beatae libero non totam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus facere, nemo dignissimos, in labore nostrum provident
                                perferendis minima accusamus aliquam reprehenderit autem praesentium sunt beatae libero non totam.
                            </p>
                            <div class="quote">
                                <div>
                                    <i class="icon_quotations_alt"></i>
                                </div>
                                <p>
                                     "My website’s kind of fun for me. I get to do drawings on that. 
                                     It’s kind of fun.”
                                </p>
                                <small>Jeff Bridges.</small>
                            </div>
                           <p>
                             Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur malesuada malesuada metus ut placerat. Cras a porttitor
                            quam, eget ornare sapien. In sit amet vulputate metus. Nullam eget rutrum nisl. Sed tincidunt lorem sed maximus interdum.
                            Interdum malesuada fames ante ipsum primis in faucibus. Aenean scelerisque efficitur mauris nec tincidunt. cursus leo ultricies
                            magna faucibus id.
                           </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 max-width">
                    <!--widget-latest-posts-->
                    <div class="widget ">
                        <div class="section-title">
                            <h5>Latest Posts</h5>
                        </div>
                        <ul class="widget-latest-posts">
                            <li class="last-post">
                                <div class="image">
                                    <a href="post-default.html">
                                        <img src="assets/img/latest/1.jpg" alt="...">
                                    </a>
                                </div>
                                <div class="nb">1</div>
                                <div class="content">
                                    <p>
                                        <a href="post-default.html">5 Things I Wish I Knew Before Traveling to Malaysia</a>
                                    </p>
                                    <small>
                                        <span class="icon_clock_alt"></span> January 15, 2021</small>
                                </div>
                            </li>
                            <li class="last-post">
                                <div class="image">
                                    <a href="post-default.html">
                                        <img src="assets/img/latest/2.jpg" alt="...">
                                    </a>
                                </div>
                                <div class="nb">2</div>
                                <div class="content">
                                    <p>
                                        <a href="post-default.html">Everything you need to know about visiting the Amazon.</a>
                                    </p>
                                    <small>
                                        <span class="icon_clock_alt"></span> January 15, 2021</small>
                                </div>
                            </li>
                            <li class="last-post">
                                <div class="image">
                                    <a href="post-default.html">
                                        <img src="assets/img/latest/3.jpg" alt="...">
                                    </a>
                                </div>
                                <div class="nb">3</div>
                                <div class="content">
                                    <p>
                                        <a href="post-default.html">How to spend interesting vacation after hard work?</a>
                                    </p>
                                    <small>
                                        <span class="icon_clock_alt"></span> January 15, 2021</small>
                                </div>
                            </li>
                            <li class="last-post">
                                <div class="image">
                                    <a href="post-default.html">
                                        <img src="assets/img/latest/4.jpg" alt="...">
                                    </a>
                                </div>
                                <div class="nb">4</div>
                                <div class="content">
                                    <p>
                                        <a href="post-default.html">10 Best and Most Beautiful Places to Visit in Italy</a>
                                    </p>
                                    <small>
                                        <span class="icon_clock_alt"></span> January 15, 2021</small>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--/-->
                
                    <!--widget-instagram-->
                    <div class="widget">
                        <div class="section-title">
                            <h5>Instagram</h5>
                        </div>
                        <ul class="widget-instagram">
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/1.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/2.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/3.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/4.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/5.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/6.jpg" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--/-->
                </div>
            </div>
        </div>
    </section>        

    <!--newslettre-->
    <section class="newslettre">
        <div class="container-fluid">
            <div class="newslettre-width text-center">
                <div class="newslettre-info">
                    <h5>Subscribe to our Newslatter</h5>
                    <p> Sign up for free and be the first to get notified about new posts. </p>
                </div>
                <form action="#" class="newslettre-form">
                    <div class="form-flex">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your email adress" required="required">
                        </div>
                        <button class="submit-btn" type="submit">Subscribe</button>
                    </div>
                </form>
                <div class="social-icones">
                    <ul class="list-inline">
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>Facebook</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>Twitter </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-instagram"></i>Instagram </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-youtube"></i>Youtube</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php
    get_footer();