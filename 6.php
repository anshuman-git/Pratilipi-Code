<?php 
   $con= mysqli_connect('localhost', 'root', '', 'anshuman');
   
   session_start();
   
   if(!isset($_SESSION['email'])){
   	header('location:login.php');
   }
   
   if(!isset($_COOKIE['page6'])) {
       setCookie('page6', 'yes', time()+(60*3));
       mysqli_query ($con, "update sixth_page_count set count = count+1");
   }
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>The Dinosaur in Jake's Garage</title>
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
                     <a class="nav-link" href="index.php"><i class="fas fa-home fa-fw mr-2"></i>Home <span class="sr-only">(current)</span></a>
                  </li>
               </ul>
               <div class="my-2 my-md-3">
                  <a class="btn btn-primary" href="logout.php">Log Out Session</a>
               </div>
               <?php
                  $con= mysqli_connect('localhost', 'root', '', 'anshuman');
                  
                  $sql = "SELECT count from sixth_page_count";
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
         <h2 class="title mb-2">The Dinosaur in Jake's Garage</h2>
         <div class="meta mb-3"><span class="date">Published 3 months ago</span><span class="time">5 min read</span></div>
      </header>
      <div class="blog-post-body">
      <figure class="blog-banner">
         <img class="img-fluid" src="blog_images/6.jpg" alt="image">
      </figure>
      <p>“Dad” he said, “There’s a dinosaur living in the garage.”
         “Is there really, Jake?” said his dad. “That’s interesting. Now go away and play. Daddy’s busy at the moment.” Jake’s dad went back to reading his newspaper.
         Jake had suspected that there was a dinosaur in the garage for some time. A few weeks ago, behind the old bicycle he used to ride when he was small, the big bag with the tent in it that they had only used once on a camping holiday before his dad had said “Forget this! I’m never going camping again! Next year we’re staying in a hotel like ordinary people!”, a punctured football and a big brown cardboard box containing pieces of a wardrobe which they had bought from a big furniture store and which his dad had never been able to put together, Jake had found an enormous egg. At first, Jake thought that it was perhaps another punctured football, one that had gone a strange shape because it hadn’t been used for so long, but he didn’t recognise it, and when he went to touch it, the thing was all hard, not like a football at all, punctured or not. It felt more like a kind of egg, but it was all slippy and shiny, and he couldn’t see a hole in it anywhere. No, Jake – being a clever boy – immediately realised that it wasn’t a football at all. It was an egg. He didn’t tell anyone at the time, partly because he thought that his mum and dad would think that he was lying again (his mum and dad always thought that he was lying. “Telling tales” they called it. “Jake’s been telling tales again” they always sighed. “He always does it! He’s such a clever boy. He has such a great imagination...but...one day his imagination is going to get him into trouble!!!”), and also because he didn’t want anyone else to know about what he had found. Because Jake already knew that he had found a dinosaur egg. Right there. Right in his garage!
         They had been studying dinosaurs at school. Their teacher had told them all about dinosaurs, and how dinosaurs came out of eggs, like birds or lizards do today, but that a dinosaur egg was as big as a football, or even bigger.
         The next day he decided to tell his teacher. “I’ve got a dinosaur living in my garage!” Jake said proudly to his teacher. But the teacher didn’t listen to him. He only pushed his glasses up his big nose and said, “Is that right Jake? How interesting...”
         For the next few days Jake decided not to tell anyone about his dinosaur, but kept his secret to himself. He started to feed the dinosaur at first by giving it some milk. Then he gave it some of their dog’s food. The dog barked at Jake angrily when Jake took his food away from him.
         “Don’t worry!” Jake said to the dog. “It’s just for the dinosaur in the garage. He’s getting bigger every day! Soon you’ll be able to play with him!” The dog didn’t look convinced.
         But it was true. The dinosaur was growing and growing. It was already as big as the dog. Jake couldn’t contain his excitement, and the next day he told his teacher again, as his father still wasn’t interested in the dinosaur.
         “The dinosaur in my garage is getting bigger every day!” shouted Jake in the middle of the lesson. The teacher turned round and looked at Jake with a serious expression.
         “Well Jake, if there really is a dinosaur living in your garage, why don’t you take it out for a walk? Why don’t you bring it into school tomorrow for us all to have look at???!!!” The teacher laughed. He was feeling very pleased with himself. He pushed his glasses back up his big nose, and looked at the rest of the class. “Don’t you think Jake should bring his pet dinosaur in for everyone to see tomorrow?” he laughed, and all of the rest of the class laughed too.
         The next day, Jake brought the dinosaur into school. It wasn’t easy, because the dinosaur hadn’t been out of his garage before, and moreover, it was now really rather big, but Jake very carefully took the lead they had for their dog, put it around the dinosaur’s neck and pulled him out of the garage. Once out of the garage, however, the dinosaur sat down and refused to move any further. Jake pulled and pulled but it was no good, he couldn’t move the dinosaur.
         At first the dinosaur didn’t want to move. Jake put some meat from the fridge on the floor for the dinosaur to eat. Now the dinosaur followed him out of the house, along the street and to the bus stop. Quite a few people seemed surprised, and some of them were even scared when Jake got on the bus with his dinosaur, but the dinosaur seemed quite happy. At one point there was a difficult moment when the dinosaur put his nose into an old lady’s shopping bag and stole a chicken out of it. The old lady screamed, and the ticket inspector came.
         “Oi!” said the ticket inspector. “Has that thing got a ticket?” Jake showed the ticket inspector the bus ticket which he had bought for the dinosaur, and then the ticket inspector went away, but the old lady was still very unhappy, so Jake had to apologise for the chicken his dinosaur had stolen, and then got off the bus at the next stop. He had to walk all the rest of the way to his school, and when he got there he was late.
         Everyone screamed when he walked into his classroom. Jake couldn’t understand why. His teacher was staring at him in horror. Actually, no, his teacher wasn’t staring at Jake in horror, he was staring at the dinosaur in horror. Jake couldn’t understand what the problem was.“But, sir” he said to his teacher, “You told me to bring the dinosaur to school!!!”
         Less than one hour later Jake was sitting on his own in the school, only Jake and his dinosaur. There was a lot of noise outside. There was lots and lots of noise outside. Jake could hear the sirens of police cars, people shouting, and the sound of helicopters flying overhead. He looked out of the window of his classroom and waved at all the men with television cameras filming him and his dinosaur.
         His teacher had shouted “Out!! OUT!!! Everybody out!!!” when Jake had come in with his dinosaur, and sure enough, the teacher and all the other children had run out of the classroom, leaving Jake on his own with his dinosaur. Jake couldn’t understand why everybody was so afraid of his dinosaur. He thought his dinosaur was pretty friendly.
         “Jake!” shouted one of the police officers outside, “Can you hear me? Let us know if you’re ok!” Jake smiled and waved at the police officers.
         “I’m fine!” he shouted. The dinosaur sat in the classroom and started to eat some of the children’s schoolbooks. Jake could see that it was getting bored. He took the dog’s lead and put it on the dinosaur again, and took the dinosaur out of the classroom into the schoolyard, where all the people were.
         As soon as they went outside, there were screams and cries and the flashes from hundreds of cameras. A policeman grabbed Jake and a huge net fell down on the dinosaur. A group of scientists grabbed the dinosaur in the net, put him in a big truck and drove off.
         “Wait!” shouted Jake. “Where are they going with my dinosaur?”
         “They’re taking him to the zoo” said a policeman. “He’ll be safe there.”
         Jake felt pretty sad when he got home. He didn’t even care that he was on the television news, and his picture was on the front page of newspapers all across the world. He missed his dinosaur. When everyone had gone to bed that night, he went out to the garage again, and found another egg...
         THE END
      </p>
      <nav class="blog-nav nav nav-justified my-5">
         <a class="nav-link-prev nav-item nav-link rounded-left" href="5.php">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
         <a class="nav-link-next nav-item nav-link rounded-right" href="index.php">Home<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
      </nav>
      <script src="assets/plugins/jquery-3.3.1.min.js"></script>
      <script src="assets/plugins/popper.min.js"></script> 
      <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
      <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.14.2/highlight.min.js"></script>
      <script src="assets/js/blog.js"></script>
      <script src="assets/js/demo/style-switcher.js"></script>     
   </body>
</html>