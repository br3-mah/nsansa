<!DOCTYPE html>
<html>
<head>
    <style>
         * {
             padding: 0;
             margin: 0;
             box-sizing: border-box;
        }
         body {
             background-color: #e7e7e7;
             width: 100%;
             height: 100vh;
             font-family: "Roboto", sans-serif;
        }
         body .pricing-card {
             width: 400px;
             min-height: 300px;
             height: auto;
             background: #fff;
             border-radius: 10px;
             box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.286);
             padding: 50px;
             display: flex;
             flex-direction: column;
             row-gap: 20px;
             position: absolute;
             top: 10%;
             left: 50%;
             transform: translateX(-50%);
        }
         body .pricing-card .card-header {
             width: 100%;
             height: 60px;
             padding: 10px;
             border: 1px solid #ededed;
             border-radius: 10px;
        }
         body .pricing-card .card-header .card-btn-parent {
             width: 100%;
             height: 100%;
             display: flex;
             position: relative;
        }
         body .pricing-card .card-header .card-btn-parent button {
             width: calc(100%/3);
             height: 100%;
             border: 0;
             border-radius: 7px;
             background-color: transparent;
             cursor: pointer;
             z-index: 1;
             font-weight: 500;
             transition: color 0.5s ease;
        }
         body .pricing-card .card-header .card-btn-parent button:nth-of-type(1).active, body .pricing-card .card-header .card-btn-parent button:nth-of-type(1).active ~ div {
             left: 0px;
             color: #fff;
        }
         body .pricing-card .card-header .card-btn-parent button:nth-of-type(2).active, body .pricing-card .card-header .card-btn-parent button:nth-of-type(2).active ~ div {
             left: calc(100%/3);
             color: #fff;
        }
         body .pricing-card .card-header .card-btn-parent button:nth-of-type(3).active, body .pricing-card .card-header .card-btn-parent button:nth-of-type(3).active ~ div {
             left: calc(calc(100%/3)*2);
             color: #fff;
        }
         body .pricing-card .card-header .card-btn-parent div {
             position: absolute;
             top: 0;
             left: 0;
             width: calc(100%/3);
             height: 100%;
             background: #0b7f9c;
             border-radius: 7px;
             transition: left 0.5s ease;
        }
         body .pricing-card .card-body {
             display: flex;
             width: 100%;
             padding: 10px 20px;
        }
         body .pricing-card .card-body > div {
             width: 100%;
             height: auto;
             display: none;
        }
         body .pricing-card .card-body > div .card-plans {
             width: 100%;
             display: flex;
             flex-direction: column;
             row-gap: 5px;
        }
         body .pricing-card .card-body > div .card-plans span {
             color: gray;
             font-weight: 500;
             font-size: 13px;
             letter-spacing: 0.5px;
        }
         body .pricing-card .card-body > div .card-plans div {
             display: flex;
             justify-content: space-between;
        }
         body .pricing-card .card-body > div .card-plans div h3 {
             font-size: 24px;
        }
         body .pricing-card .card-body > div .card-content {
             margin-top: 25px;
        }
         body .pricing-card .card-body > div .card-content > p {
             line-height: 20px;
             font-size: 14px;
             font-weight: 400;
        }
         body .pricing-card .card-body > div .card-content .card-lists {
             margin-top: 20px;
             display: flex;
             flex-direction: column;
             row-gap: 10px;
        }
         body .pricing-card .card-body > div .card-content .card-lists .card-list {
             display: flex;
             column-gap: 10px;
             font-size: 14px;
        }
         body .pricing-card .card-body > div .card-content .card-lists .card-list img {
             width: 15px;
        }
         body .pricing-card .card-body > div .card-button {
             margin-top: 35px;
        }
         body .pricing-card .card-body > div .card-button button {
             border: 0;
             width: 100%;
             height: 40px;
             background-color: #4e1a50;
             border-radius: 20px;
             color: #fff;
             font-size: 14px;
             cursor: pointer;
             box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.286);
             letter-spacing: 0.5px;
             font-weight: 500;
        }
         body .pricing-card .card-body > div.active {
             display: block;
        }
         @media screen and (max-width: 400px) {
             body .pricing-card {
                 width: 320px;
                 padding: 25px;
            }
        }
        body .input-container {
        width: 300px;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .label {
        font-size: 14px;
        font-weight: bold;
        margin-bottom: 5px;
        }

        body input[type="tel"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
        }

        body input[type="tel"]:focus {
        outline: none;
        border-color: #005aa5;
        }

    /* Add CSS styles for the preloader */
    #preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.7);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
    }

    #loader {

        border: 4px solid #f3f3f3;
        border-top: 4px solid #3498db;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        animation: spin 2s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>
