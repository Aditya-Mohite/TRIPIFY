<?php
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>TripBoss</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- font awesome cdn -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- fonts -->
    <link rel="stylesheet" href="font/fonts.css" />
    <!-- normalize css -->
    <link rel="stylesheet" href="css2/normalize.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="css2/utility.css" />
    <link rel="stylesheet" href="css2/style.css" />
    <link rel="stylesheet" href="css2/responsive.css" />
    <link rel="stylesheet" href="css2/nav.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </head>
  <body>
    <!--navbar-->
    <nav class="navbar glass" style="height: 110px">
      <span style="padding-top: 45px"
        ><a href="#home"
          ><img
            class="img2"
            src="./img/tripify-high-resolution-logo-color-on-transparent-background.png"
            width="110px"
            height="80px"
            style="margin-top: -70px; margin-left: -10px" />
          <h1 class="logo"></h1></a
      ></span>
      <ul class="nav-links">
        <li><a href="main.php" id="pri" class="cir_border">Home</a></li>
        <li><a href="#events" id="sec" class="cir_border">Top</a></li>
        <li><a href="#explore" id="tri" class="cir_border">Explore</a></li>
        <li><a href="#about" id="quad" class="cir_border">About</a></li>
        <!-- <li><a href="login.php" class="cir_border">JoinUs</a></li> -->
        <li>
          <a href="#contribution" id="quint" class="cir_border"
            >Contributions</a
          >
        </li>
        <li><a href="#contact" id="hex" class="cir_border">Contact</a></li>
        <!-- <li><a href="logout.php"><b>Logout</b></a></li> -->
        <!-- <li><div>
                <input type="checkbox" class="checkbox" id="checkbox">
              <label for="checkbox" class="label">
                <i class="fa fa-moon-o"></i>
                <i class='fa fa-sun-o'></i>
                <div class='ball'>
              </label>
            </div></li> -->
      </ul>
      <img src="./img/menu-btn.png" alt="" class="menu-btn" />
      <!-- <div class="heyuser">  Hey, ###PHP CODE HERE ! </div> -->
    </nav>
    <!--navbar-->

    <!-- header -->
    <header class="flex">
      <div class="container">
        <div class="header-title">
          <h1>THAILAND</h1>
          <p>Phuket</p>
        </div>
        <div class="header-form">
          <h2>About this place</h2>
          <p class="text">
            Phuket Province, Thailand, is one of the most famous cities in the country. It is because it houses the Mingmongkol Big Buddha, a very iconic sculpture due to its massive size. Guests will love the attraction as they can climb the hill and enjoy the scenery offered. Aside from this, the city s also home to various beaches, perfect for summer.

          </p>
        </div>
      </div>
    </header>
    <!-- header -->


    <!-- services section -->
    <section id="services" class="py-4">
      <div class="container">
        <div class="title-wrap">
          <!-- <span class="sm-title">know about services that we offer</span> -->
          <h2 class="lg-title">When to visit</h2>
        </div>

        <div class="services-row">
          <div class="services-item">
            <span class="services-icon">
              <i class="fas fa-hotel"></i>
            </span>
            <p class="text">
              High Season</p>
            <h3>Dec - March</h3>
            <p class="text">
