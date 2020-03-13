
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Loyola College Computer Science(CS)</title>
<link href="css/style.css" rel="stylesheet"  type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<?php 
include("header.php");
?>
<!---------------------------------------------------------------------------------Slider--------------------------------------------------------------------->
<div id="slider">
    <div id="headerslider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#headerslider" data-slide-to="0" class="active"></li>
          <li data-target="#headerslider" data-slide-to="1"></li>
          <li data-target="#headerslider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src= "Images/cs.jpg" class="d-block w-100" alt="..."style="height:700px; width:100% ">
            <div class="carousel-caption d-none d-md-block">
                <h5>LOYOLA COLLEGE WELCOMES YOU TO THE COMPUTER SCIENCE DEPARTMENT</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="Images/fit.jpg" class="d-block w-100" alt="..."style="height:700px; width:100%">
<div class="carousel-caption d-none d-md-block">
                <h5>LOYOLA COLLEGE WELCOMES YOU TO THE COMPUTER SCIENCE DEPARTMENT</h5>
            </div>
          </div>         
          <div class="carousel-item">
            <img src="Images/3.jpg" class="d-block w-100" alt="..." style="height:700px; width:100%">
<div class="carousel-caption d-none d-md-block">
                <h5>LOYOLA COLLEGE WELCOMES YOU TO THE COMPUTER SCIENCE DEPARTMENT</h5>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#headerslider" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#headerslider" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> 
</div>
<!--------------------------------------------------------------------------Go to top button--------------------------------------------------------
<section>
<button onclick="topFunction()" id="myBtnT" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
<script include-html="in.html">
  
mybutton = document.getElementById("myBtnT");
window.onscroll = function() {scrollFunction()
};
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>
</section>-------->
<!--------------------------------------------------------------------------ACADEMICS---------------------------------------------------------------->
<section id="academics">
<div class="col-md-12">
                <h2 style="font-family: FrizQuat">ACADEMICS</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <p><a href="http://loyolacollege.edu/computerscience/Gallery/InaugurationOfFIT2019.pdf">Inauguration of FIT</a></p>
    </div>
  </div>
    <div class="column">
    <div class="card">
      <p><a href="http://loyolacollege.edu/computerscience/Gallery/GoogleCloudCareerReadinessProgram2019.pdf">Google Cloud Career Readiness Program</a></p>
    </div>
  </div>
    <div class="column">
    <div class="card">
      <p><a href="http://loyolacollege.edu/computerscience/Gallery/2019_2020/WorkshopOnNetworking_20thNov2019.pdf">Workshop on Networking</a></p>
    </div>
  </div>
  <div class="column">
    <div class="card AI">
      <p><a href="http://loyolacollege.edu/computerscience/Gallery/2019_2020/InternationalSeminar_3rdDec2019.pdf">International Seminar on "Designing Intelligent Machine Condition Monitoring Systems using Artificial Neural Network (ANN)"</a></p>
    </div>
  </div>
<div class="column">
    <div class="card CS">
      <p><a href="http://loyolacollege.edu/computerscience/Gallery/2019_2020/XIBIT2019.pdf">Department Festival<br/> XIBIT '19</a></p>
    </div>
  </div>  
  </div>
  </div>
</section>
<!--------------------------------------------------------------------------NON-ACADEMICS---------------------------------------------------------------->
<!--------------------------------------------------------------------------ABOUT---------------------------------------------------------------->
<section id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        <h2 style="font-family: FrizQuat">ABOUT</h2>
                        <div class="about-content">
                            The Department of Computer Science was started in Loyola in the year 1993 in Shift II. Initially the department had bachelor's degree programme in Computer Science.
							The department grew to the next level with the addition of bachelor's degree programme in computer applications and master's degree programme in Computer Science in the year 2000. 
							The department has 14 experienced faculty members with NET/SET qualifications. Three of them had completed their doctorates and many more are likely to follow. 
							Very soon it is going to be a research department. Our staff consistently publish scientific articles in reputed journals and attend conferences in and outside India. 
							We continuously update the curriculum and make the courses relevant to the need of hour.In order to bridge the gap between classroom teaching and the actual field outside, the department organizes expert talks and seminars on current topics through Forum for Information Technology. It is the platform for students to bring out their talents, creativity and innovations. 
							Our students are extremely talented and have won several shields and championships in various competitions and events across the country.<span id="dots">...</span><span id="more">
                            <br/>The MCA was started as a master's degree programme in the department of computer science in the year 1999. It was affiliated to the University of Madras in the year 2000.
							MCA become autonomous in the year 2006 with its restructured syllabus. In 2007, the department of computer science got bifurcated into computer science and computer applications and MCA
							became a separate post graduate department. The syllabus was restructured again in 2012. The department of MCA has conducted 4 national level conferences. 
							It has organized workshops on various topics such as Network Security, Data Mining, Cloud Computing and other technologies. 
							Our students have been well placed in reputed national and international IT companies and other industries.
							The department has well experienced staff with NET and SET qualifications. Many are pursuing their PhD degree.
							Forum for Advanced Computing Technology (FACT) is a platform to bring out the potency within each student. 
							Our students have participated and bagged prizes in various competitions across the state.
							FACT organizes talks and seminars for students on the current technologies.</span></div>
          <!---------------------------------------------------------Read More----------------------------------------------------------->
            <button onclick="myFunction()" class="btn btn-primary" id="myB">Read more>></button>
            <script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myB");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more>>"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
                        </div>
                    </div>
                </div>                               
            </section>
<?php 
include("footer.php");
?>     
  </body>
</html>