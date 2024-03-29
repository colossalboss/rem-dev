<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>RemDev | Home</title>
  <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,400i,700,900&display=swap"
    rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="https://ravesandboxapi.flutterwave.com/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
<script>
     document.addEventListener("DOMContentLoaded", function(event) {
  document.getElementById("submit").addEventListener("click", function(e) {
    var PBFKey = "FLWPUBK_TEST-37e54c054ec9f100d1c50e255426ee76-X";
    
    getpaidSetup({
      PBFPubKey: PBFKey,
      customer_email: "user@example.com",
      customer_firstname: "Temi",
      customer_lastname: "Adelewa",
      custom_description: "Pay Internet",
      custom_logo: "http://localhost/communique-3/skin/frontend/ultimo/communique/custom/images/logo.svg",
      custom_title: "Communique Global System",
      amount: 2000,
      customer_phone: "234099940409",
      country: "NG",
      currency: "NGN",
      txref: "rave-123456",
      integrity_hash: "6800d2dcbb7a91f5f9556e1b5820096d3d74ed4560343fc89b03a42701da4f30",
      onclose: function() {},
      callback: function(response) {
        var flw_ref = response.tx.flwRef; // collect flwRef returned and pass to a                  server page to complete status check.
        console.log("This is the response returned after a charge", response);
        if (
          response.tx.chargeResponseCode == "00" ||
          response.tx.chargeResponseCode == "0"
        ) {
          // redirect to a success page
        } else {
          // redirect to a failure page.
        }
      }
    });
  });
});
</script>

</head>

