<style>
a{
    text-decoration: none;
}
#testimonials{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    width:100%;
} 
.testimonial-heading{
    letter-spacing: 1px;
    margin: 30px 0px;
    padding: 10px 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
 
.testimonial-heading span{
    font-size: 1.3rem;
    color: #252525;
    margin-bottom: 10px;
    letter-spacing: 2px;
    text-transform: uppercase;
}
/* .testimonial-box-container{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    width:100%;
} */
.testimonial-box{
    width:100%;
    box-shadow: 2px 2px 30px rgba(0,0,0,0.1);
    background-color: #ffffff;
    padding: 20px;
    margin: 15px;
    cursor: pointer;
}
.profile-img{
    width:50px;
    height: 50px;
    border-radius: 50%;
    overflow: hidden;
    margin-right: 10px;
}
.profile-img img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}
.profile{
    display: flex;
    align-items: center;
}
.name-user{
    display: flex;
    flex-direction: column;
}
.name-user strong{
    color: #3d3d3d;
    font-size: 1.1rem;
    letter-spacing: 0.5px;
}
.name-user span{
    color: #979797;
    font-size: 0.8rem;
}
.reviews{
    color: #f9d71c;
}
.box-top{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}
.client-comment p{
    font-size: 0.9rem;
    color: #4b4b4b;
}
.testimonial-box:hover{
    transform: translateY(-10px);
    transition: all ease 0.3s;
}
 
@media(max-width:1060px){
    .testimonial-box{
        width:45%;
        padding: 10px;
    }
}
@media(max-width:790px){
    .testimonial-box{
        width:100%;
    }
    .testimonial-heading h1{
        font-size: 1.4rem;
    }
}
@media(max-width:340px){
    .box-top{
        flex-wrap: wrap;
        margin-bottom: 10px;
    }
    .reviews{
        margin-top: 10px;
    }
}
::selection{
    color: #ffffff;
    background-color: #252525;
}
</style>
@include('layouts.head')

