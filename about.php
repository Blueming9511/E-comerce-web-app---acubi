<?php
include 'header.php';
?>

</div>

<style>
  body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
  }

  html {
    box-sizing: border-box;
  }

  *,
  *:before,
  *:after {
    box-sizing: inherit;
  }

  .column {
    float: left;
    width: 33.3%;
    margin-bottom: 16px;
    padding: 0 8px;
  }

  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    margin: 8px;
  }

  .about-section {
    padding: 50px;
    text-align: center;
    background-color: #474e5d;
    color: white;
  }

  .container {
    padding: 0 16px;
  }

  .container::after,
  .row::after {
    content: "";
    clear: both;
    display: table;
  }

  .title {
    color: grey;
  }

  .button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
  }

  .button:hover {
    background-color: #555;
  }

  @media screen and (max-width: 800px) {
    .column {
      width: 100%;
      display: block;
    }
  }

  img {
    width: 10em;
    height: 30em;
  }

  .container>* {
    margin-bottom: 1em;
  }

  h2 {
    margin: 2em 0;
    font-family: var(--emphasized-font);
  }
</style>


<div class="header-body">
  <div class="about-section">
    <h1>About Us Page</h1>
    <p>Welcome to Acubi! We are a dedicated team of innovators and visionaries who strive to bring you the best online shopping experience. Founded in [year], we aim to deliver the most comprehensive range of products, the best user experience, and the most reliable customer service.</p>
  </div>

  <h2 style="text-align:center">Our Team</h2>
  <div class="row">
    <div class="column">
      <div class="card">
        <img src="asset/image/aboutUs-img/Yen.jpg" alt="Jane" style="width:100%">
        <div class="container">
          <h2>YEN</h2>
          <p class="title">522H0049</p>
          <p>Some text that describes me lorem ipsum ipsum lorem.</p>
          <p>Yen@gmail.com</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="asset/image/aboutUs-img/Nguyen.jpg" alt="Mike" style="width:100%">
        <div class="container">
          <h2>Nguyen</h2>
          <p class="title">522H0074</p>
          <p>Some text that describes me lorem ipsum ipsum lorem.</p>
          <p>nguyennguyen8343@gmail.com</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="asset/image/aboutUs-img/Hy.jpg" alt="John" style="width:100%">
        <div class="container">
          <h2>HY</h2>
          <p class="title">522H0021</p>
          <p>Some text that describes me lorem ipsum ipsum lorem.</p>
          <p>hlch@gmail.com</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- ==== FOOOTER ==== -->
<?php
include 'footer.php';
?>