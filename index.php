<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <!--Link to css-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--Menu section starts here-->
   <nav class="navbar">
       <div class="wrapper">
           <div class="logo">Daniel Mwithui</div>
           <div class="menu text-right">
               <ul>
                   <li><a href="#about">About</a></li>
                   <li><a href="#projects">Projects</a></li>
                   <li><a href="#skills">Skills</a></li>
                   <li><a href="#about">About</a></li>

               </ul>
           </div>
           <div class="clearfix"></div>
       </div>
    </nav>
      <!--Menu section Ends here-->

    
    <!--Navbar section starts here-->
    <div class="about" id="about">
        <div class="wrapper"> 
           <div class="col-2">
                  <img src="images/Temp-700x700.jpg"  class="img-responsive" alt="Daniel profile image">
           </div>

           <div class="col-2">
                    <h1 class="about-title">Hi,I'm Daniel Mwithui</h1>

                           <p class="about-subtitle">Software Development, Web Development and Network engineering</p>
                              <p class="about-description">
                                   Affronting everything discretion men now own did. 
                                 Still round match we to. Frankness pronounce daughters remainder extensive has but.
     
                                </p>

          <a href="#" class="btn">Explore My Projects</a>

</div>
           <div class="clearfix"></div>
        </div>
       
    </div>
      <!--Navbar section Ends here-->

      <!--Projects section starts here-->
    <div class="projects" id="projects">
        <div class="wrapper">
           <h2 class="text-center">Projects</h2>
           <a href="#">
           <div class="col-4 project-box">
               <img src="images/webdesign.jpg" alt="Web design" class="img-responsive">
              <div class="project-title">
                  Web Design 
              </div>
           </div>
        </a>
<a href="#">
           <div class="col-4 project-box ">
            <img src="images/engineer.jpg" alt="Web design" class="img-responsive">
            <div class="project-title">
                Network Engineer
            </div>
        </div>
    </a>
<a href="#">
        <div class="col-4 project-box">
            <img src="images/logo.jpg" alt="Web design" class="img-responsive">
              <div class="project-title">
                  Logo Design
              </div>
        </div>
    </a>
<a href="#">
        <div class="col-4 project-box">
            <img src="images/graphic.jpg" alt="Web design" class="img-responsive">
              <div class="project-title">
                  Graphic Content Creation
              </div>
        </div>
    </a>
        <div class="clearfix"></div>
        </div>
    
    
    </div>
      <!--Projects section Ends here-->
    
      <!--Skills section starts here-->
    <div class="skills" id="skills">
        <div class="wrapper">
            <h2 class="text-center mb-5" >Skills</h2>
         <div class="skill-box">
             <span class="skill-title">HTML</span>
             <div class="skill-meter">
<div style="background-color: aqua; padding: 2%; width: 80%;"></div>
             </div>
             <div class="clearfix"></div>
         </div>

         <div class="skill-box">
            <span class="skill-title">JS</span>
            <div class="skill-meter">
<div style="background-color: aqua; padding: 2%; width: 40%;"></div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="skill-box">
            <span class="skill-title">CSS</span>
            <div class="skill-meter">
<div style="background-color: aqua; padding: 2%; width: 50%;"></div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="skill-box">
            <span class="skill-title">PHP</span>
            <div class="skill-meter">
<div style="background-color: aqua; padding: 2%; width: 70%;"></div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="skill-box">
            <span class="skill-title">DATABASE</span>
            <div class="skill-meter">
<div style="background-color: aqua; padding: 2%; width: 85%;"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        </div>
    
    </div>
      <!--Skills section Ends here-->


        <!--Blog section starts here-->
    <div class="blog" id="blog">
        <div class="wrapper">
            <h2 class="text-center">Blogs</h2>
            <a href="">
            <div class="col-3">
                <img src="images/engineer.jpg" class="img-responsive"  alt="">
                <h3 class="blog-title">Freelancing for developers</h3>
            </div>
        </a>

            <a href="#">
            <div class="col-3">
                <img src="images/engineer.jpg" class="img-responsive"  alt="">
       <h3 class="blog-title">Passive Income for Developers</h3>
      
            </div>
        </a>
            <div class="col-3">
                <img src="images/engineer.jpg" class="img-responsive"  alt="">

      <h3 class="blog-title">Side Hustle for Developers</h3>
            </div>
            <div class="clearfix"></div>
        </div>
      
    </div>
      <!--Blog section Ends here-->

     
 <!--Blog section starts here-->
 <div class="blog" id="blog">
    <div class="wrapper">
        <h2 class="text-center">Get In Touch</h2>

        <div class="form">
            <h4 class="sent-notification"></h4>
        <form  action="mail.php" method="post" id="myform">
                <input type="text" id="name" placeholder="Your Name" required>
                <input type="text" id="email" placeholder="Email Id" required>
                <input type="text" id="phone" placeholder="Phone Number" required>
                <textarea  id="message"  rows="4" placeholder="How can I help you?"></textarea>
                <button type="button" onclick="sendEmail()" value="Send an email"   class="btn">Send</button>
            </form>
            </div>
        </div>
      
    </div>
  
  <!--Blog section Ends here-->

        <!--Footer section starts here-->
    <footer>
    <div class="wrapper">
 <div class="col-2">
<a href="" class="btn">Download My Resume</a>
 </div>
 <div class="col-2 text-right">
<ul>
    <li><a href="#">Github</a></li>
    <li><a href="#">LinkedIn</a></li>
    <li><a href="#">Dev.To</a></li>
    <li><a href="#">Medium.com</a></li>
</ul>
 </div>
    </div>
    </footer>
      <!--Footer section Ends here-->
      <script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
      <script type="text/javascript">
          function sendEmail(){
              var name=$("#name");
              var email=$("#email");
              var phone=$("#phone");
              var message=$("#message");

              if(isNotEmpty(name)  && isNotEmpty(email)   && isNotEmpty(phone)  && isNotEmpty(message)){
                  $.ajax({
                      url:'mail.php',
                      method: 'POST',
                      dataType: 'json',
                      data:{
                          name: name.val(),
                          email: email.value(),
                          phone: phone.value(),
                          message: message.value()
                      },success:function(response){
                          $('#myform')[0].reset();
                          $('.sent-notification').text("Message sent successfullly")
                      }  
                    });
              }
          }
function isNotEmpty(caller){
    if(caller.val==""){
        caller.css('boder','1px solidred');
        return false;
    }
    else
    {
        caller.css('border','');
        return true;
    }
}
      </script>
</body>
</html>