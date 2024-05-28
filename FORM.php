<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Document</title>


</head>

<body>
    <div class="container">
        <div>
            <header class="container1"> 
                <a href="#">
                   <span><img src="BrainLogoo.png"  alt=""></span>  <h1>BrainSchool</h1>
                </a>

            </header>
        </div>
        <nav class="container2">
            <img src="mail.png" style="width: 20px; height:20px; padding-right:15px;"; alt=""><span>Name : MOHAMMED CHAIB <br></span>
            <img src="homme.png" style="width: 20px; height:20px; padding-right:15px;"; alt=""><span>E-mail : mohamechaib964@gmail.com <br></span>
            <i class="fa-solid fa-face-laugh"> </i><span>Group : 10<br></span>
            <i class="fa-solid fa-face-laugh"> </i><span>Section : 2 <br></span>

        </nav>
        <section class="container3">
            <div class="desc">
                <div style="text-align:center;">
            <span  style="margin-bottom: 200px ;" > <img src="BrainLogoo.png" style="width: 200px; height:150px;" alt=""> </span> <span style="font-size: 150px; align-items:center; ">BrainSchool</span> 
            </div>
                <h3 style="margin-top: 200px ; font-size: 60px;">Ignite Your Potential, Master In-Demand Skills</h3> 
               
                <p style="line-height: 40px; font-weight:200" >
                    BrainSchool empowers you to unlock your learning potential and transform your career aspirations into reality.
                    We offer a comprehensive range of courses designed to equip you with the knowledge and skills you need to thrive in today's dynamic world.
                    Our immersive and engaging programs, led by industry experts, will equip you with the skills and knowledge to thrive in today's dynamic world.
                </p>
                <h1> What sets BrainSchool apart?</h1>
                <ul>
                    <li>
                        <h3>Expert-Led Instruction: </h3> Learn from passionate instructors with industry experience who are dedicated to your success.
                    </li>
                    <li>
                        <h3>Engaging Curriculum:</h3> Our courses are designed to be interactive, practical, and focused on real-world application.
                    </li>
                    <li>
                        <h3>Flexible Learning Options:</h3> Choose from online, in-person, or blended learning formats to fit your schedule and learning style.
                    </li>
                    <li>
                        <h3>Career-Focused Approach: </h3> Gain the skills and certifications employers are looking for to advance your career.
                    </li>
                    <li>
                        <h3>Supportive Community: </h3> Join a vibrant community of learners who are passionate about learning and growth.
                    </li>
                </ul>

                <h1>BrainSchool is more than just a school; it's a launchpad for your future!</h1>
                <h2>Explore our course offerings in:</h2>
                <ul>
                    <li>
                        <h3>Marketing</h3>
                    </li>
                    <li>
                        <h3>Computer Science</h3>
                    </li>
                    <li>
                        <h3>Electronics (and more!)</h3>
                    </li>
                </ul>
                <h2>Start your learning journey today!</h2>
            </div>
            <div class="formation">
                <article class="marketing">

                    <img src="marketing.jpg" alt=""> <br>
                    <h2>
                        MARKETING COURSE
                    </h2><br>
                    <h3>
                        Master marketing essentials, crafting impactful <br>
                        strategies to engage audiences <br>
                        and drive business growth.
                    </h3> <br>
                    <a class="butt" href="marketing.html">SIGN UP NOW </a>
                </article>
                <article class="marketing">

                    <img src="compiterScience.jpg" alt=""> <br>
                    <h2>
                        COMPUTER SCIENCE
                    </h2><br>
                    <h3>
                        Master marketing essentials, crafting impactful <br>
                        strategies to engage audiences <br>
                        and drive business growth.
                    </h3> <br>
                    <a class="butt" href="computerSxience.html">SIGN UP NOW </a>
                </article>
                <article class="marketing">

                    <img src="header.jpeg" alt=""> <br>
                    <h2>
                        ELECTRONIC
                    </h2><br>
                    <h3>
                        Master marketing essentials, crafting impactful <br>
                        strategies to engage audiences <br>
                        and drive business growth.
                    </h3> <br>
                    <a class="butt" href="Electronic.html">SIGN UP NOW</a>
                </article>
            </div>
            <aside >
                <img class="slides" src="header.jpeg" alt="">
                <img class="slides" src="download.jfif" alt="">
                <img class="slides" src="header.jpeg" alt="">
                <img class="slides" src="download.jfif" alt=""> 
            </aside>

        </section>

        <section class="container4">
            <div class="comment-people">
                <h1>Comment of People </h1>
                <?php include "getComment.php" ?>
            </div>
            <button onclick="addCommunt()" class="form-submit-button" id="add-comment-btn">ADD COMMENT</button>

            <div id="comment-form" class="comment-form" class="hidden">
               
                <form class="form" method="post" action="setComment.php">
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="comment">Comment :</label>
                        <textarea id="comment" name="comment" required></textarea>
                    </div>


                    <input class="form-submit-button" onclick="check()" type="submit"></input>
                    <input class="form-submit-button" onclick="removeForm()" type="reset"></input>
                </form>
            </div>
        </section>

    </div>

    <script type="text/javaScript" src="main.js">
    </script>
</body>

</html>