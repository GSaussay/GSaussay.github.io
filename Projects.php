<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
  <head>
	  <meta charset="utf-8" />
	  <meta name="Author" content="Guillaume Saussay" />
	  <meta name="viewport" content="width=1024" />
	  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7, IE=9" />
    <title>Guillaume SAUSSAY's Porfolio | Projects</title>
    <!-- Prevent the browser to recompile the JavaScript and CSS between each page change -->
    <!-- Keeps the current page instance alive and replaces only the body and the title in the head -->
    <!-- Page suitable for all devices -->
    <link data-turbolinks-track="true" href="http://gsaussay.github.io/assets/GS_projects.css" media="all" rel="stylesheet" />
    <script data-turbolinks-track="true" src="http://gsaussay.github.io/assets/GS_final.js"></script>
    <script src="http://gsaussay.github.io/assets/GS_final2.js"></script>
    <meta content="authenticity_token" name="csrf-param" />
    <meta content="ntYa8AIw8RimNaNcZoArb7bxgHZD4MaHl4i3jQtLvVI=" name="csrf-token" />
    <!--Icon-->
    <link rel="icon" type="image/png" href="http://gsaussay.github.io/assets/fav.png" />
  </head>

  <body>
    <?php include("menu.php"); ?>

    <article id="projectsPresentation">
      <div id="anounce">
        <h2 style = "margin-left: 5%; margin-right: 5%"> <b>Welcome to my Projects' Page!</b> </h2>
        <h4 style = "margin-left: 8%; margin-right: 5%">
          In this part, you can find all the projects I made during my curriculum just as my personal ones.
        <br />
          You can go through all of them by selecting the main section regarding each of these.
        <br />
          Do not hesitate to contact me if you have any questions about them~~!
        <br />
        </h4>
      </div>
    </article>


    <div style="max-width:1700px; margin-left: auto; margin-right: auto">

      <aside class="promos" data-hires="true" id="sections" style="margin-left: auto; margin-right: auto">
        <a class="section1" href="pages/projects/analyses.html">
          <img style = "margin-left: 15% ; margin-top: 3%" src="assets/11.jpg" title="Data Analyses" height="200" width="335" alt="Data Analyses Projects" />
        </a>

        <a class="section2" href="pages/projects/applications.html">
          <img style = "margin-left: 15% ; margin-top: 3%" title="Applications" src="assets/tech21.jpg" height="200" width="335" alt="Application Projects" />
        </a>

        <a class="section3" href="pages/projects/papers.html">
          <img style = "margin-left: 15% ; margin-top: 3%" src="assets/t.png" width="335" height="200" title="Papers" alt="Paper Projects" />
        </a>

        <a class="section4" href="pages/projects/programs.html">
          <img style = "margin-left: 15%  ; margin-top: 3%" src="assets/tech121.jpg" width="335" height="200" title="Programming" alt="Programming Projects" />
        </a>
      </aside>

    </div>    

    <script type="text/javascript">
      var promosFooter = new AC.PromoManager('homepage-tile-four-c10e86ec-1dc7-443c-9874-612ba027591f-us', 'section4');
    </script>

  </body>
</html>
