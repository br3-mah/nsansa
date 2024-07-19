@include('layouts.head')
<style>
.wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  height: 100vh;
}

.py-16 {
  margin-top: 16px;
}

.body__subtitle {
  display: inline-block;
  font-size: 18px;
  text-align: center;
  width: 520px;
}

.card__container {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 60px;
  color: #ffffff;
  padding: 6%;
}

.card__container .card {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  position: relative;
  background: #171727;
  width: 265px;
  height: 265px;
  margin: 20px;
  padding: 35px 30px;
  border-radius: 20px;
}

.card__container .card.cheapest {
  background: #242486;
}

.card__container .card__title {
  font-size: 22px;
  color: #ffffff;
}

.card__container .card__price {
  font-size: 26px;
  margin-top: 20px;
  color: #8f93fc;
}

.card__container .card .best-price {
  position: absolute;
  top: -10px;
  left: calc(50% - (35px + 12px));
  background: #a0e0b2;
  border-radius: 15px;
  color: #171727;
  padding: 2px 10px;
}

.card__container .card small {
  display: block;
  margin-top: 50px;
  font-size: 16px;
  cursor: pointer;
}

button {
  background: none;
  border: 1px solid #1f1f35;
  font-size: 16px;
  font-family: "Nunito", sans-serif;
  margin-top: 50px;
  padding: 15px 45px;
  border-radius: 10px;
  color: #8080b9;
  cursor: pointer;
  transition: background 250ms ease-in-out;
}

button:hover {
  background: #1f1f35;
}

@media screen and (max-width: 768px) {
  .wrapper {
    height: 100%;
  }

  .card__container {
    flex-direction: column;
  }

  .card {
    margin: 0px 0px;
  }

  .body__title {
    font-size: 24px;
    margin: 30px 0 10px 0;
  }

  .body__subtitle {
    font-size: 16px;
    width: 75%;
  }

  .button {
    margin: 25px;
  }

  /* Modal */
  .popup-overlay {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.7);
    transition: opacity 500ms;
    visibility: hidden;
    opacity: 0;
  }
  .popup-overlay:target {
    visibility: visible;
    opacity: 1;
  }
  .popup {
    margin: 70px auto;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    width: 30%;
    position: relative;
    transition: all 5s ease-in-out;
  }
  .popup h2 {
    margin-top: 0;
  }
  .popup .close {
    position: absolute;
    top: 20px;
    right: 30px;
    transition: all 200ms;
    font-size: 30px;
    font-weight: bold;
    text-decoration: none;
    color: #333;
  }
  .popup .close:hover {
    color: #06d85f;
  }
  .popup .content {
    max-height: 30%;
    overflow: auto;
  }
  
}

</style>
<div data-elementor-type="wp-page" data-elementor-id="1173" class="elementor elementor-1173">
  {{-- <section class="elementor-section elementor-top-section elementor-element elementor-element-1fc04b3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1fc04b3" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
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
                                                  <h2 class="heading-title">Make <span class="style-gradient"><span>Payments</span></span>
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
                                          <i aria-hidden="true" class="jki jki-chevron-right-solid"></i></span>
                                                  <span class="elementor-icon-list-text">Make Payments</span>
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
  </section> --}}
  <section>

    <div class="wrapper">
      {{-- <h1 class="body__title center py-16">Northsgate Analytics Ai Pricing</h1>
      <p class="body__subtitle center py-16">
        Check out our best deals discover what your
        website can do.
      </p> --}}
      <div class="card__container">
        @forelse ($plans as $plan)

        <div class="card cheapest">
            <h2 class="card__title">{{ $plan->name ?? '' }}</h2>
            <p class="">{{ $plan->duration ?? '' }} Days</p>
            <h1 class="card__price">K{{ $plan->price ?? 0.00 }}</h1>
            <p class="old-offer">1 hour /session</p>
            @forelse ($plan->feature as $feature)
              <p class="old-offer">{{ $feature->desc }}</p>
            @empty
            
            @endforelse
            <a href="{{ route('bill-patient', ['id' => $plan->id]) }}" target="_blank"><small style="color:#053d53;">Get Started &xrarr; </small></a>
        </div>
        @empty
          <div>
            <p>No Packages Found.</p>
          </div>
        @endforelse


        {{-- <div class="card">
          <span class="best-price">50% OFF</span>
          <h2 class="card__title">Insurance Payer</h2>
          <h1 class="card__price">K500.00</h1>
          <p class="old-offer">Get 3 sessions</p>
          <p class="old-offer">1 hour /session</p>
          <a href="{{ route('invoice-patient', ['type' => 'ZjMyZmYyYzEz']) }}" target="_blank"><small style="color:#053d53;">Get Started &xrarr; </small></a>
        </div> --}}
        {{-- <div class="card">
          <h2 class="card__title">Ai Platnium</h2>
          <h1 class="card__price">$4,999.99 /mo</h1>
          <p class="old-offer">Instead of $7,999.99</p>
          <a href="https://northsgate.com" target="_blank"><small style="color:#ffffff;">Get Started &xrarr; </small></a>
        </div> --}}
      </div>
      {{-- <a href="{{ route('patient') }}"><button>I'll Pay Later</button></a> --}}
    </div>

  </section>
</div>
@include('layouts.footer')