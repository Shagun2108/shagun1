<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <div   class="container" >
<h1> php variables</h1>
<ul>
  <li style="color :red;"> rule1 </li>
  <li style= "color :red;"> rule1 </li>
  <li style="color :red;" >rule1 </li>
  <li> rule1 </li>
  <li> rule1 </li>
</ul>
    </div>
    <button type="button" class="btn-close" aria-label="Close"></button>

 <?php $name="haary is agud  boy";
 echo " the length of "."my string is". strlen($name);
 echo "<br>";
 echo str_word_count($name);
 echo "<br>";

 echo strrev($name);
 echo "<br>";

 echo strpos($name,"b");
 echo "<br>";
 echo str_replace("haary", "shagun");
echo str_repeat ($name ,123);
echo"<br>";
 echo rtrim(" <pre>       this  is  gud boy     <pre>");
 echo ltrim(" <pre>       this  is  gud boy     <pre>");
 
 
 $a =76;
 $b =98;
  if ($a > $b){
    echo " a is graeter than b";
  }
   elseif ($a ==$b){
    echo  "a is grater thna b";
   }
   else
   {
     echo " b is grgaeter than b";
   }


$s=10;

    switch ($s){
      case 1:
        echo "you are12 yeras old";
        break;
        case 10:
          echo "your age is ten";
          break;
          default:
          echo "  your age is  weird";
        }

         while($s<120){
          echo $s;
          echo "$s is smallere" ."<br>";
          $s+=3 ;
         }
      for ($index=0; $index < 10; $index++) { 
        echo "a lot to come". $index;
      }

       $arr= array("shagun", "saksgi", "harry", "gaurav");
       for($j=0;$j<count($arr); $j++){
        echo $arr[$j];
       }
       foreach ($arr as $value) {
        echo "$value <br>";
        # code...
       }

 ?>   
  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>