<?php 
   $con= mysqli_connect('localhost', 'root', '', 'anshuman');
   
   session_start();
   
   if(!isset($_SESSION['email'])){
   	header('location:login.php');
   }
   
   if(!isset($_COOKIE['page2'])) {
       setCookie('page2', 'yes', time()+(60*3));
       mysqli_query ($con, "update second_page_count set count = count+1");
   }
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>King of Pumpkins</title>
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
                  
                  $sql = "SELECT count from second_page_count";
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
         <h2 class="title mb-2">King of Pumpkins</h2>
         <div class="meta mb-3"><span class="date">Published 3 months ago</span><span class="time">5 min read</span></div>
      </header>
      <div class="blog-post-body">
      <figure class="blog-banner">
         <img class="img-fluid" src="blog_images/2.jpg" alt="image">
      </figure>
      <p>'Deep in the middle of the woods,' said my mother, 'is the place where the king of the pumpkins lives.'
         'But pumpkins live in fields, not in forests,' I said to my mother.
         She wouldn't listen to me. 'I'm telling you,' she said, 'the king of the pumpkins lives in the middle of the woods and the woods that he lives in are the woods right next to our house, the woods you can see out of the window over there.' She pointed with her hand to the woods that were, in fact, just outside the window behind our house. 'He doesn't live in a field like the other pumpkins,' continued mother, 'because he's not an ordinary pumpkin. He's the King Pumpkin.'
         I shut up and decided to believe her, like you do when you're a kid. Firstly, I knew that it wasn't worth arguing with my mother. She always won. Secondly, when you're a kid, you always believe what grown-ups tell you, no matter how stupid it is. Like Santa Claus and stuff like that. Kids always believe it, even though they know it's stupid.
         Still, I decided to go and find the king of the pumpkins, partly because I was bored, partly because I was curious, and also – of course – because I wanted to know if my mother really was talking nonsense or not.
         Mother often talked nonsense, I have to say that. There was the time she told me that the moon was made of cheese. I knew that was nonsense. Then there were all the stories she told me. Stories about frogs, princesses, princes and shoes. Stories about donkeys and unicorns, gnomes and elves, magic mirrors and magic cooking pots. Stories about why the stars are exactly the way they are, why the river that runs through our town has the name that it has, stories about where the sun comes from, why the sky is so far away and why the elephant has a long trunk.
         Some of these stories, I think, might have been true. I was never sure, and it was difficult to find out. This time, though, with this story about the king of the pumpkins, it was going to be easy to find out if she was telling the truth or not.
         Some people used to call my mother a witch, but I knew that she wasn't a witch. Just a bit strange perhaps. And she used to talk nonsense. Perhaps it was also because of the black cat we had. People say that witches always have black cats, and we had a black cat. But Mog wasn't a witch's cat. He was just a regular black cat. Mog could talk, though, I have to say that. Perhaps that isn't so regular in a cat, now I think about it.
         Anyway, I was telling you about the time I went to find the king of the pumpkins. I set off with Mog the cat into the woods to look for the king of the pumpkins. Even though we'd lived in that house near the woods all my life, I had never gone into the middle of the woods. This was the first time. I was glad I had Mog with me. I was a bit scared, even though I didn't really think that the king of the pumpkins lived there.
         'Watch out for the wolves!' said Mog.
         'Yes … and the grandmothers too!' I joked.
         'Let's not leave the path!' said Mog.
         When people said my mother was a witch, I told them that witches don't have children. 'Yeah,' they replied, 'that's true. But you look more like an elf than a regular kid.' I looked in the mirror to see if I looked like an elf or not. I think I looked like a regular kid, but you never can tell really.
         'Do you think he's real?' I asked Mog.
         'Who, the wolf? He certainly is,' replied Mog.
         'No, not the wolf. I know the wolf is real,' I said to Mog. Sometimes I could hear the wolf howling at night. I knew he was real. 'No, not the wolf. The king of the pumpkins. Do you think he's real?'
         'Don't know,' said the cat. 'Guess we'll just have to find out.'
         We walked on into the forest. The trees got taller and taller and taller. The path got narrower and narrower and narrower.
         'What does he do, then, this king of the pumpkins?' asked Mog.
         'I don't know really,' I said. 'I guess he just kind of is head pumpkin, boss pumpkin. He decides on pumpkin rules and pumpkin laws, and punishes people who break them.'
         'Oh, I see,' said Mog. He was quiet for a bit, then said, 'What kind of things are pumpkin rules then?'
         'Erm, how big you can grow. What colour you have to be. Stuff like that.'
         'You're making this up, aren't you?' asked Mog.
         'Yeah,' I said.
         Eventually, we got to the middle of the forest. At least, I think it was the middle of the forest, but it's difficult to say exactly. There was a clearing, a big space where there were no trees. In the middle of the clearing was the king of the pumpkins.
         At least, I think it was the king of the pumpkins. It looked like a man at first. He was quite tall and had legs and arms made from sticks. He was wearing an old black coat. His head was a pumpkin. His head was the biggest pumpkin I had ever seen.
         Me and Mog went up close to him. He didn't say anything.
         'Is that it?' asked Mog.
         'I guess so,' I said.
         'Disappointing,' said Mog.
         'Do you think he's the real king of the pumpkins?' I asked Mog.
         'Who knows?' replied the cat.
         As we walked back along the path out of the forest, I started to think about what was real and what was not. Could things that were made up also be true? What was the difference between 'story' and 'history'? One is real and the other isn't – is that it?
         'What about all those other things that Mother talks about? Do you think they're real?' I asked Mog.
         'Hmm … I'm not sure,' said Mog. 'Those stories she tells sometimes … about why the night is black and the day is blue, about golden eggs and girls with golden hair, about why people have ten fingers, ten toes, two feet, two hands and two eyes … Sometimes I think she's crazy, and sometimes I think she might be right …'
         I knew what Mog meant. I felt the same way. 'Perhaps the stories aren't true,' I said, 'but what they mean is.'
         Chris Rose
      </p>
      <nav class="blog-nav nav nav-justified my-5">
         <a class="nav-link-prev nav-item nav-link rounded-left" href="1.php">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
         <a class="nav-link-next nav-item nav-link rounded-right" href="3.php">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
      </nav>
      <script src="assets/plugins/jquery-3.3.1.min.js"></script>
      <script src="assets/plugins/popper.min.js"></script> 
      <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
      <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.14.2/highlight.min.js"></script>
      <script src="assets/js/blog.js"></script>
      <script src="assets/js/demo/style-switcher.js"></script>     
   </body>
</html>