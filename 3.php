<?php 
   $con= mysqli_connect('localhost', 'root', '', 'anshuman');
   
   session_start();
   
   if(!isset($_SESSION['email'])){
   	header('location:login.php');
   }
   
   if(!isset($_COOKIE['page3'])) {
       setCookie('page3', 'yes', time()+(60*3));
       mysqli_query ($con, "update third_page_count set count = count+1");
   }
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Mr. Smith</title>
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
                  
                  $sql = "SELECT count from Third_page_count";
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
         <h2 class="title mb-2">Mr. Smith</h2>
         <div class="meta mb-3"><span class="date">Published 3 months ago</span><span class="time">5 min read</span></div>
      </header>
      <div class="blog-post-body">
      <figure class="blog-banner">
         <a href="https://made4dev.com"><img class="img-fluid" src="blog_images/3.jpg" alt="image"></a>
      </figure>
      <p>'Well, Mr Smith, if you prefer a different type of nose, we have a large selection available.'
         'I think this nose is a bit too small.'
         'Small noses are very fashionable this year, Mr Smith, very fashionable.'
         'Do you think it suits me?' asked Mr Smith.
         'I think it looks very nice,' said the shop assistant.
         'OK, I'll take it!'
         On the airbus home, Mr Smith called his wife on his wristphone.
         'Hello dear! Do you like my new nose?'
         Mrs Smith looked at her husband's new nose on the videophone monitor on the wall in the kitchen. 'I think it's a bit too small, dear,' she said.
         'Small noses are very fashionable this year,' replied Mr Smith, 'very fashionable.' It's all so easy now, thought Mr Smith. A hundred years ago, it was impossible to change your body. Or almost impossible – there was the old-fashioned 'plastic surgery', but it was expensive, painful and dangerous. Ugh! Now, thanks to our 22nd-century genetic engineering, we can change our bodies when we want!
         He looked at his new small nose in the mirror and thought about how fashionable he was. He was very happy with his new nose. The only problem now, he thought, was that he needed some new hair to go with his new nose.
         He looked on the internet for some new hair, but the internet was so slow. Eventually he decided to go to Bodyco in person.
         'Good morning, Mr Smith,' said the Bodyco shop assistant. 'How can I help you today?'
         Mr Smith remembered the robot shop assistant in the Bodyco shop a few years ago. The robot was friendlier and more efficient, but too many robots made too much unemployment and the robot was replaced by a human.
         'I'd like some new hair, please.'
         'Certainly, Mr Smith. What type of hair would you like? Short, blond hair goes well with a small nose. How about short, blond hair?'
         Mr Smith looked at his hair. It was old and grey. Yes, he thought, short and blond. When he was young he had short, blond hair. He wanted to look young again.
         'Yes, I'll have short blond hair, please. Could it be a bit curly as well?'
         'Curly?' asked the shop assistant.
         'Yes, you know, curly – not straight!'
         'Yes, Mr Smith, I know what "curly" means, but curly hair isn't very fashionable this year.'
         'Isn't it?'
         'No, it isn't.'
         'But I like curly hair!'
         'Very well, Mr Smith – short, blond, curly hair. Would you like anything else? We have a special offer on ears this week.'
         'Ears?'
         'Yes, Mr Smith. The things you hear with.'
         'I know what ears are! What type of ears are on offer?'
         Mr Smith went out of the shop with new short, blond, curly hair and two new ears.
         After this, his interest in his new body started to grow. In the next few weeks he bought new eyes (green – unusual, but fashionable), new hands, new arms, new knees and new feet. Mrs Smith was happy because Mr Smith's new feet didn't smell as bad as his old feet.
         His body was now completely different.
         'Am I the same man I was a few weeks ago?' thought Mr Smith. 'I have a new nose, new hair, new ears, new eyes, hands, arms, knees and feet. But I have the same brain – so I think I'm the same man.' He thought he was the same man but he wasn’t sure.
         One morning, he woke up and his new nose didn't work.
         'What’s the matter?' asked Mrs Smith.
         'My new nose doesn't work – it's blocked.'
         'Maybe you've got a cold,' suggested Mrs Smith.
         'That’s impossible! This is a genetically engineered Bodyco nose! It doesn't get colds!'
         But it was true – the new nose did not work. It was blocked and Mr Smith couldn't smell anything.
         He went back to the Bodyco shop.
         'Good morning, Mr Smith,' said the assistant. 'What would you like today?'
         'I want a new nose,' said Mr Smith.
         'You already want a new nose?' said the surprised shop assistant. 'But you’ve only had this one for a month! Don't worry, small noses are still fashionable!'
         'No, you don't understand,' said Mr Smith. 'I want a new nose because this one doesn't work!'
         'That's impossible,' said the shop assistant. 'You have a genetically engineered Bodyco nose. It can't go wrong!'
         'But it has gone wrong,' replied Mr Smith. 'It's blocked and I can't smell anything.'
         'What have you used your nose to do, Mr Smith?' asked the shop assistant.
         'What have I done with my nose? That's a stupid question! I haven't done anything unusual with my nose. I've used it to breathe and to smell, as usual!'
         'If you have not used your nose correctly, Mr Smith, it is possible that it will not work correctly.'
         'That's absurd!' shouted Mr Smith. 'I want my money back! I want a refund!'
         'I'm afraid that we do not give refunds, Mr Smith. There was no guarantee with this nose.'
         Mr Smith was so angry that he didn't know what to say. He walked out of the shop and didn't say anything.
         But now he had a big problem: a useless nose. Fashionable, yes. Useful, no.
         Unfortunately, his problems started to grow. The next morning he woke up and found he couldn't hear anything. Then his new blond hair went grey. Then his new knees didn't move. Then he couldn't see a thing with his unusual green eyes. His fingers fell off, one by one.
         Eventually, Mrs Smith put him in their aircar and flew to the Bodyco shop. She carried her husband into the shop, because now he couldn't walk.
         'Good morning, Mr Smith,' said the shop assistant. 'What can I do for you today?'
         'Mr Smith wouldn’t like anything new at all today, thank you,' replied Mrs Smith. 'But he would like his old body back!'
         'I'm afraid we don't give refunds, Mrs Smith.'
         'I don't want a refund,' explained Mrs Smith. 'I want my husband's original body again! I liked it more than this new one!'
         'I'm afraid that's very difficult, Mrs Smith,' said the shop assistant. 'We are an environmentally friendly company. All our old bodies are recycled.'
         'But the new body parts that you sold him don't work! What can he do now?'
         'He could buy a reconditioned body.'
         'What's a "reconditioned" body?'
         'It's an old body that has been modified.'
         'Can I have a look at one?'
         'Certainly.' The shop assistant spoke to his computer and a reconditioned body appeared. It was a very familiar body. Mrs Smith recognised the big nose and the grey hair.
         'But that's my husband!' shouted Mrs Smith. 'That's the original Mr Smith!'
         'Yes, that's right,' said the shop assistant. 'We reconditioned Mr Smith's old body.'
         'Can he have his old body back then, please?'
         'Certainly, Mrs Smith. That'll be 100,000 euros, please.'
         '100,000 euros!' shouted Mrs Smith. 'That's very expensive, isn't it?'
         'Mr Smith has been reconditioned!'
         Mr Smith got his own body back, and Mrs Smith flew him back home in the aircar.
         'I'm myself again!' he shouted.
         'Not exactly,' said Mrs Smith. 'You have been reconditioned.'
         'What does "reconditioned" mean?'
         'Well,' said Mrs Smith, 'I think it means that you have a new brain!'
         'I think that will be very useful,' said Mr Smith.
         'I think so too, dear,' said Mrs Smith.
         Chris Rose
      </p>
      <nav class="blog-nav nav nav-justified my-5">
         <a class="nav-link-prev nav-item nav-link rounded-left" href="2.php">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
         <a class="nav-link-next nav-item nav-link rounded-right" href="4.php">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
      </nav>
      <script src="assets/plugins/jquery-3.3.1.min.js"></script>
      <script src="assets/plugins/popper.min.js"></script> 
      <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
      <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.14.2/highlight.min.js"></script>
      <script src="assets/js/blog.js"></script>
      <script src="assets/js/demo/style-switcher.js"></script>     
   </body>
</html>