The best time to visit Phuket is from December through March. This is the north-east monsoon season. Mainland Thailand blocks the monsoon rains, leaving only cool breezes and blue skies over Phuket. The average temperature is around 24°C to 32°C (75°F to 89°F) and the humidity is at its lowest.          </div>

          <div class="services-item">
            <span class="services-icon">
              <i class="fas fa-map-marked-alt"></i>
            </span>
            <p class="text">
              Low Season</p>
            <h3>Sept - Oct</h3>
            <p class="text">
          The best time to visit Phuket is from December through March. This is the north-east monsoon season. Mainland Thailand blocks the monsoon rains, leaving only cool breezes and blue skies over Phuket. The average temperature is around 24°C to 32°C (75°F to 89°F) and the humidity is at its lowest.
            </p>
                    </div>

          <div class="services-item">
            <span class="services-icon">
              <i class="fas fa-money-bill"></i>
            </span>
            <p class="text">
              Shoulder Season</p>
            <h3>Apr- Aug</h3>
            <p class="text">
              The hottest Phuket weather is from April through May, with temperatures ranging from 27°C to 36°C (80°F to 95°F). Humidity is high, at this time, which can make the days feel even hotter.

              Locals enjoy visiting in June, July and August. The weather in Phuket is generally fine and the island's favourite attractions remain uncrowded. The usual pattern is for brief but heavy showers, with plenty of sunshine between downpours. Temperatures over this period range between 20°C to 33°C (70°F and 90°F).            </p>
            <!-- <a href="#" class="btn">Read more</a> -->
          </div>
        </div>
      </div>
    </section>
    <!-- end of services section -->

    <!-- featured section -->
    <section id="featured" class="py-4">
      <div class="container">
        <div class="title-wrap">
          <span class="sm-title"
            >know about some places before your travel</span
          >
          <h2 class="lg-title">featured places</h2>
        </div>

        <div class="featured-row">
          <div class="featured-item my-2 shadow">
            <img src="img/bangkok.jpg" alt="featured place" />
            <div class="featured-item-content">
              <span>
                <i class="fas fa-map-marker-alt"></i>
                Bangkok
              </span>
              <div>
                <!-- <p class = "text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos libero soluta illum, harum amet excepturi sit?</p> -->
              </div>
            </div>
          </div>

          <div class="featured-item my-2 shadow">
            <img src="img/kohtao.jpg" alt="featured place" />
            <div class="featured-item-content">
              <span>
                <i class="fas fa-map-marker-alt"></i>
                 Koh Tao
              </span>
              <div>
                <!-- <p class = "text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos libero soluta illum, harum amet excepturi sit?</p> -->
              </div>
            </div>
          </div>

          <div class="featured-item my-2 shadow">
            <img src="img/phiphi.jpg" alt="featured place" />
            <div class="featured-item-content">
              <span>
                <i class="fas fa-map-marker-alt"></i>
                Phi Phi Islands
              </span>
              <div>
                <!-- <p class = "text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos libero soluta illum, harum amet excepturi sit?</p> -->
              </div>
            </div>
          </div>

          <div class="featured-item my-2 shadow">
            <img src="img/chiangmai.jpg" alt="featured place" />
            <div class="featured-item-content">
              <span>
                <i class="fas fa-map-marker-alt"></i>
                Chiang Mai
              </span>
              <div>
                <!-- <p class = "text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos libero soluta illum, harum amet excepturi sit?</p> -->
              </div>
            </div>
          </div>

          <div class="featured-item my-2 shadow">
            <img src="img/krabi.jpg" alt="featured place" />
            <div class="featured-item-content">
              <span>
                <i class="fas fa-map-marker-alt"></i>
