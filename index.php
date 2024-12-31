<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Personal Portfolio</title>
  <style>
body {
    background-image: url('GIGN.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
}
  
header {
    padding: 10px 0;
    margin-bottom: 10px;
}
.navbar-brand {
  font-weight: bold;
  color: rgb(0, 22, 122);
  text-decoration: none;
  font-size: 50px;
}
.navbar-toggler {
  background-color: transparent;
  border: none;
}

.navbar-nav {
  color: rgb(0, 0, 0);
  list-style-type: none;
  margin: 0;
  padding: 0;
  text-align: right;
  font-size: 25px;
}

span{
  color: #4cff1f;
}
.nav-item {
  display: inline-block;
  margin-right: 10px;
}

.nav-link {
  text-decoration: none;
  }

 .nav-link:hover {
  color: rgb(0, 0, 0);
  }
  .container {
    align-items: center;
  }
  .person-image {
    box-shadow: 0 0 20px rgb(0, 0, 0);
    float: right;
    width: 250px;
    height: auto;
    margin-right: 20px;
  }
  
  h1,
  p {
    margin: 0;
    color:rgb(255, 243, 243);
  }
  .container {
    margin-bottom: 50px;
    max-width: 800px;
    padding: 20px;
    height: 520px;
  }

  h1 {
    transition: transform 0.3s;
    font-family: sans-serif;
    font-size: 35px;
    font-weight: bold;
    margin-bottom: 10px;
  }
  h1:hover{
    transform: scale(1.2);
  }
  p {
    font-size: 25px;
    font-family: 'Gill Sans';
  }

  .img1 {
    width: 250px;
    height: 250px;
    border-radius: 50%;
    margin-bottom: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2),
            0 0 20px rgba(255, 255, 255, 0.5),
            0 0 30px rgba(255, 255, 255, 0.5),
            0 0 40px rgba(255, 255, 255, 0.5),
            0 0 50px rgba(255, 255, 255, 0.5),
            0 0 60px rgba(255, 255, 255, 0.5),
            0 0 70px rgba(255, 255, 255, 0.5),
            0 0 80px rgba(255, 255, 255, 0.5);
  }
  .img1 {
    transition: transform 0.3s;
  }

  .img1:hover {
    transform: scale(1.2);
  }
  
.container p {
  font-size: 25px;
   transition: transform 0.3s;
   color: rgb(239, 228, 228);
   font-weight: bold;
  }
.container p:hover{
  transform: scale(1.2);
}
.card { 
  background: rgba(85, 85, 85, 0.247);
  backdrop-filter: blur(10px);
  border-radius: 10px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
  padding: 20px;
  justify-content: center;
  align-items: center;
  width: 150%;
  max-width: 400px;
  margin: auto;
  align-items: center;

}
  section {
    padding: 50px 0;
  }
  
  section h2 {
    transition: transform 0.3s;
    font-weight: bolder;
    margin-bottom: 50px 0;
    color: #ffffff;
  }
  section h2:hover{
    transform: scale(1.2);
  }
  section h5{
    font-weight: bold;
    font-family: sans-serif;
    color: rgb(255, 255, 255);
  }
  .about h2{
    margin-bottom: 30px;
    margin-left: 150px;
  }
  .about p{
    color: rgb(255, 255, 255);
    margin-left: 30px;
    
  }
  .projects-row {
    margin-bottom: 20px;
  }
  
  .col-md-6 p{
    font-size: 20px;
    font-family: sans-serif;
    color: rgb(255, 255, 255);
  }
  .contactme{
    background: rgba(85, 85, 85, 0.548);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    padding: 20px;
    justify-content: center;
    align-items: center;
    width: 100%;
    max-width: 400px; 
    margin: 0 auto;
    color: white;

    
  }
.name p{
  text-align: center;
  color: aliceblue;
}
.resume-container {
  background: rgba(85, 85, 85, 0.247);
  backdrop-filter: blur(10px);
  border-radius: 10px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 20px;
}

.resume-image {
  flex: 1;
  text-align: center;
}

.resume-image img {
  transition: transform 0.3s;
  width: 200px;
  border-radius: 50%;
}
.resume-image img:hover{
  transform: scale(1.2);
}

.resume-text {
  flex: 1;
  padding: 20px;
}
.resume-text h1{
  font-size: 20px;
  transition: transform 0.3s;
}
.resume-text h1:hover{
  transform: scale(1.2);
}
.container-skill ul {
  background: rgba(85, 85, 85, 0.247);
  backdrop-filter: blur(10px);
  max-width: 400px;
  font-size: 35px;
  list-style-type: none;
  padding: 0;
}

.skill {
  width: 400px;
  cursor: pointer;
  padding: 5px;
}
.percentage {
  display: none;
}

.skill:hover .percentage {
  display: inline;
}
.skill h2 {
  font-weight: bolder;
  margin-bottom: 50px 0;
  color: #ffffff;
}
button{
    background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            margin-top: 10px;
            font-size: 1em;
            border-radius: 50px;
            cursor: pointer;
            display: inline-block;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
}


  footer {
    background-color: #343535;
    padding: 20px 0;
    font-family: Arial, Helvetica, sans-serif;
  }
  </style>
  
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <h1 class="navbar-brand" href="#">Final Requirements<span>Web System 2</span></h1>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
        </ul>
      </div>
    </nav>
  </header>
  <section id="home">
    <div class="container">
    <center>
      <img class="img1" src="Nemsu.jpg" alt="Profile Picture">
      <h1><span>Hello</span>, We John Julian G. Avila</h1>
      <h1><span>And</span>,  Jeros James Bandolon</h1>
      <p>We Are a Front-End developer</p>
      <button class="header-btn"> <a href="main.php"> Procced </a> </button>
    </center>
  </section>

 

 

  
  
  <footer>
    <div class="name">
      <p>&copy; 2024 Gonzaga Avila</p>
    </div>
  </footer>
  <script>
    $(document).ready(function () {
    var nav = $('#navbar');
    var navPosition = nav.offset().top;
  
    $(window).scroll(function () {
      var scrollPos = $(window).scrollTop();
  
      if (scrollPos >= navPosition) {
        nav.addClass('fixed-top');
      } else {
        nav.removeClass('fixed-top');
      }
    });
  });
  
  
  </script>

  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
