<?php 
   $con= mysqli_connect('localhost', 'root', '', 'anshuman');
   
   session_start();
   
   if(!isset($_SESSION['email'])){
   	header('location:login.php');
   }
   
   if(!isset($_COOKIE['page1'])) {
       setCookie('page1', 'yes', time()+(60*3));
       mysqli_query ($con, "update first_page_count set count = count+1");
   }
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Coming Back up
      </title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="favicon.ico">
      <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.14.2/styles/monokai-sublime.min.css">
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
               <?php
                  $con= mysqli_connect('localhost', 'root', '', 'anshuman');
                  
                  $sql = "SELECT count from first_page_count";
                  $result = $con-> query($sql);
                  echo "<br>";
                  echo "<h5>";
                  echo "Total Read Count is: ";
                  if ($result-> num_rows >0){
                      while ($row = $result-> fetch_assoc()){
                  
                          echo "<tr><td>" . $row["count"] . "</td></tr>";
                      }
                      echo "</table>";
                  } 
                  else {
                      echo "default error";
                  }
                  $con-> close();
                  echo "</h5>";
                  ?>
            </div>
         </nav>
      </header>
      <div class="main-wrapper">
      <article class="blog-post px-3 py-5 p-md-5">
      <div class="container">
      <header class="blog-post-header">
         <h2 class="title mb-2">Coming Back up</h2>
         <div class="meta mb-3"><span class="date">Published 3 months ago</span><span class="time">5 min read</span><span class="comment"><a href="#">4 comments</a></span></div>
      </header>
      <div class="blog-post-body">
      <figure class="blog-banner">
         <img class="img-fluid" src="blog_images/1.jpg" alt="image">
      </figure>
      <p>So we’re driving along, a road in the middle of nowhere, a few trees now and then on each side of the road, mountains in the distance, there hasn’t been a town for ages and then you see this sign, not really a proper sign at all, just a piece of card with some words scribbled on it: ‘Bungee Jumping, 5km’, and an arrow pointing to the left. I can’t even see a road going left, and there’s certainly no sign of any bungee jumping, but you insist, the idea has taken you, you’re crazy about it, you’ve always wanted to do bungee jumping. I know, you think I’m boring because I don’t want to go.
         ‘Go on!’ you insist. ‘We don’t even have to do the bungee jumping, we can just go there and see what’s happening. It’ll be interesting!’ As usual, you get your way. I give in and off we go along this dirt road, for what seems much more than five kilometres to me. But then, after driving for ages, suddenly, out of nowhere, some trees appear, like a small wood.
         ‘This must be the place,’ you say. The road narrows into just a path, so we pull over to the side of the road. I couldn’t drive down there if I wanted to. As soon as we’re out of the car we can hear voices: people shouting and laughing. They sound like young people, they sound like they’re having a good time.
         We slowly walk to where the noise and people are. In the middle of the wood there’s a group of about 20 people. The youngest are about 15 or 16, while some of them are perhaps in their late 20s.
         They look up and see us, then say hello to us. They’re polite, friendly even, but I feel like we’re interrupting a private party – gatecrashing something they’re doing.
         Once there had been a river running through the middle of the forest, but now there was just a dry ditch. It doesn’t matter; nobody is interested in swimming. A metal bridge crosses the ditch. The bridge doesn’t look too stable. I think the kids had built it themselves. There’s a big group of the kids in the middle of the bridge. They’re all leaning over and looking down into the ditch. They’re all shouting and laughing. Another person is hanging from a long piece of elastic rope in the middle of the ditch. He is laughing like he is mad. The other people slowly pull him up to the bridge. As the guy comes to the top he looks exhilarated and shocked, but also very, very happy.
         I look at you and can see what you’re thinking.
         ‘I want to do that!’ you say. I knew it. And you know what I want to say: ‘Danger!!! Damage to internal organs! Safety procedures! Damage to your eyes! The rope can burn you! You can get tangled up in the rope! You can dislocate your arm or your leg! It’s certain that you will get bruises on your arms! What happens if the rope breaks? Who knows who these people are? Have you any idea how far away from a hospital we are?’ I don’t say it, but, yes, you’re right, I am thinking it. I don’t say anything, because I know that you won’t have answers for any of my questions. You know that I’m right, really.
         You’ve always been a lot more adventurous than me. I know you think I’m boring and safe and always worried about danger and risk.
         Perhaps you’re right. Perhaps I am too boring.
         I don’t know why people do it. I really don’t know. I remember when I was a kid, my friend had a bicycle that had no brakes. We used to take his bike without brakes and go down a big hill on it. I think about that, that old bike so many years ago, and I remember how I felt then.
         I breathe in, close my eyes, don’t think about anything. I jump. I think I’m going forever and wonder when I’ll stop. But it feels great. I feel scared and thrilled and alive. Then there’s a pull and I’m going back up again, and, yes, it is dangerous, but, yes, it is thrilling. But the most exciting, thrilling, wonderful thing of all is seeing your face as I come back up to the bridge.
         Chris Rose
      </p>
      <nav class="blog-nav nav nav-justified my-5">
         <a class="nav-link-next nav-item nav-link rounded-right" href="2.php">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
      </nav>
      <script src="assets/plugins/jquery-3.3.1.min.js"></script>
      <script src="assets/plugins/popper.min.js"></script> 
      <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
      <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.14.2/highlight.min.js"></script>
      <script src="assets/js/blog.js"></script>
      <script src="assets/js/demo/style-switcher.js"></script>     
   </body>
</html>