<div data-elementor-type="wp-page" data-elementor-id="1173" class="elementor elementor-1173">
    <section class="elementor-section elementor-top-section elementor-element elementor-element-1fc04b3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1fc04b3" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c3bc530" data-id="c3bc530" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-0c3e812 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0c3e812" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-876c540" data-id="876c540" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-696a29c animated-slow elementor-invisible elementor-widget elementor-widget-jkit_heading" data-id="696a29c" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="jkit_heading.default">
                                        <div class="elementor-widget-container">
                                            <div class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile-center jeg_module_1173_3_632ca94d76690">
                                                <div class="heading-section-title ">
                                                    <h2 class="heading-title">Our <span class="style-gradient"><span>Reviews</span></span>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d117da7" data-id="d117da7" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-3dc6910 elementor-icon-list--layout-inline elementor-widget__width-auto animated-slow elementor-mobile-align-center elementor-list-item-link-full_width elementor-invisible elementor-widget elementor-widget-icon-list"
                                        data-id="3dc6910" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:300}" data-widget_type="icon-list.default">
                                        <div class="elementor-widget-container">
                                            <link rel="stylesheet" href="plugins/elementor/assets/css/widget-icon-list.min.css">
                                            <ul class="elementor-icon-list-items elementor-inline-items">
                                                <li class="elementor-icon-list-item elementor-inline-item">
                                                    <span class="elementor-icon-list-text">Home</span>
                                                </li>
                                                <li class="elementor-icon-list-item elementor-inline-item">
                                                    <span class="elementor-icon-list-icon">
                    <i aria-hidden="true" class="jki jki-chevron-right-solid"></i>						</span>
                                                    <span class="elementor-icon-list-text">Our Reviews</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    
    <section id="testimonials" class="elementor-container">
                        <!--testimonials-box-container------>
                        <div class="testimonial-box-container"  style="padding: 6%; padding-right: 8%">
                            <div style="text-align: center;">
                                <p>
                                    These quotes represent a few of the many positive reviews that we have received for therapists who work with Nsansawellness. 
                                    We don’t pay anyone to provide their review and they are all made voluntarily. 
                                    Some people's experience receiving therapy with Nsansawellness might be different. 
                                    If you would like to review your therapist, <a href="{{ route('contact') }}">please send your review</a>.
                                </p>
                                <h3>Nsansa Wellness reviews from October 3, 2022</h3>
                            </div>
                            <!--BOX-1-------------->
                            <div class="testimonial-box">
                                <!--top------------------------->
                                <div class="box-top">
                                    <!--profile----->
                                    <div class="profile">
                                        <!--img---->
                                        <div class="profile-img">
                                            <img src="https://photos.psychologytoday.com/95fec9e0-2085-418d-ba90-26d36cfb15a1/2/320x400.jpeg" />
                                        </div>
                                        <!--name-and-username-->
                                        <div class="name-user">
                                            <strong>Liam mendes</strong>
                                            <span>@liammendes</span>
                                        </div>
                                    </div>
                                    <!--reviews------>
                                    <div class="reviews">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i><!--Empty star-->
                                    </div>
                                </div>
                                <!--Comments---------------------------------------->
                                <div class="client-comment">
                                    <p>
                                        Couldn't have asked for a better match. Highly recommend Brian to anyone looking to work with a therapist.
                                    </p>
                                </div>
                            </div>
                            <!--BOX-2-------------->
                            <div class="testimonial-box">
                                <!--top------------------------->
                                <div class="box-top">
                                    <!--profile----->
                                    <div class="profile">
                                        <!--img---->
                                        <div class="profile-img">
                                            <img src="https://www.psychologyhelp.com/wp-content/uploads/2020/10/black-marriage-counseling-online.jpg" />
                                        </div>
                                        <!--name-and-username-->
                                        <div class="name-user">
                                            <strong>Noah Wood</strong>
                                            <span>@noahwood</span>
                                        </div>
                                    </div>
                                    <!--reviews------>
                                    <div class="reviews">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i><!--Empty star-->
                                    </div>
                                </div>
                                <!--Comments---------------------------------------->
                                <div class="client-comment">
                                    <p>
                                        Angela has truly changed the way I live my life. Her caring personality and non judgement allowed me to be 
                                        honest about my struggles and work on them together. Her sense of humor added light and changed my perspective on things 
                                        I would normally consider heavy and unbearable. She allowed the space for me to cry, laugh and figure out this complicated thing called life. 
                                        I have the tools now to be able to move through life's inevitable challenges. The most important thing she taught me is that my feelings matter and that 
                                        I can figure out anything that's thrown at me and know that I will be OK on the other side.                                    
                                    </p>
                                </div>
                            </div>
                            <!--BOX-3-------------->
                            <div class="testimonial-box">
                                <!--top------------------------->
                                <div class="box-top">
                                    <!--profile----->
                                    <div class="profile">
                                        <!--img---->
                                        <div class="profile-img">
                                            <img src="https://assets.zencare.co/2019/02/how-to-find-a-black-therapist-1-1.jpg" />
                                        </div>
                                        <!--name-and-username-->
                                        <div class="name-user">
                                            <strong>Oliver Queen</strong>
                                            <span>@oliverqueen</span>
                                        </div>
                                    </div>
                                    <!--reviews------>
                                    <div class="reviews">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i><!--Empty star-->
                                    </div>
                                </div>
                                <!--Comments---------------------------------------->
                                <div class="client-comment">
                                    <p>
                                        Maurice is an excellent therapist, listens and allows me to express . offers options and views that actually allows me to see, 
                                        other sides of my "story". I highly recommend him. All in all great fit for me and my needs
                                    </p>
                                </div>
                            </div>
                            <!--BOX-4-------------->
                            <div class="testimonial-box">
                                <!--top------------------------->
                                <div class="box-top">
                                    <!--profile----->
                                    <div class="profile">
                                        <!--img---->
                                        <div class="profile-img">
                                            <img src="https://www.baatn.org.uk/wp-content/uploads/Eugene-Squash.jpg" />
                                        </div>
                                        <!--name-and-username-->
                                        <div class="name-user">
                                            <strong>Barry Allen</strong>
                                            <span>@barryallen</span>
                                        </div>
                                    </div>
                                    <!--reviews------>
                                    <div class="reviews">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i><!--Empty star-->
                                    </div>
                                </div>
                                <!--Comments---------------------------------------->
                                <div class="client-comment">
                                    <p>
                                        Steve was great always helpful and there when needed. Gave good advice and was very helpful.
                                    </p>
                                </div>
                            </div>
                        </div>
                      </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-c14718f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c14718f" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a604ae7" data-id="a604ae7" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    {{-- <section class="elementor-section elementor-inner-section elementor-element elementor-element-db73e97 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="db73e97" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-8b9eb1e" data-id="8b9eb1e" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-1cddf29 animated-slow elementor-widget-mobile__width-initial elementor-invisible elementor-widget elementor-widget-jkit_heading" data-id="1cddf29" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                                        data-widget_type="jkit_heading.default">
                                        <div class="elementor-widget-container">
                                            <div class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile-center jeg_module_1173_4_632ca94d7b304">
                                                <h5 class="heading-section-subtitle  style-color">Our Reviews</h5>
                                                <div class="heading-section-title ">
                                                    <h2 class="heading-title">Latest <span class="style-gradient"><span>Nsansa Wellness Reviews</span></span>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-64afac2 elementor-hidden-tablet elementor-hidden-mobile" data-id="64afac2" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-febb0bb elementor-widget__width-auto e-transform animated-slow elementor-invisible elementor-widget elementor-widget-jkit_button" data-id="febb0bb" data-element_type="widget" data-settings="{&quot;_transform_translateX_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:5,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:300,&quot;_transform_translateX_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                        data-widget_type="jkit_button.default">
                                        <div class="elementor-widget-container">
                                            <div class="jeg-elementor-kit jkit-button  icon-position-before jeg_module_1173_5_632ca94d7d7e1"><a href="#" class="jkit-button-wrapper">View More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </section> --}}
                    
                </div>
            </div>
        </div>
    </section>
</div>
@include('layouts.footer')