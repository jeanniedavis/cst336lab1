<!DOCTYPE html>
<html>
<!--

First Website
and comment
in html
(comments can span multiple lines)

-->

<!-- This is the head -->
<!-- All styles and javascript go inside the head -->
    <head>
    <meta charset ="utf-8" />
    <link href ="css/default.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <title>Jeannie Davis: Personal Website</title>
    </head>
<!-- closing head -->
    <style>
        body {
            text-align: center;
        }
    </style>
    <!-- This is the body -->
    <!-- This is where we place the content of our website -->
    <body>
        <header>
            <h1>Jeannie Davis</h1>
        </header>
        <hr class="header"/>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php" class="highlighted">About</a>
            <a href="contact.php">Contact</a>
        </nav>
        <br/>
        <main>
            <figure>
                <img src="img/Jeannie-Davis.jpg" alt="Picture of Jeannie Davis"/>
            </figure>
            <div>
                <p class="bio">
                   My name is Jeannie Davis, I’m inspiring software developer, dog mom, gamer, and a foodie. I live and breathe all things digital, and I have an eye for design and detail.
                </p>
            </div>
            
     
            <table>
                <tr id="table-header">
                    <td><strong>Programming Language</strong></td>
                    <td><strong>Years of Experience</strong></td>
                </tr>
                <tr class ="table-row1">
                    <td>Java</td>
                    <td>4</td>
                </tr>
                <tr class ="table-row2">
                    <td>C++</td>
                    <td>4</td>
                </tr>
            </table>
            <p class="funfacts"style="font-size: 20px; font-weight:bolder;"> Fun Facts about Me</p>
            <ul class="facts">
                <li> I'm an avid gamer, my favorite games being League of Legends and The Legend of Zelda </li>
                <li> I have 3 dogs, so my morning walks with them are quite chaotic at times!</li>
                <li>I enjoy cooking and trying new recipes</li>
            </ul>
         </main>
     </body>
        <!-- This is the footer -->
        <!-- The footer goes inside the body but not always -->
        <footer>
            <hr class="footer">
            CST 336 Internet Programming. 2020&copy; Davis<br/>
            <img src="img/csumblogo.png" alt="csumblogo"/>

        </footer>
        <!-- closing footer -->
        
   
    <!-- closing body -->
