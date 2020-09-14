<?php 
   $con= mysqli_connect('localhost', 'root', '', 'anshuman');
   
   session_start();
   
   if(!isset($_SESSION['email'])){
   	header('location:login.php');
   }
   
   if(!isset($_COOKIE['page5'])) {
       setCookie('page5', 'yes', time()+(60*3));
       mysqli_query ($con, "update fifth_page_count set count = count+1");
   }
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>The Comeback</title>
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
         <h1 class="blog-name pt-lg-4 mb-0">About Anshuman</h1>
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
                  
                  $sql = "SELECT count from fifth_page_count";
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
         <h2 class="title mb-2">The Comeback</h2>
         <div class="meta mb-3"><span class="date">Published 3 months ago</span><span class="time">5 min read</span></div>
      </header>
      <div class="blog-post-body">
      <figure class="blog-banner">
         <a href="https://made4dev.com"><img class="img-fluid" src="blog_images/5.jpg" alt="image"></a>
      </figure>
      <p>Fausto Ruiz got off the boat at the port of the city where he had been born fifty years ago, and to which he had not returned for twenty years. He walked along the seafront, surprised by how much his hometown had changed, and also by how much of it he could still recognise. There were lots of new buildings up on the hills around the city now, buildings which he didn’t recognise. Yet many of the old buildings along the sea were exactly the same as he remembered them, although many of the old shops he remembered were there no more.
         He walked away from the port and into the centre of the city. He walked up the main road and saw how all the shops had changed, but that there was still one small café there which was the same as it had been when he was young and famous. He walked into the café and sat down at one of the tables. He recognised the owner of the café behind the bar as well as the waiter who was working there. They both looked much, much older. Fausto felt certain that he didn’t look as old as they did, even though they were all twenty years older now.
         Fausto sat at his table and waited for the waiter to come to him. He sat there for ten, fifteen, twenty minutes. Half an hour passed and the waiter continued to ignore him. Fausto raised his arm and shouted to the waiter, then to the owner of the café behind the bar, but it was useless. They didn’t come and ask him what he wanted. They were ignoring him.
         Angry, Fausto got up and walked out of the café, slamming the door behind him. Such ignorant people, he thought. Now I remember why I left this town twenty years ago and why I never came back.
         He walked along the main street as far as the main square in the town and when he arrived at the main square he remembered the other reason why he had never come back. In the main square of the town there was the theatre. As he looked at the theatre, Fausto Ruiz had a terrible memory of what had happened there twenty years ago.
         Twenty years ago, Fausto Ruiz had been the most famous singer in the world. He had sung in all of the most famous opera houses in the world. He had sung in London, New York, Moscow, Buenos Aires, Tokyo and Sydney. Everywhere he went, people paid large sums of money for tickets, then when they saw him sing they clapped and applauded and cheered for hours. When he was at the height of his fame, Fausto Ruiz decided to come back to his home town and to sing in a triumphant concert in the theatre on the main square of the town.
         The concert was announced and all the tickets sold out within a few hours. The evening of the concert, thousands of people crowded into the theatre to see the legendary Fausto Ruiz sing in the theatre of his hometown.
         There was silence as Fausto walked onto the stage. Then he began to sing one of his best-known songs. And at the end of the song, there was just silence. Nobody clapped, nobody applauded, nobody cheered. Fausto waited, very surprised for a moment, then started to sing another song. At the end of this song, there was silence for a moment, then the people began to boo and to hiss. Fausto tried to cover the noise of the booing and hissing by singing another song, very loudly this time. But it got worse. The louder he sang, the louder the boos and hisses became. Then someone threw a tomato at him. Then someone else threw a rotten orange at him. Then someone else threw an old shoe at him. Soon, there was a rain of rotten fruit and vegetables and smelly old shoes falling down on the great Fausto Ruiz. Fausto was angry. Fausto was furious. He stormed off the stage and out of the theatre. He left his hometown that night, and he said that he would never, ever go back there ever again.
         But twenty years later, Fausto Ruiz changed his mind. He was getting old now, he thought, and he wanted to go back home again, to see the town where he had grown up. But in the café, he realised that perhaps not much had really changed. He decided to walk into the theatre. As he walked in he saw the man selling tickets in the box office. It was the same man from twenty years ago. Fausto said hello to him but the man said nothing and ignored him. ‘Still the same,’ thought Fausto. He walked into the theatre and got up onto the empty stage. He thought he could hear the terrible booing and hissing of that night twenty years ago.
         He felt sad, and left the theatre and decided to go and visit the house where he had been born fifty years ago. He walked all the way across the town, expecting to be recognised by people. When he got close to his old house he walked through the park where he had played as a small child. He saw some men there, the same age as he was, and thought that he remembered them. They were people who had been his friends when he was at school. He walked over to them to say hello, but they too ignored him. He walked past the old shops near his house. They hadn’t changed. There were still the same people there, all of whom ignored him.
         He was so angry and so disappointed now that he began to shout as he walked along the streets. ‘I am the great Fausto Ruiz!!! The greatest singer the world has ever heard!!!’ Nobody took any notice of him. He continued, ‘Don’t you know me??? Don’t you recognise me???’ Nobody took any notice.
         When he finally reached his old house he at least had a pleasant surprise. Outside the house, there was a statue, and it was a statue of himself. ‘Finally!’ thought Fausto. ‘Somebody has recognised my genius! They put up a statue of me ... and they never even told me!’
         Fausto went to have a closer look at the statue. There was some writing at the bottom of the statue. ‘Fausto Ruiz,’ it said, ‘Singer’. Fausto was disappointed that it said only ‘singer’ and not ‘the greatest singer in the world’, but at least it was a statue. There was some more writing. He looked carefully at it. There was his date of birth, fifty years ago. And then there was something else. It was the date of his death. And the date was yesterday.
         Chris Rose
      </p>
      <nav class="blog-nav nav nav-justified my-5">
         <a class="nav-link-prev nav-item nav-link rounded-left" href="4.php">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
         <a class="nav-link-next nav-item nav-link rounded-right" href="6.php">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
      </nav>
      <script src="assets/plugins/jquery-3.3.1.min.js"></script>
      <script src="assets/plugins/popper.min.js"></script> 
      <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
      <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.14.2/highlight.min.js"></script>
      <script src="assets/js/blog.js"></script>
      <script src="assets/js/demo/style-switcher.js"></script>     
   </body>
</html>