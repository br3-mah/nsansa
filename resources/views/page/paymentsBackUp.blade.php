<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ProBASE Payment Gateway sample</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <style>
        .col-md-6{
        }
    </style>
</head>
<body>
<nav class="navbar navbar-default" style="height: 140px;">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <img src="priv/static/assets/img/social-icons/logo-large.png" style="width: 180px; max-height: 180px; "/>
            </a>
        </div>
    </div>
    <h1 class="text-center" style="color: #0c2e53;margin-top: -5px; margin-left: -5px;"><b>Payment Gateway</b></h1>
</nav>
<div class="container">
    <h2 class="">Payment Details</h2>
    <div class="modal-body">
<!--      <form id="payment_form" action="https://paymentservices.probasegroup.com/pbs/payments" method="post"><br/>-->
            <form id="payment_form" action="http://95.179.223.128:4200/pbs/payments" method="post">
              <br/>
<!--                <form id="payment_form" action="http://localhost:4200/pbs/payments" method="post"><br/>-->
            <div class="row">
                <div class="form-group col-md-6">
                    <div id="paymentDetailsSection" class="section">
                        <label class="form-label">System ID</label><br/>
                        <input id="system_id" class="form-control" name="systemId" value="PBS-Super Merchant">
                        <input type="hidden" class="form-control" name="responseMethod" value="">
                        <input type="hidden" class="form-control" name="sourceInstitution" value="Nsansawellness Services Limited">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label>External Reference</label><br/>
                    <input type="text" id="external_ref" class="form-control"  name="paymentReference">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label> Redirect Url </label><br/>
                        <input type="url" class="form-control"  id="redirectUrl"  name="redirectUrl" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Amount</label><br/>
                        <input id="amount" class="form-control"  name="amount">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label> Payment Type </label><br/>
                        <input type="text" class="form-control"  id="paymentType"  name="paymentType" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Customer Type</label><br/>
                        <select name="customerType" class="form-control" id="client_type">
                            <option value="cooperate">Cooperative</option>
                            <option value="retail">Retail</option>
                        </select>
                    </div>
                </div>
            </div>
            <div id="co_operate">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Company Name</label><br/>
                            <input id="company_name" class="form-control"  name="companyName">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> T-PIN </label><br/>
                            <input id="tpin" class="form-control"  name="tpin">
                        </div>
                    </div>
                </div>
            </div>
            <div id="retail">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>First Name</label><br/>
                            <input id="first_name" class="form-control"  name="firstName">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Last Name</label><br/>
                            <input id="last_name" class="form-control"  name="lastName">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>National ID</label><br/>
                            <input id="nrc" class="form-control"  name="nationalId">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email</label><br/>
                        <input id="email" class="form-control"  name="email">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Mobile</label><br/>
                        <input id="mobile" class="form-control"  name="mobile">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label> Payment Description </label><br/>
                        <textarea class="form-control" id="description"  name="paymentDescription"  rows="3"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label> Expiry date </label><br/>
                        <input class="form-control" type="date" id="expiry"  name="expiryDate">
                        <input class="form-control" type="hidden"  name="password" value="qq!q/Db[pSTn@NbcdS9S">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary btn-lg" value="Submit" />
            </div>
        </form>
    </div>
</div>
<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
    let retail = document.getElementById('retail');
    let co_operate = document.getElementById('co_operate');
    const play = () => {
        if (document.getElementById('client_type').value === "cooperate"){
            retail.style.display = "none";
            co_operate.style.display = "block";
        } else{
            co_operate.style.display = "none";
            retail.style.display = "block";
        }
    }
    play();

    client_type.onchange = () => {play()}
    const ref = () => {
        let result = '';
        let characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        let charactersLength = characters.length;
        for ( var i = 0; i < 15; i++ ) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }
        document.getElementById('external_ref').value = result;
    }
    ref();
</script>
</body>
</html>