Krabi
 </span>
              <div>
                <!-- <p class = "text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos libero soluta illum, harum amet excepturi sit?</p> -->
              </div>
            </div>
          </div>

          <div class="featured-item my-2 shadow">
            <img src="img/ayutthaya.jpg" alt="featured place" />
            <div class="featured-item-content">
              <span>
                <i class="fas fa-map-marker-alt"></i>
                Ayutthaya
              </span>
              <div>
                <!-- <p class = "text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos libero soluta illum, harum amet excepturi sit?</p> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of featured section -->

    <!-- testimonials section -->
    <!-- <section id = "testimonials" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">what our clients say about us</span>
                    <h2 class = "lg-title">testimonials</h2>
                </div>

                <div class = "test-row">
                    <div class = "test-item">
                        <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda blanditiis, asperiores, velit iste eos officiis tempora magni quaerat quo consectetur expedita cum recusandae facere nam voluptate minus iusto eum. Delectus!</p>
                        <div class = "test-item-info">
                            <img src = "images/test-1.jpg" alt = "testimonial">
                            <div>
                                <h3>Kevin Wilson</h3>
                                <p class = "text">Trip to Brazil</p>
                            </div>
                        </div>
                    </div>

                    <div class = "test-item">
                        <p class = "text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed ut dolores tenetur harum deserunt. Maxime tenetur consectetur recusandae nobis fugit iusto natus quibusdam nulla!</p>
                        <div class = "test-item-info">
                            <img src = "images/test-2.jpg" alt = "testimonial">
                            <div>
                                <h3>Ben Davis</h3>
                                <p class = "text">Trip to Maldives</p>
                            </div>
                        </div>
                    </div>

                    <div class = "test-item">
                        <p class = "text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem sapiente amet expedita quae autem deleniti quo magni numquam facilis soluta dicta, praesentium ipsum, quos optio sed quibusdam! Reprehenderit recusandae provident id nemo!</p>
                        <div class = "test-item-info">
                            <img src = "images/test-3.jpg" alt = "testimonial">
                            <div>
                                <h3>Jaura Jones</h3>
                                <p class = "text">Trip to Thailand</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    <!-- end of testimonials section -->

    <!-- video section -->
    <section id="video">
      <div class="video-wrapper flex">
        <video loop>
          <source src="videos/video-section.mp4" type="video/mp4" />
        </video>
        <!-- <button type="button" id="play-btn"> -->
          <i class="fas fa-play"></i>
        </button>
      </div>
    </section>
    <!-- end of video section -->

    <!-- footer -->
    <!-- <footer class = "py-4"> -->
    <!-- <div class = "container footer-row">
                <div class = "footer-item">
                    <a href = "index.html" class = "site-brand">
                        Trip<span>Boss</span>
                    </a>
                    <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet voluptates maiores nam vitae iusto. Placeat rem sint voluptas natus exercitationem autem quod neque, odit laudantium reiciendis ipsa suscipit veritatis voluptate.</p>
                </div>

                <div class = "footer-item">
                    <h2>Follow us on: </h2>
                    <ul class = "social-links">
                        <li>
                            <a href = "#">
                                <i class = "fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class = "footer-item">
                    <h2>Popular Places:</h2>
                    <ul>
                        <li><a href = "#">Thailand</a></li>
                        <li><a href = "#">Australia</a></li>
                        <li><a href = "#">Maldives</a></li>
                        <li><a href = "#">Switzerland</a></li>
                        <li><a href = "#">Germany</a></li>
                    </ul>
                </div>

                <div class = "subscribe-form footer-item">
                    <h2>Subscribe for Newsletter!</h2>
                    <form class = "flex">
                        <input type = "email" placeholder="Enter Email" class = "form-control">
                        <input type = "submit" class = "btn" value = "Subscribe">
                    </form>
                </div>
            </div>
        </footer> -->
    <!-- end of footer -->


    <div class="container">

<h1 class="mt-5 mb-5">Reviews!!</h1>

<div class="card">
  <div class="card-header">Overview</div>
  <div class="card-body">
    <div class="row">
      <div class="col-sm-4 text-center">
        <h1 class="text-warning mt-4 mb-4">
          <b><span id="average_rating">0.0</span> / 5</b>
        </h1>
        <div class="mb-3">
          <i class="fas fa-star star-light mr-1 main_star"></i>
                      <i class="fas fa-star star-light mr-1 main_star"></i>
                      <i class="fas fa-star star-light mr-1 main_star"></i>
                      <i class="fas fa-star star-light mr-1 main_star"></i>
                      <i class="fas fa-star star-light mr-1 main_star"></i>
        </div>
        <h3><span id="total_review">0</span> Review</h3>
      </div>
      <div class="col-sm-4">
        <p>
                      <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>

                      <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                      <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                      </div>
                  </p>
        <p>
                      <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>
                      
                      <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                      <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                      </div>               
                  </p>
        <p>
                      <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>
                      
                      <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                      <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                      </div>               
                  </p>
        <p>
                      <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>
                      
                      <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                      <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                      </div>               
                  </p>
        <p>
                      <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>
                      
                      <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                      <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                      </div>               
                  </p>
      </div>
      <div class="col-sm-4 text-center">
        <h3 class="mt-4 mb-3">Write Review Here</h3>
        <button type="button" name="add_review" id="add_review" class="btn btn-primary">Review</button>
      </div>
    </div>
  </div>
</div>
<div class="mt-5" id="review_content"></div>
</div>
</body>
</html>

<div id="review_modal" class="modal" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title">Submit Review</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <h4 class="text-center mt-2 mb-4">
        <i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
              <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
              <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
              <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
              <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
      </h4>
      <div class="form-group">
        <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" />
      </div>
      <div class="form-group">
        <textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
      </div>
      <div class="form-group text-center mt-4">
        <button type="button" class="btn btn-primary" id="save_review">Submit</button>
      </div>
    </div>
