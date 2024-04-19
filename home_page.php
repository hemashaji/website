<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Home</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #6495ED;
      color: #fff;
      padding: 1rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo img {
      max-height: 55px;
      
    }

    nav ul {
      list-style-type: none;
    }

    nav ul li {
      display: inline;
     
      margin-right: 80px;
    }

    nav ul li a {
      color: #fff;
      font-weight: bold;
      text-decoration: none;
    }

    .hero {
      background-image: url('home_page.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      padding: 2rem;
      text-align: center;
      color: #0000CD;
      height: 350px;
    }

    .background-container {
      margin-top: 100px;
    }

    .point-list {
      color:DarkMagenta;
      text-align: center;
    }

    .point-list div {
      display: inline-block;
      margin-right: 20px;
    }

 
    footer {
      background-color: #6495ED ;
      color: #fff;
      padding: 30px 0;
      text-align: center;
    }

    .footer-icons a {
      color: #fff;
      text-decoration: none;
      margin: 0 10px;
    }

    .footer-icons a:hover {
      opacity: 0.7;
    }
    .contact-info p {
  margin: 5px 0; 
}


.contact-info p {
  color: white;
}
  </style>
</head>
<body>
  <header>
    <div class="logo">
      <img src="tbx.jpg" alt="Logo">
    </div>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>

  <section class="hero">
    <div class="background-container">
      <h1>TAX BUSINESS CONSULTANTS </h1>
      <p>We offer a variety of tax consulting services</p>
      <p>to assist our clients in reaching their company goals, reducing risk,</p>
      <p>and increasing their overall performance.</p>
    </div>

    <div class="point-list">
      <div><strong>Tax Planning</strong></div>
      <div><strong>Compliance Services</strong></div>
      <div><strong>Risk Management</strong></div>
      <div><strong>Continuous Support</strong></div>
    </div>
  </section>

  <footer>
  <div class="contact-info ">
  <p>Email: taxconsultant@gmail.com</p>
    <p>Phone: +1234567890</p>
    <p>&copy; 2024 Your Company. All rights reserved.</p>
  </div>
  <div class="footer-icons">
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
  </div>
 
 
</footer>
</body>
</html>