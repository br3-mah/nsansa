@include('layouts.head')
<style>
section.pricing-section {
	 width: 100%;
	 height: 100vh;
}
 section.pricing-section .pricing {
	 width: 100%;
	 height: 100%;
	 position: relative;
}
 section.pricing-section .pricing .pricing-header {
	 position: absolute;
	 top: 0;
	 left: 50%;
	 transform: translateX(-50%);
	 background-color: #bc1e4a;
	 display: flex;
	 flex-direction: column;
	 justify-content: center;
	 align-items: center;
	 row-gap: 12px;
	 padding: 40px 70px;
	 border-radius: 0px 0px 8px 8px;
}
 section.pricing-section .pricing .pricing-header p {
	 font-weight: 300;
}
 section.pricing-section .pricing .pricing-header h3 {
	 font-weight: 500;
	 display: flex;
	 align-items: center;
	 column-gap: 5px;
}
 section.pricing-section .pricing .pricing-body {
	 display: flex;
	 flex-direction: column;
	 align-items: center;
	 row-gap: 25px;
	 position: absolute;
	 top: 55%;
	 left: 50%;
	 transform: translate(-50%, -50%);
}
 section.pricing-section .pricing .pricing-body .pricing-body-header {
	 display: flex;
	 flex-direction: column;
	 justify-content: center;
	 align-items: center;
	 row-gap: 15px;
     margin-top: 25%;
}
 section.pricing-section .pricing .pricing-body .pricing-body-header h2 {
	 font-weight: 500;
}
 section.pricing-section .pricing .pricing-body .pricing-body-header .pricing-checkbox {
	 display: flex;
	 column-gap: 10px;
	 align-items: center;
}
 section.pricing-section .pricing .pricing-body .pricing-body-header .pricing-checkbox span {
	 font-size: 14px;
	 color: #502692;
}
 section.pricing-section .pricing .pricing-body .pricing-body-header .pricing-checkbox > div {
	 width: 45px;
	 background: #ffffff;
	 height: 24px;
	 border-radius: 15px; 
	 position: relative;
	 cursor: pointer;
}
 section.pricing-section .pricing .pricing-body .pricing-body-header .pricing-checkbox > div div {
	 position: absolute;
	 width: 18px;
	 height: 18px;
	 background-color: #fff;
	 top: 50%;
	 left: 3px;
	 transform: translateY(-50%);
	 border-radius: 50%;
}
 section.pricing-section .pricing .pricing-body .pricing-body-header .pricing-checkbox > div.anually div {
	 left: unset;
	 right: 3px;
}
 section.pricing-section .pricing .pricing-body .pricing-body-plans > div {
	 display: none;
}
 section.pricing-section .pricing .pricing-body .pricing-body-plans > div > div {
	 display: flex;
	 column-gap: 17px;
}
 section.pricing-section .pricing .pricing-body .pricing-body-plans > div > div .card {
	 background-color: #22262c;
	 padding: 25px;
	 border-radius: 8px;
	 width: 270px;
	 position: relative;
}
 section.pricing-section .pricing .pricing-body .pricing-body-plans > div > div .card .card-header {
	 display: flex;
	 flex-direction: column;
	 row-gap: 8px;
	 justify-content: center;
	 align-items: center;
}
 section.pricing-section .pricing .pricing-body .pricing-body-plans > div > div .card .card-header .card-title {
	 font-weight: 400;
	 font-size: 16px;
   color: #ffffff;
}
 section.pricing-section .pricing .pricing-body .pricing-body-plans > div > div .card .card-header .card-price {
	 font-size: 26px;
}
 section.pricing-section .pricing .pricing-body .pricing-body-plans > div > div .card .card-header .card-users input {
	 width: 100%;
	 background: transparent;
	 border: 1px solid #35393e;
	 padding: 10px;
	 color: #b5b6b8;
	 text-align: center;
	 outline: none;
}
 section.pricing-section .pricing .pricing-body .pricing-body-plans > div > div .card .card-header .card-users span {
	 font-size: 12px;
	 color: #bc1e4a;
}
 section.pricing-section .pricing .pricing-body .pricing-body-plans > div > div .card .card-body {
	 margin-top: 30px;
}
 section.pricing-section .pricing .pricing-body .pricing-body-plans > div > div .card .card-body ul {
	 list-style-type: none;
	 margin-left: 20px;
	 display: flex;
	 flex-direction: column;
	 row-gap: 8px;
}
 section.pricing-section .pricing .pricing-body .pricing-body-plans > div > div .card .card-body ul li {
	 color: #b5b6b8;
	 position: relative;
	 font-size: 14px;
}
 section.pricing-section .pricing .pricing-body .pricing-body-plans > div > div .card .card-body ul li::before {
	 content: "•";
	 color: #bc1e4a;
	 font-weight: bold;
	 width: 20px;
	 margin-left: -18px;
	 font-size: 25px;
	 position: absolute;
	 top: 50%;
	 transform: translateY(-50%);
}
 section.pricing-section .pricing .pricing-body .pricing-body-plans > div > div .card .card-footer {
	 margin-top: 35px;
	 display: flex;
	 justify-content: center;
	 align-items: center;
}
 section.pricing-section .pricing .pricing-body .pricing-body-plans > div > div .card .card-footer a {
	 border: 1px solid #bc1e4a;
	 background: transparent;
	 padding: 10px 25px;
	 color: #b5b6b8;
	 cursor: pointer;
}
 section.pricing-section .pricing .pricing-body .pricing-body-plans > div > div .card .card-footer a:hover {
	 background: #bc1e4a;
	 color: #fff;
}
 section.pricing-section .pricing .pricing-body .pricing-body-plans > div > div .card:nth-of-type(2) .card-footer button {
	 background: #bc1e4a;
	 color: #fff;
}
 section.pricing-section .pricing .pricing-body .pricing-body-plans > div > div .card:nth-of-type(2) .card-footer button:hover {
	 background: transparent;
	 color: #b5b6b8;
}
 section.pricing-section .pricing .pricing-body .pricing-body-plans > div.active {
	 display: block;
}
 @media screen and (max-width: 900px) {
	 section.pricing-section {
		 width: 100%;
		 height: auto;
	}
	 section.pricing-section .pricing .pricing-header {
		 width: 60%;
		 padding: 20px 50px;
	}
	 section.pricing-section .pricing .pricing-body {
		 margin-top: 780px;
		 padding-bottom: 50px;
	}
	 section.pricing-section .pricing .pricing-body .pricing-body-plans > div > div {
		 flex-direction: column;
		 row-gap: 17px;
	}
}
 @media screen and (max-width: 500px) {
	 section.pricing-section .pricing .pricing-header {
		 width: 100%;
		 padding: 20px 50px;
		 position: unset;
		 top: unset;
		 left: unset;
		 transform: unset;
	}
	 section.pricing-section .pricing .pricing-header p {
		 font-size: 14px;
	}
	 section.pricing-section .pricing .pricing-header h3 {
		 font-size: 18px;
	}
	 section.pricing-section .pricing .pricing-body {
		 margin-top: 50px;
		 position: unset;
		 top: unset;
		 left: unset;
		 transform: unset;
	}
}
 