</div>
</div>
</div>

<style>
.progress-label-left
{
float: left;
margin-right: 0.5em;
line-height: 1em;
}
.progress-label-right
{
float: right;
margin-left: 0.3em;
line-height: 1em;
}
.star-light
{
color:#e9ecef;
}
</style>

<script>

$(document).ready(function(){

var rating_data = 0;

$('#add_review').click(function(){

  $('#review_modal').modal('show');

});

$(document).on('mouseenter', '.submit_star', function(){

  var rating = $(this).data('rating');

  reset_background();

  for(var count = 1; count <= rating; count++)
  {

      $('#submit_star_'+count).addClass('text-warning');

  }

});

function reset_background()
{
  for(var count = 1; count <= 5; count++)
  {

      $('#submit_star_'+count).addClass('star-light');

      $('#submit_star_'+count).removeClass('text-warning');

  }
}

$(document).on('mouseleave', '.submit_star', function(){

  reset_background();

  for(var count = 1; count <= rating_data; count++)
  {

      $('#submit_star_'+count).removeClass('star-light');

      $('#submit_star_'+count).addClass('text-warning');
  }

});

$(document).on('click', '.submit_star', function(){

  rating_data = $(this).data('rating');

});

$('#save_review').click(function(){

  var user_name = $('#user_name').val();

  var user_review = $('#user_review').val();

  if(user_name == '' || user_review == '')
  {
      alert("Please Fill Both Field");
      return false;
  }
  else
  {
      $.ajax({
          url:"submit_rating.php",
          method:"POST",
          data:{rating_data:rating_data, user_name:user_name, user_review:user_review},
          success:function(data)
          {
              $('#review_modal').modal('hide');

              load_rating_data();

              alert(data);
          }
      })
  }

});

load_rating_data();

function load_rating_data()
{
  $.ajax({
      url:"submit_rating.php",
      method:"POST",
      data:{action:'load_data'},
      dataType:"JSON",
      success:function(data)
      {
          $('#average_rating').text(data.average_rating);
          $('#total_review').text(data.total_review);

          var count_star = 0;

          $('.main_star').each(function(){
              count_star++;
              if(Math.ceil(data.average_rating) >= count_star)
              {
                  $(this).addClass('text-warning');
                  $(this).addClass('star-light');
              }
          });

          $('#total_five_star_review').text(data.five_star_review);

          $('#total_four_star_review').text(data.four_star_review);

          $('#total_three_star_review').text(data.three_star_review);

          $('#total_two_star_review').text(data.two_star_review);

          $('#total_one_star_review').text(data.one_star_review);

          $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');

          $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');

          $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');

          $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');

          $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

          if(data.review_data.length > 0)
          {
              var html = '';

              for(var count = 0; count < data.review_data.length; count++)
              {
                  html += '<div class="row mb-3">';

                  html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">'+data.review_data[count].user_name.charAt(0)+'</h3></div></div>';

                  html += '<div class="col-sm-11">';

                  html += '<div class="card">';

                  html += '<div class="card-header"><b>'+data.review_data[count].user_name+'</b></div>';

                  html += '<div class="card-body">';

                  for(var star = 1; star <= 5; star++)
                  {
                      var class_name = '';

                      if(data.review_data[count].rating >= star)
                      {
                          class_name = 'text-warning';
                      }
                      else
                      {
                          class_name = 'star-light';
                      }

                      html += '<i class="fas fa-star '+class_name+' mr-1"></i>';
                  }

                  html += '<br />';

                  html += data.review_data[count].user_review;

                  html += '</div>';

                  html += '<div class="card-footer text-right">On '+data.review_data[count].datetime+'</div>';

                  html += '</div>';

                  html += '</div>';

                  html += '</div>';
              }

              $('#review_content').html(html);
          }
      }
  })
}

});

</script>

    <!-- js -->
    <script src="js1/script.js"></script>
    <script>
      // play/pause video
      let video = document.querySelector(".video-wrapper video");
      document.getElementById("play-btn").addEventListener("click", () => {
        if (video.paused) {
          video.play();
        } else {
          video.pause();
        }
      });
    </script>
  </body>
</html>
