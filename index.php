<?php 
   session_start();
   
   if(!isset($_SESSION['email'])){
   	header('location:login.php');
   }
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Homepage</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Blog Template">
      <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
      <link rel="shortcut icon" href="favicon.ico">
      <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>
      <link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">
   </head>
   <body>
   <header class="header text-center">
         <h1 class="blog-name pt-lg-4 mb-0">About Anshuman</a></h1>
         <nav class="navbar navbar-expand-lg navbar-dark" >
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navigation" class="collapse navbar-collapse flex-column" >
               <div class="profile-section pt-3 pt-lg-0">
                  <img class="profile-image mb-3 rounded-circle mx-auto" src="image.jpeg" alt="image" >			
                  <div class="bio mb-3">An enthusiastic engineering fresher who is a self-starter and capable to use technical and communication skills for the betterment of the organization. A bachelor's degree in Computer Science and  Engineering, and looking forward to work in a competitive environment that enhances overall learning.</div>
                  <hr>
               </div>
               <ul class="navbar-nav flex-column text-left">
                  <li class="nav-item">
                     <a class="nav-link" href="index.php"><i class="fas fa-home fa-fw mr-2"></i>Home<span class="sr-only">(current)</span></a>
                  </li>
               </ul>
               <div class="my-2 my-md-3">
                  <a class="btn btn-primary" href="logout.php">Log Out Session</a>
               </div>
            </div>
         </nav>
      </header>
      <div class="main-wrapper">
      <section class="cta-section theme-bg-light py-5">
		    <div class="container text-center">
			    <h2 class="heading">STORIES</h2>
             <h3 class="heading2">bring us together</h3>
			    <div class="intro">Welcome to my sample website for Pratilipi Assessment.</div>
		    </div>
	    </section>
      <section class="blog-list px-3 py-5 p-md-5">
         <div class="container">
            <div class="item mb-5">
               <div class="media">
                  <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="blog_images/1.jpg" alt="image">
                  <div class="media-body">
                     <h3 class="title mb-1"><a href="1.php">Coming Back Up</a></h3>
                     <div class="meta mb-1"><span class="date">Published 2 days ago</span><span class="time">5 min read</span></div>
                     <div class="intro">So we’re driving along, a road in the middle of nowhere, a few trees now and then on each side of the road, mountains in the distance...</div>
                     <a class="more-link" href="1.php">Read more &rarr;</a>
                  </div>
               </div>
            </div>
            <div class="item mb-5">
               <div class="media">
                  <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="blog_images/2.jpg" alt="image">
                  <div class="media-body">
                     <h3 class="title mb-1"><a href="2.php">King of Pumpkins</a></h3>
                     <div class="meta mb-1"><span class="date">Published 3 months ago</span><span class="time">3 min read</span></div>
                     <div class="intro">'But pumpkins live in fields, not in forests,' I said to my mother.
                        She wouldn't listen to me. 'I'm telling you,' she said, 'the king of the pumpkins lives in the middle of the woods and the woods that he lives in are the woods right next to
                     </div>
                     <a class="more-link" href="2.php">Read more &rarr;</a>
                  </div>
               </div>
            </div>
            <div class="item mb-5">
               <div class="media">
                  <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="blog_images/3.jpg" alt="image">
                  <div class="media-body">
                     <h3 class="title mb-1"><a href="3.php">Mr. Smith</a></h3>
                     <div class="meta mb-1"><span class="date">Published 1 month ago</span><span class="time">8 min read</span></div>
                     <div class="intro">'Well, Mr Smith, if you prefer a different type of nose, we have a large selection available.'
                        'I think this nose is a bit too small.'
                        'Small noses are very fashionable this year, Mr Smith, very fashionable.'
                        'Do you think it suits me?' asked Mr Smith..
                     </div>
                     <a class="more-link" href="3.php">Read more &rarr;</a>
                  </div>
               </div>
            </div>
            <div class="item mb-5">
               <div class="media">
                  <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="blog_images/4.jpg" alt="image">
                  <div class="media-body">
                     <h3 class="title mb-1"><a href="4.php">The christmas lights went out</a></h3>
                     <div class="meta mb-1"><span class="date">Published 2 months ago</span><span class="time">15 min read</span></div>
                     <div class="intro">Tom Jankowitz took his coat off and threw it onto the seat in the airport lounge. He sat down and opened up his laptop computer, keeping one eye on the small television which showed the departure times of all the flights from the airport.
                        Tom Jankowitz was tired. Tired and bored. It was Christmas, nearly. Tom hated Christmas. He only remembered that it
                     </div>
                     <a class="more-link" href="4.php">Read more &rarr;</a>
                  </div>
               </div>
            </div>
            <div class="item mb-5">
               <div class="media">
                  <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="blog_images/5.jpg" alt="image">
                  <div class="media-body">
                     <h3 class="title mb-1"><a href="5.php">The Comeback</a></h3>
                     <div class="meta mb-1"><span class="date">Published 2 months ago</span><span class="time">10 min read</span></div>
                     <div class="intro">Fausto Ruiz got off the boat at the port of the city where he had been born fifty years ago, and to which he had not returned for twenty years. He walked along the seafront, surprised by how much his hometown had changed, and also by how much of it ...</div>
                     <a class="more-link" href="5.php">Read more &rarr;</a>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="media">
                  <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="blog_images/6.jpg" alt="image">
                  <div class="media-body">
                     <h3 class="title mb-1"><a href="6.php">The Dinosaur in Jake's Garage</a></h3>
                     <div class="meta mb-1"><span class="date">Published 3 months ago</span><span class="time">2 min read</span></div>
                     <div class="intro">“Dad” he said, “There’s a dinosaur living in the garage.”
                        “Is there really, Jake?” said his dad. “That’s interesting. Now go away and play. Daddy’s busy at the moment.” Jake’s dad went back to reading his newspaper.
                        Jake had suspected that there was a dinosaur in...
                     </div>
                     <a class="more-link" href="6.php">Read more &rarr;</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <script src="assets/plugins/jquery-3.3.1.min.js"></script>
      <script src="assets/plugins/popper.min.js"></script> 
      <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
      <script src="assets/js/demo/style-switcher.js"></script>     
   </body>
</html>