</head>
<body>
    <div id="preloader">
        <div id="loader"></div>
    </div>
    <div class="pricing-card">
        <div class="card-header">
            <div class="card-btn-parent">
                <h1 id="basic-plan" class="text-dark active">Payment Summary</h1>
                {{-- <button id="standard-plan">MTN Money</button>
                <button id="premium-plan">Visa</button>
                <div class="overlay"></div> --}}
            </div>
        </div>
        <div class="card-body">

            <div id="card-basic-plan" class="active">
                <div class="card-plans">
                    {{-- <span class="plan-tag">Airtel Mobile Money</span> --}}
                    <div class="card-plan">
                        <h3 class="plan-title">Total</h3>
                        <h3 class="plan-price">ZK {{ $billing->charge_amount }}</h3>
                    </div>
                </div>
                <div class="card-content">
                    <p>Make an instant mobile money & card payment</p>
                    <div class="card-lists">
                        <div class="card-list"><img src="https://rvs-pricing-card.vercel.app/tick.svg" alt="">Online Chat messages</div>
                        <div class="card-list"><img src="https://rvs-pricing-card.vercel.app/tick.svg" alt="">Video calls</div>
                        <div class="card-list"><img src="https://rvs-pricing-card.vercel.app/tick.svg" alt="">Access to Personalized Counseling</div>
                    </div>
                </div>
                <div class="card-button">
                    @php
                        $randomStr = Illuminate\Support\Str::random(5);
                        $transRef = Illuminate\Support\Str::random(7);
                        // UUID ID generator
                        $uuid = vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex(random_bytes(16)), 4));
                    @endphp 
                    <form action="{{ route('pay-w-sparco') }}" method="POST" id="airtelform">
                        @csrf
                        {{-- <input type="text" id="contact" name="wallet" placeholder="Enter your mobile number"> --}}
                        <input type="hidden" id="contact" name="wallet" placeholder="Mobile number">
                    
                        <input type="hidden" name="callback" value="{{'https://nsansawellness.com/transaction-summary/'.auth()->user()->id.'/'.$billing->id.'/'.$uuid.''}}">
                        <input type="hidden" name="uuid" value="{{ $uuid }}">
                        <input type="hidden" name="amount" value="{{ (float) str_replace(',', '', $billing->charge_amount) }}">
                        <input type="hidden" name="billing_id" value="{{ $billing->id }}">
                        <input type="hidden" name="currency" value="ZMW">
                        <input type="hidden" name="customerFirstName" value="{{ auth()->user()->fname }}">
                        <input type="hidden" name="customerLastName" value="{{ auth()->user()->lname }}">
                        <input type="hidden" name="customerEmail" value="{{ auth()->user()->email }}">
                        <input type="hidden" name="merchantPublicKey" value="de7afd6176bb4eff99316dcf508e5be6">
                        <input type="hidden" name="transactionName" value="NSANSTR#{{ $randomStr }}">
                        <input type="hidden" name="transactionReference" value="{{ $transRef }}">
                        <input type="hidden" name="chargeMe" value="true">
                        <input type="hidden" value="{{ auth()->user()->email }}" name="customerEmail">
                        <input type="hidden" value="{{ auth()->user()->email }}" name="email">
                        <br>
                        <button type="button" id="submitBtn">Proceed to Payments</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
  
<script>
const planBtns = document.querySelectorAll(".card-btn-parent button");
const plans = document.querySelectorAll(".card-body > div");

document.getElementById('preloader').style.display = 'none';
planBtns.forEach(planBtn => {
    planBtn.addEventListener("click", function() {
        removeClass();
        this.classList.add("active");
        let btnVal = this.getAttribute("id");
        let btnId = "#card-"+btnVal;
        document.querySelector(btnId).classList.add("active");
    })
})

function removeClass() {
    planBtns.forEach(planBtn => {
        if(planBtn.classList.contains("active")) {
            planBtn.classList.remove("active");
        }
    });
    plans.forEach(plan => {
        if(plan.classList.contains("active")) {
            plan.classList.remove("active");
        }
    });
}

</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var submitBtn = document.getElementById('submitBtn');
        submitBtn.addEventListener('click', function(event) {
            event.preventDefault();

            // Show the preloader
            document.getElementById('preloader').style.display = 'flex';
            document.getElementById('preloader').style.alignItems = 'center';
            document.getElementById('preloader').style.justifyContent = 'center';


            var form = document.getElementById('airtelform');
            var formData = new FormData(form);

            // Convert FormData to a plain object
            var formDataObject = {};
            formData.forEach(function(value, key) {
                formDataObject[key] = value;
            });

            // Perform the AJAX request using vanilla JavaScript
            var xhr = new XMLHttpRequest();
            xhr.open('POST', form.action, true);
            xhr.setRequestHeader('Content-Type', 'application/json');

            xhr.onload = function() {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    var link = response.data;
                    console.log(response);
                    // Redirect the user to the external URL
                    window.location.href = response.data;

                    // Hide the preloader on success

                    // Handle success, e.g., redirect or display a success message
                    console.log('Payment successful!');
                } else {
                    // Hide the preloader on error
                    document.getElementById('preloader').style.display = 'none';

                    // Handle error, e.g., display an error message
                    console.error('Payment failed', xhr.statusText);
                }
            };

            xhr.onerror = function() {
                // Hide the preloader on error
                document.getElementById('preloader').style.display = 'none';

                // Handle error, e.g., display an error message
                console.error('Network error');
            };

            // Convert formDataObject to JSON and send it
            xhr.send(JSON.stringify(formDataObject));
        });
    });
</script>


</html>