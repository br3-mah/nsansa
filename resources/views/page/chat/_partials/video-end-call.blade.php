<style>
@import url("https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,400;0,500;0,600;0,800;1,300;1,700&display=swap");

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Overpass", sans-serif;
}
.card {
    background: linear-gradient(to top, #191d23, #232a34);
    width: 90%;
    max-width: 400px;
    padding: 30px;
    border-radius: 30px;
    flex-direction: column;
    justify-content: center;
}
header span {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 48px;
    border-radius: 50%;
    height: 48px;
    background-color: hsl(210, 20%, 20%);
}
header span img {
    width: 20px;
    height: 20px;
}
.card h3 {
    margin: 20px 0 10px 0;
    color: #fefefe;
    font-size: 28px;
}
.card p {
    color: #8d94a3;
    font-size: 15px;
}
ul {
    list-style-type: none;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    margin: 30px 0;
}
ul li a {
    background-color: #262d37;
    color: #778089;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    text-decoration: none;
    transition: 0.3s;
}
ul li a:focus {
    background-color: #7a8696;
    color: white;
}
ul li a:hover {
    background-color: #f97618;
    color: white;
}
button {
    width: 100%;
    text-transform: uppercase;
    font-size: 20px;
    letter-spacing: 5px;
    font-weight: 600;
    padding: 10px;
    border-radius: 30px;
    border: none;
    background-color: #f97618;
    color: #141519;
    cursor: pointer;
    transition: 0.3s background-color;
}
button:hover {
    background-color: #fff;
    color: #f97618;
}

#result {
    display: none;
    text-align: center;
}
#result .image {
    margin: 20px 0;
}
#result p {
    font-size: 16px;
}
#result .ss {
    margin: 25px 0;
}
#result #selected {
    background-color: #33373a;
    padding: 5px 15px;
    border-radius: 15px;
    color: #f97618;
}
</style>
<div class="end-call-card">
    <div class="card" id="intro">
        <header>
            <span>
                <img src="https://raw.githubusercontent.com/A7med3bdulBaset/Rating-card/90ec3ec9bdb20d937d17725b013b16fc6dcfeca4/img/icon-star.svg" alt="star">
            </span>
        </header>
        <h3>How did we do?</h3>
        <p>
            Please let us know how we did with your support request. All feedback is appreciated
            to help us improve our offering!
        </p>
        <input id="su_id" type="hidden">
        <ul id="options">
            <li><a href="#1" class="option">1</a></li>
            <li><a href="#2" class="option">2</a></li>
            <li><a href="#3" class="option">3</a></li>
            <li><a href="#4" class="option">4</a></li>
            <li><a href="#5" class="option">5</a></li>
        </ul>
        <button onclick="submitRating()">Submit</button>
    </div>
    <div class="card" id="result">
        <div class="image">
            <img src="https://raw.githubusercontent.com/A7med3bdulBaset/Rating-card/90ec3ec9bdb20d937d17725b013b16fc6dcfeca4/img/illustration-thank-you.svg" alt="Thanks">
        </div>
        <p class="ss"><span id="selected"></span></p>
        <h3>Thank you!</h3>
        <p>
            We appreciate you taking the time to give a rating. If you ever need more support,
            don’t hesitate to get in touch!
        </p>
    </div>
</div>
<script>
    var result = document.getElementById("result");
    var intro = document.getElementById("intro");
    var opt = document.querySelectorAll(".option");
    var selected;

    opt.forEach(function (el) {
        el.onclick = function () {
            selected = this.innerHTML;
        };
    });

    function submitRating() {
        let usid = $('#su_id').val(); 
        const formData = new FormData();
        formData.append('us_id', user['id']);
        fetch("{{ route('rate-video-call') }}", {
          method: 'POST',
          body: formData
        })
        .then(response => {
          console.log(response);
          $('#su_id').val() = response.data.su_id;
        })
        .catch(error => {
          console.error('Error uploading video:', error);
        });

        result.style.display = "flex";
        intro.style.display = "none";
        document.getElementById("selected").innerHTML = `You selcted ${
            selected || "0"
        } out of 5`;
    }
</script>