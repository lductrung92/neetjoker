@extends('front.layout.index')
@section('content')
    <!-- START PAGE META -->
    <div id="page-meta">
        <div class="inner group">
            <h3>Meet the Pink Rio team</h3>
            <h4>We make amazing things</h4>
        </div>
    </div>
    <!-- END PAGE META -->
    <!-- START PRIMARY -->
    <div id="primary" class="sidebar-left">
        <div class="inner group">
            <!-- START CONTENT -->
            <div id="content-page" class="content group">
                <div class="hentry group">
                    <div class="accordion-container">
                        <h3 class="accordion-title"><span class="icon-plus-sign"></span> NEET Joker </h3>
                        <div class="accordion-item">
                            <div class="accordion-item-thumb">
                                <img src="front/images/avatar/linh.jpg" alt="Susan" style="width:129px;" />
                            </div>
                            <div class="accordion-item-content" style="margin-left: 161px;">
                                <h4>Web Designer</h4>
                                <p>Full Name:</strong>Linh , Nguyen Phan Hoang</p>
                                <p>Phone: </strong>.0905.777.594</p>
                                <div class="clear space"></div>
                                <a href="# " class="socials-small facebook-small" title="Facebook">facebook</a>
                                <a href="#" class="socials-small rss-small" title="Rss">rss</a>
                                <a href="#" class="socials-small twitter-small" title="Twitter">twitter</a>
                                <a href="#" class="socials-small youtube-small" title="Youtube">youtube</a>
                                <a href="#" class="socials-small flickr-small" title="Flickr">flickr</a>
                                <a href="#" class="socials-small linkedin-small" title="Linkedin">linkedin</a>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <h3 class="accordion-title"><span class="icon-plus-sign"></span> Samuel</h3>
                        <div class="accordion-item">
                            <div class="accordion-item-thumb">
                                <img src="front/images/avatar/samuel1-130x176.png" alt="Samuel" style="width:129px;" />
                            </div>
                            <div class="accordion-item-content" style="margin-left: 162px;">
                                <h4>Art Director</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Sed nec placerat odio</strong>. Vestibulum in orci nec turpis ultrices malesuada at et dolor. Praesent dapibus augue ac mauris fringilla condimentum vestibulum!</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Sed nec placerat odio</strong>. Vestibulum in orci nec turpis ultrices malesuada at et dolor. Praesent dapibus augue ac mauris fringilla condimentum vestibulum!</p>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <h3 class="accordion-title"><span class="icon-plus-sign"></span> Jasmine</h3>
                        <div class="accordion-item">
                            <div class="accordion-item-thumb">
                                <img src="front/images/avatar/susanna1-130x176.png" alt="Jasmine" style="width:129px;" />
                            </div>
                            <div class="accordion-item-content" style="margin-left: 162px;">
                                <h4>Copywriter</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Sed nec placerat odio</strong>. Vestibulum in orci nec turpis ultrices malesuada at et dolor. Praesent dapibus augue ac mauris fringilla condimentum vestibulum!</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Sed nec placerat odio</strong>. Vestibulum in orci nec turpis ultrices malesuada at et dolor. Praesent dapibus augue ac mauris fringilla condimentum vestibulum!</p>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <h3 class="accordion-title"><span class="icon-plus-sign"></span> Thomas</h3>
                        <div class="accordion-item">
                            <div class="accordion-item-thumb">
                                <img src="front/images/avatar/thomas1-130x176.png" alt="Thomas" style="width:129px;" />
                            </div>
                            <div class="accordion-item-content" style="margin-left: 162px;">
                                <h4>Sales Account</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Sed nec placerat odio</strong>. Vestibulum in orci nec turpis ultrices malesuada at et dolor. Praesent dapibus augue ac mauris fringilla condimentum vestibulum!</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Sed nec placerat odio</strong>. Vestibulum in orci nec turpis ultrices malesuada at et dolor. Praesent dapibus augue ac mauris fringilla condimentum vestibulum!</p>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <h3 class="accordion-title"><span class="icon-plus-sign"></span> Victor</h3>
                        <div class="accordion-item">
                            <div class="accordion-item-thumb">
                                <img src="front/images/avatar/victor1-130x176.png" alt="Victor" style="width:129px;" />
                            </div>
                            <div class="accordion-item-content" style="margin-left: 162px;">
                                <h4>Customer Service</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Sed nec placerat odio</strong>. Vestibulum in orci nec turpis ultrices malesuada at et dolor. Praesent dapibus augue ac mauris fringilla condimentum vestibulum!</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Sed nec placerat odio</strong>. Vestibulum in orci nec turpis ultrices malesuada at et dolor. Praesent dapibus augue ac mauris fringilla condimentum vestibulum!</p>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                    <script>
                        jQuery(document).ready(function($){

                            $('.accordion-title').click(function(){
                                if( !$(this).hasClass('active') ) {
                                    $('.accordion-title').removeClass('active').find('span').addClass('icon-plus-sign').removeClass('icon-minus-sign');
                                    $('.accordion-item').slideUp();

                                    $(this).toggleClass('active')
                                            .find('span').removeClass('icon-plus-sign').addClass('icon-minus-sign').parent()
                                            .next().slideToggle();
                                }
                            }).filter(':first').click();

                        });
                    </script>
                </div>
                <!-- START COMMENTS -->
                <div id="comments">
                </div>
                <!-- END COMMENTS -->
            </div>
            <!-- END CONTENT -->
            <!-- START SIDEBAR -->
            <div id="sidebar-testimonials" class="sidebar group">
                <div class="widget-first widget testimonial-widget">
                    <h3>Testimonials</h3>
                    <div class="testimonial-text">
                        <ul>
                            <li>
                                <blockquote>
                                    <p>I purchased this theme and I really like it. The theme authors have been very helpful in the support area of their website. Would definitely recommend to anyone needing a corporate wordpress theme. </p>
                                    <a href="testimonial.html" class="more-link">[...]</a>
                                    <div class="name-testimonial"><a class="name-testimonial" href="testimonial.html">Erica Evans </a></div>
                                </blockquote>
                            </li>
                            <li>
                                <blockquote>
                                    <p>Bookmark this theme as one of your “Must Haves for 2012” This theme is without a doubt one of our Top 5 Purchases. Once you get used to how the content is organised in Admin, </p>
                                    <a href="testimonial.html" class="more-link">[...]</a>
                                    <div class="name-testimonial"><a class="name-testimonial" href="testimonial.html">Ricardo Mori </a></div>
                                </blockquote>
                            </li>
                            <li>
                                <blockquote>
                                    <p>I am absolutely thrilled with this theme! I have never built a website before but your instructions and design make it both fun and easy to do. …Thanks a lot for your help! your support </p>
                                    <a href="testimonial.html" class="more-link">[...]</a>
                                    <div class="name-testimonial"><a class="name-testimonial" href="testimonial.html">Elisa Meis </a></div>
                                </blockquote>
                            </li>
                            <li>
                                <blockquote>
                                    <p>I already given a <strong>5-star rating</strong>, but I also wanted to provide my two cents in case anyone is unsure about purchasing this theme. Not only is the theme itself very versatile and easy to </p>
                                    <a href="testimonial.html" class="more-link">[...]</a>
                                    <div class="name-testimonial"><a class="name-testimonial" href="testimonial.html">Joy Mergot </a></div>
                                </blockquote>
                            </li>
                        </ul>
                    </div>
                    <script type="text/javascript" src="js/testimonials.js"></script>
                </div>

                <div class="widget-last widget featured-projects">
                    <h3>From the portfolio</h3>
                    <div class="featured-projects-widget flexslider">
                        <ul class="slides">
                            <li>
                                <div class="thumb-project"><a href="project.html"><img src="front/images/projects/0061-320x154.jpg" alt="0061" title="0061" /></a></div>
                                <h4>Love</h4>
                                <p class="categories"><a href="category.html">Brand Identity</a>, <a href="category.html">Web Design</a></p>
                            </li>
                            <li>
                                <div class="thumb-project"><a href="project.html"><img src="front/images/projects/0071-320x154.jpg" alt="0071" title="0071" /></a></div>
                                <h4>Kineda</h4>
                                <p class="categories"></p>
                            </li>
                            <li>
                                <div class="thumb-project"><a href="project.html"><img src="front/images/projects/0081-320x154.jpg" alt="0081" title="0081" /></a></div>
                                <h4>Steep This!</h4>
                                <p class="categories"><a href="category.html">Brand Identity</a>, <a href="category.html">Web Design</a></p>
                            </li>
                            <li>
                                <div class="thumb-project"><a href="project.html"><img src="front/images/projects/009-320x154.jpg" alt="009" title="009" /></a></div>
                                <h4>Guanacos</h4>
                                <p class="categories"></p>
                            </li>
                            <li>
                                <div class="thumb-project"><a href="project.html"><img src="front/images/projects/0011-320x154.jpg" alt="0011" title="0011" /></a></div>
                                <h4>Miller Bob</h4>
                                <p class="categories"></p>
                            </li>
                        </ul>
                    </div>
                    <script type="text/javascript" src="js/projects.js"></script>
                </div>
            </div>
            <!-- END SIDEBAR -->
            <!-- START EXTRA CONTENT -->
            <!-- END EXTRA CONTENT -->
        </div>
    </div>
    <!-- END PRIMARY -->

@endsection