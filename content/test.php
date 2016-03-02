
<style>
/* All parent elements of .bg-holder must be 100% height for vertical stretch to work */
html,
body {
  width: 100%;
  height: 100%;
  
}
body p{
  font-family: 'Rokkitt', serif;
}
body h1{
  font-family: 'Rokkitt', serif;
}
  body h2{
  font-family: 'Rokkitt', serif;
}
.bg-holder {
  width: 100%;
  height: 100%;
}

section{
  padding: 60px 10px;
}

.bg-holder#pic1 {
  background-image: url('img/test.jpg');
}

.bg-holder#pic2 {
  background-image: url('img/test2.jpg');
}
.bg-holder#pic3 {
  background-image: url('img/test3.jpg');
  background-repeat: no-repeat;
  background-size: 80px 60px;
}

@media (min-width: 768px) {
  .bg-holder#pic1 {
    background-image: url('img/test.jpg');
  }
  .bg-holder#pic2 {
    background-image: url('img/test2.jpg');
  }
  .bg-holder#pic3 {
    background-image: url('img/test3.jpg');
    background-repeat: no-repeat;
    background-size: 80px 60px;
  }
}
</style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  


    <!-- Collect the nav links, forms, and other content for toggling -->
    
  </div><!-- /.container-fluid -->
</nav>
    
<div id="pic1" class="bg-holder" "container">
<div style="text-align:center">
   
  
</div>
</div>

<section>
<div class="container">
  <div class="jumbotron">
      <h1 id="hello,-world!">About FU University!</h1>
 <p> Founded in 1878, FU University® is a small, not-for-profit, private college overlooking Lake Champlain and Burlington, Vermont, with additional campuses in Montreal, Quebec and Dublin, Ireland. Our career-driven approach to higher education prepares students for their professional life from their very first semester.
Ranked among the Princeton Review's 379 Best Colleges: 2015 Edition and featured in the "Fiske Guide to Colleges" for 2016 as one of the "best and most interesting schools" in the United States, Canada and Great Britain,  </p>
    
  </div>
</section>

<div id="pic2" class="bg-holder" "container" data-width="1024" data-height="768"></div>

<section>
<div class="container">

  <div class="col-md-4">

  </div>
  <div class="col-md-8">
<div class="jumbotron">
      <h2 id="hello,-world!">Student and Grad Success!</h2>
 <p> Through competency-based learning, FU grads earn a degree that represents proven knowledge. Because they finish their programs having become truly competent in the skills and subjects employers value most, FU graduates are ready to excel in their careers. It's why FU grads get jobs that more than pay for their education in just a few years.



</p>
    
  </div>
  
</div>
</div>
</section>

<div id="pic3" class="bg-holder" data-width="1024" data-height="768"></div>



   
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   
    <script src="js/jquery.parallax-scroll.min.js"></script>
    
    <script>
    $('.bg-holder').parallaxScroll({
      friction: 0.5
  });
    </script>