</style>
<section class="pricing-section">
  <div class="pricing">

      <div class="pricing-body">
          <div class="pricing-body-header text-center">
              <h1 class="">Subscriptions for Personalized Support</h1>
              {{-- <p class="">
                Discover a New Path to Emotional Well-being
              </p> --}}
          </div>
          <div class="pricing-body-plans">

              <div class="active" id="pricing__monthly__plan">
                  <div>
                      @forelse ($plans as $plan)
                      <div class="card">
                          <div class="card-header">
                              <span class="card-title">{{ $plan->name ?? '' }}</span>
                              <h2 class="card-price">{{ $plan->price }}</h2>
                          </div>
                          <div class="card-body">
                              <ul>
                                @forelse ($plan->feature as $feature)
                                  @if ($feature->desc !== null)
                                  <li>{{ $feature->desc }}</li>
                                  @endif
                                @empty

                                @endforelse
                              </ul>
                          </div>
                          <div class="card-footer">
                              <a target="_blank" href="{{ route('bill-patient', ['id' => $plan->id]) }}">Choose Plan</a>
                          </div>
                      </div>
                      @empty
                        <div>
                          <p>No Packages Found.</p>
                        </div>
                      @endforelse
                      {{-- <div class="card">
                          <div class="card-header">
                              <span class="card-title">Pro</span>
                              <h2 class="card-price">$50</h2>
                              <div class="card-users">
                                  <input list="pro__users__limit" name="pro__users__input" id="pro__users__input">
                                  <datalist id="pro__users__limit">
                                      <option value="50 MAUs">
                                      <option value="100 MAUs">
                                      <option value="500 MAUs">
                                      <option value="1000 MAUs">
                                      <option value="2500 MAUs">
                                  </datalist>
                                  <span>Monthly active users</span>
                              </div>
                          </div>
                          <div class="card-body">
                              <ul>
                                  <li>All starter features, plus:</li>
                                  <li>Unlimited projects</li>
                                  <li>Unlimited fully customizable themes</li>
                                  <li>A dedicated Customer Success Manager</li>
                              </ul>
                          </div>
                          <div class="card-footer">
                              <button>Choose Plan</button>
                          </div>
                      </div> --}}
                      {{-- <div class="card">
                          <div class="card-header">
                              <span class="card-title">Enterprise</span>
                              <h2 class="card-price">Let's Talk!</h2>
                          </div>
                          <div class="card-body">
                              <ul>
                                  <li>All Pro features</li>
                                  <li>Unlimited MAUs</li>
                                  <li>Dedicated environment</li>
                                  <li>Enterprise account administration</li>
                                  <li>Premium support and services</li>
                              </ul>
                          </div>
                          <div class="card-footer">
                              <button>Contact Us</button>
                          </div>
                      </div> --}}
                  </div>
              </div>
              {{-- <div id="pricing__anually__plan">
                  <div>
                      <div class="card">
                          <div class="card-header">
                              <span class="card-title">Starter</span>
                              <h2 class="card-price">$19</h2>
                          </div>
                          <div class="card-body">
                              <ul>
                                  <li>500 MAUs</li>
                                  <li>3 projects</li>
                                  <li>Unlimited guides</li>
                                  <li>Unlimited flows</li>
                                  <li>Unlimited branded themes</li>
                                  <li>Email support</li>
                              </ul>
                          </div>
                          <div class="card-footer">
                              <button>Choose Plan</button>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header">
                              <span class="card-title">Pro</span>
                              <h2 class="card-price">$99<span>/month</span></h2>
                              <div class="card-users">
                                  <input list="pro__users__limit" name="pro__users__input" id="pro__users__input">
                                  <datalist id="pro__users__limit">
                                      <option value="50 MAUs">
                                      <option value="100 MAUs">
                                      <option value="500 MAUs">
                                      <option value="1000 MAUs">
                                      <option value="2500 MAUs">
                                  </datalist>
                                  <span>Monthly active users</span>
                              </div>
                          </div>
                          <div class="card-body">
                              <ul>
                                  <li>All starter features, plus:</li>
                                  <li>Unlimited projects</li>
                                  <li>Unlimited fully customizable themes</li>
                                  <li>A dedicated Customer Success Manager</li>
                              </ul>
                          </div>
                          <div class="card-footer">
                              <button>Choose Plan</button>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header">
                              <span class="card-title">Enterprise</span>
                              <h2 class="card-price">Let's Talk!</h2>
                          </div>
                          <div class="card-body">
                              <ul>
                                  <li>All Pro features</li>
                                  <li>Unlimited MAUs</li>
                                  <li>Dedicated environment</li>
                                  <li>Enterprise account administration</li>
                                  <li>Premium support and services</li>
                              </ul>
                          </div>
                          <div class="card-footer">
                              <button>Contact Us</button>
                          </div>
                      </div>
                  </div>
              </div> --}}

          </div>
      </div>
  </div>
</section>
  <script>
    const planBtn = document.getElementById("custom-checkbox");
    const plans = document.querySelectorAll(".pricing-body-plans > div");

    planBtn.addEventListener("click", function() {
        this.classList.toggle("anually");
        plans[0].classList.toggle("active");
        plans[1].classList.toggle("active");
    });
  </script>