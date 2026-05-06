<!DOCTYPE html>
<html lang="en-US">
<!-- 
Name: Nazifa Ahmed
Date: 5/1/2026
Course: Web Design and Development 
Description: Home page  
-->
<head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home Page</title>
  
    <!-- Custom font from Google Fonts applied here --> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Link to external CSS for styling-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png">
   
<style> body {background-color: #91a3b0;} 
        nav {background-color:#91a3b0;}
body {text-align: center;
    align-items: center;}
div {background-color: #003153;
    text-align: center;
    align-items: center; }  
h1{color: white;
    font-size: 38px;
    font-family:"Sansita Swashed", system-ui; }
h2{color: white;
    font-size: 25px;
    font-family:"Sansita Swashed", system-ui; }
p{color: white; 
    font-size: 20px;
    font-family: Inter;
    text-indent: 40px;}
.firsth::first-letter {font-size: 160%; color:#ba9af8; text-indent:0; }
blockquote{color: black; 
        font-size: 18px;  
        font-family: Work sans-serif}
footer p{color: black;
        font-size: 13px;
        font-family: Work sans-serif;}

</style> 
</head>

<body> 

    <?php include "header.php";?> 

<section id="hero1">
    <div class="container">
        <div class="info">
    <h1> Nazifa Ahmed Portfolio </h1>
    <h2> Welcome to my portfolio on the UX Design case studies that I have worked on </h2>
    <p class="firsth"> The purpose of this portfolio is to demonstrate the skills that I have built in my courses. My graduate program have given me the opportunities to practice and use the skills that I was taught. My goal at the end of this program is to be able to work in the UX Design field. My background is in education where I have worked with younger students. I hope to use my experience in education to help me understand users and the problems that they may face. One of the most important parts of UX Design is viewing problems and solutions from the users’ point of view. When I worked with younger students I had to try to understand their perspective and create content that applies to them specifically. 
    </p>
    
    <br> 
    <div class="table-wrapper">
    <table>
        <caption>Goals for a UX Design career</caption>
        <thead>
        <tr>
            <th>Goals</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>Set specific design objectives</td>
        </tr>
        <tr>
            <td>Criteria should be measurable</td>
        </tr>
        <tr>
            <td>Attainable objectives</td>
        </tr>
        <tr>
            <td>Relevant projects</td>
        </tr>
        <tr>
            <td>Set time frames for accomplishments</td>
        </tr>
        </tbody>
    </table>
    </div>

    <a href="contact.html">Contact Me</a>
        </div>
    </div> 
<br>
<br>
<blockquote> "Your old site is the best prototype of your new site" - Hoa Loranger </blockquote>
<br>  

    <?php include "footer.php";?> 

</section>
</body>

</html>