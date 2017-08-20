<?php 
    include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Library</title>

  <style>
    * {margin: 0; padding: 0;}

      .all {
        margin: 20px;
      }

      .list {
        list-style-type: none;
        width: 500px;
      }

      h3 {
        font: bold 20px/1.5 Helvetica, Verdana, sans-serif;
      }

      li img {
        float: left;
        margin: 0 15px 0 0;
      }

      li p {
        font: 200 12px/1.5 Georgia, Times New Roman, serif;
      }

      li {
        padding: 10px;
        overflow: auto;
      }

      li:hover {
        background: #eee;
        cursor: pointer;
      }
      input[type=text] {
          width: 50%;
          box-sizing: border-box;
          border: 2px solid #ccc;
          border-radius: 4px;
          font-size: 16px;
          background-color: white;
          background-image: url('searchicon.png');
          background-position: 10px 10px; 
          background-repeat: no-repeat;
          padding: 12px 20px 12px 40px;
          -webkit-transition: width 0.4s ease-in-out;
          transition: width 0.4s ease-in-out;
      }

      input[type=text]:focus {
          width: 55%;
      }
      .imas{
          height:42px;
          width:42px;
      }
      .inputss{
          opacity: 1;
          text-align: center; 
          margin-top: 12%;
      }
  </style>
</head>
<body>  
  <form class="">
     <input class="inputss" type="text" name="search" placeholder="Search..">
  </form>

  <div class="all">
    <ul class="list">
      <li>
        <img class="imas" src="images/library/gitbash.png">
        <h3>Git Tutorials</h3>
          <p><a href="https://backlogtool.com/git-guide/en/stepup/stepup1_1.html" target="_blank">Git's beginner guide for dummies</a></p>
          <p><a href="https://www.udacity.com/course/how-to-use-git-and-github--ud775" target="_blank">Udacity's free course on How to use git and github</a></p>
          <p><a href="https://git-scm.com/docs/gittutorial" target="_blank">Git's own tutorial/documentation</a></p>
          <p><a href="http://gitimmersion.com/" target="_blank"></a>Git Immersion</p>
          <p><a href="http://www-cs-students.stanford.edu/~blynn/gitmagic/" target="_blank">Git magic : Online book that takes you from beginner to pro.</a></p>
          <p><a href="https://www.webdesignerdepot.com/2009/03/intro-to-git-for-web-designers/" target="_blank"></a>Intro to git for web designers</p>
          <p><a href="" target="_blank">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a></p>
          <p><a href="" target="_blank">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a></p>
          <p><a href="" target="_blank">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a></p>
      </li>
        
      <li>
        <img class="imas" src="images/library/github.png">
        <h3>Github Tutorials</h3>
          <p><a href="http://opensourcerer.diy.org/" target="_blank">Open Sourcerer : Takes you from your first repo to your first pull request</a></p>
          <p><a href="https://help.github.com/">Github's own tutorial</a></p>
          <p><a href="" target="_blank">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
          <p><a href="" target="_blank">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
          <p><a href="" target="_blank">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
          <p><a href="" target="_blank">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
          <p><a href="" target="_blank">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
          <p><a href="" target="_blank">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
          <p><a href="" target="_blank">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
      </li>

      <li>
        <img class="imas" src="images/library/mysq.png">
        <h3>mysql Tutorials</h3>
          <p><a href="" target="_blank">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a></p>
          <p><a href="" target="_blank">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
          <p><a href="" target="_blank">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
          <p><a href="" target="_blank">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
          <p><a href="" target="_blank">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
          <p><a href="" target="_blank">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
          <p><a href="" target="_blank">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
      </li>

      <li>
        <img class="imas" src="images/library/gitbash.png">
        <h3>PHP Tutorials</h3>
          <p><a href="https://www.w3schools.com/php/default.asp" target="_blank">W3Schools PHP Tutorial</a></p>
          <p><a href="http://php.net/manual/en/index.php" target="_blank">PHP Documention in a simple manual format</a></p>
          <p><a href="http://php.net/manual/en/tutorial.php" target="_blank">A simple PHP tutorial</a></p>
          <p><a href="" target="_blank">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
          <p><a href="" target="_blank">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
          <p><a href="" target="_blank">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
          <p><a href="" target="_blank">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
      </li>

      
      
    </ul>
  </div>

</body>
</html>