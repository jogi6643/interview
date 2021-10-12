
<!DOCTYPE html>
<html>
    <head>
        <title>Laragon</title>

        <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Karla';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            .opt {
                margin-top: 30px;
            }

            .opt a {
              text-decoration: none;
              font-size: 150%;
            }
            
            a:hover {
              color: red;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
               <h1> Types of Design Pattern</h1>
     
                <div class="info"><br />
						
 <h5>1.Creational</h5>

 <li><b>A private static variable, holding the only instance of the class.</b></li>
<li>A private constructor, so it cannot be instantiated anywhere else.</li>
<li>A public static method, to return the single instance of the class.</li>

 <h5>2.Structural</h5>
 <h5>3.Behavioral</h5>
 

 <p>use on oject instance never use again
 use memory
 use single instance
</p>
                </div>
                <div class="opt">
                  <div><a title="Getting Started" href="#">
										 <?php 
					 class Singleton{
						 private static $instance = NULL;
						 private function __construct(){
							 echo "DB Connected";
							 echo "</br>";
						 }
						 public  static function getinstance(){
							 if(self::$instance==NULL)
							 {
								 self::$instance = new Static();
							 }
							 else{
								 echo "Already connected";
							 }
							 return self::$instance;
						 }
					 }
					 
					 $obj = Singleton::getinstance();
					  $obj = Singleton::getinstance();
					  ?>
				  </a></div>
                </div>
            </div>

        </div>
    </body>
</html>
 