<body>
  <div class="landing-page">
    <nav class="landing-nav">
      <div class="landing-logo">
        <h3><a class="increasefont" href="index.php">RemDev</a></h3>
      </div>
      <div class="landing-right">
        <ul class="landing-ul"> 
          <li class="landing-li">
            <a href="search.php">Browse developers</a>
          </li>
          <li class="landing-li"><a href="#">About Us</a></li>
          <li class="landing-li"><a href="login.php">Login</a></li>
          <li class="landing-li signup">
            <a href="signup.php">Sign Up</a>
          </li>
        </ul>
      </div>

    </nav>
    <hr />
    <section>
      <div class="first-row">
        <div class=" box">
          <div class="text">
            <h1>Hire the best remote</h1>
            <h2>developers across nigeria</h2>
            <h4>
              Get your projects completed in no time by capable hands
            </h4>
          </div>
          <div class="text-field">
            <input type="text" placeholder="what skills are you looking for?" />
          </div>
          <div class="btn">
            <button class="green-btn">Find Developers</button>
            <div class="line-div">
              <div class="line">
                <hr>
              </div>
              <div class="line-text">
                <p>Or</p>
              </div>
              <div class="line">
                <hr>
              </div>
            </div>
            <button class="red-btn">Register as a Developer</button>
          </div>
        </div>
        <div class="box image-box">
          <p class="img-center"><img class="big-image" src="https://via.placeholder.com/400x400.png" alt=""></p>
        </div>
      </div>
    </section>
    <section>
      <div style="background-color: white">
        <div class="works-how">
          <h1>How it works</h1>
          <h4>Four easy steps to complete your project</h4>
        </div>
        <div class="how">
          <div class="sub-how">
            <div class="icon">
              <p><i class="fa fa-search" aria-hidden="true"></i></p>
            </div>
            <div class="align-text">
              <h3>Search for developers</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus maxime similique reiciendis
                veritatis quidem laboriosam nostrum dolores assumenda dolore eaque.</p>
            </div>
          </div>
          <div class="sub-how">
            <div class="icon">
              <p><i class="fa fa-pencil" aria-hidden="true"></i></p>
            </div>
            <div class="align-text">
              <h3>Craete project</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus maxime similique reiciendis
                veritatis quidem laboriosam nostrum dolores assumenda dolore eaque.</p>
            </div>
          </div>
          <div class="sub-how">
            <div class="icon">
              <p><i class="fa fa-check-square" aria-hidden="true"></i></p>
            </div>
            <div class="align-text">
              <button type="button" style="cursor:pointer; color: white; background-color: green; padding-top: 7px; 
              padding-bottom: 7px; padding-left: 20px; padding-right: 20px; border-radius: 5px; 
              border: none; text-align: center;" value="Pay Now" id="submit"><h3>Make payment</h3>
              </button>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus maxime similique reiciendis
                veritatis quidem laboriosam nostrum dolores assumenda dolore eaque.</p>
            </div>
          </div>
          <div class="sub-how">
            <div class="icon">
              <p><i class="fa fa-money" aria-hidden="true"></i></p>
            </div>
            <div class="align-text">
              <h3>Build project</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus maxime similique reiciendis
                veritatis quidem laboriosam nostrum dolores assumenda dolore eaque.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div>
        <div class="rep align-text">
          <h2>What our clients say</h2>
          <h4>when we promise we deliver</h4>
        </div>
        <div>
          <div class="flexy">
            <div class="quote-sign">
              <i class="fa fa-quote-left" aria-hidden="true"></i>
            </div>
            <div class="quote-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nihil consequatur similique vel tempora
              nam, distinctio sequi temporibus corporis ea veniam iure officia earum? Obcaecati error sed dolore animi
              cumque cum doloremque esse sunt quis, molestias, rem similique delectus reiciendis, at debitis aliquam
              soluta harum magni id fuga tenetur? Totam corporis deleniti numquam repellat quam nihil, obcaecati sint
              vero maxime porro laudantium debitis neque sequi iure nostrum. Debitis sit soluta placeat animi aspernatur
              cupiditate nemo esse nam quae numquam saepe, corporis eius temporibus hic! Tempore et nisi velit ipsum
              exercitationem, ex asperiores id libero saepe nobis fugiat eos recusandae delectus.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nihil consequatur similique vel tempora
              nam, distinctio sequi temporibus corporis ea veniam iure officia earum? Obcaecati error sed dolore animi
              cumque cum doloremque esse sunt quis, molestias, rem similique delectus reiciendis, at debitis aliquam
              soluta harum magni id fuga tenetur? Totam corporis deleniti numquam repellat quam nihil, obcaecati sint
              vero maxime porro laudantium debitis neque sequi iure nostrum. Debitis sit soluta placeat animi aspernatur
              cupiditate nemo esse nam quae numquam saepe, corporis eius temporibus hic! Tempore et nisi velit ipsum
              exercitationem, ex asperiores id libero saepe nobis fugiat eos recusandae delectus.
            </div>
          </div>
          <div class="author">
            <img src="https://via.placeholder.com/100" alt="">
            <div class="ceo">
              <h2>Victor Ogunmoye</h2>
              <p>CEO RemDev</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="projects">
        <div class="align-text top-space">
          <h1>Completed Projects</h1>
        </div>
        <div class="row">
          <div class="col">
            <p><i class="fa fa-facebook" aria-hidden="true"></i></p>
          </div>
          <div class="col">
            <p><i class="fa fa-twitter" aria-hidden="true"></i></p>
          </div>
          <div class="col">
            <p><i class="fa fa-slack" aria-hidden="true"></i></p>
          </div>
          <div class="col">
            <p><i class="fa fa-google" aria-hidden="true"></i></p>
          </div>
        </div>
      </div>
      <div class="sm">
        <div class="align-text">
          <h1>What are you waiting for?</h1>
          <h5>Lets help you bring your dream to life</h5>
        </div>
        <div class="inp">
          <input type="text" name="" id="" placeholder="what skills set are you looking for?" />
        </div>
        <div class="btn" id="btn-div">
          <button class="green-btn">Find Developers</button>
          <div class="line-div">
            <div class="line">
              <hr>
            </div>
            <div class="line-text">
              <p>Or</p>
            </div>
            <div class="line">
              <hr>
            </div>
          </div>
          <button class="red-btn">Register as a Developer</button>
        </div>
      </div>
    </section>
    <hr />
    <footer>
      &copy; 2019 RemDev
      <a style="float:right" href="twitter.com">Twitter</a>
    </footer>
  </div>
  <script src="app.js"></script>
</body>

</html>
