<!DOCTYPE html>

<html>
<head>
<title>Music by Country</title> 
<link rel="stylesheet" href="design.css">

    <script>    

    <?php
	$array = explode('|', $argv[1]);
	echo 'var dontusetemp = "abc';
	$done = true;
	for ($i = 0; $i < count($array) - 1; $i++) {
		if(strpos($array[$i], ",") !== false)
		{
			if(!$done)
			{
				$part = explode(',', $array[$i]);
				echo $part[2];
				$done = true;
			}
		}
		else 
		{
			echo '"' . ";\r\nvar " . $array[$i]. ' = "';
			$done = false;
		}
	}
	echo '"' . ";\r\n";
    ?>
       
      
       function add(text)
        {
            document.getElementById("player").innerHTML='<iframe width=100% height=50px src= ' + text + '  frameborder="0" allowfullscreen></iframe>';
        }

        function indFunction() {
        add(India);
        }
        function usaFunction() {
        add(USA);
        }
        function ukFunction() {
        add(UK);
        }
        function finFunction() {
        add(Finland);
        }
        function mexFunction() {
        add(Mexico);
        }
        function korFunction() {
        add(Korea);
        }
        
    </script>
    </head>
    <body>
        <div id="header">
        
     
            <img src=res/WT.Section1a.png width = 1000px id="head">
        </div>
      
        <img src="res/WT.Section2.png" id = "countries">
        <div id="country">
        <table>
            <tr>
    <td><div id = "usa">
       <a href = "index.html#playlist"><img src = "res/WT.Section2USA.png" alt = "usa" onclick="usaFunction()"></a> 
    </div></td>
    <td><div id = "uk">
        <a href = "index.html#playlist"><img src = "res/WT.Section2UK.png" alt = "uk" onclick="ukFunction()"></a>
        </div></td>
    <td><div id = "ind">
        <a href = "index.html#playlist"><img src = "res/WT.Section2India.png" alt = "india" onclick="indFunction()"></a>
            </div></td>
                </tr>
   <tr> <td><div id = "korea">
       <a href = "index.html#playlist"><img src = "res/WT.Section2korea.png" alt = "korea" onclick="korFunction()"> </a></div></td>
    <td><div id = "mexico">
        <a href = "index.html#playlist"><img src = "res/WT.Section2Mexico.png" alt = "mexico" onclick="mexFunction()">
        </a>  </div></td>
    <td><div id = "finland">
        <a href = "index.html#playlist"><img src = "res/WT.Section2Finland.jpg" alt = "finland" onclick="finFunction()">
        </a> </div></td>
        
        </tr>
</table>
          </div>
        
        <div id ="playlist">
        <h1>Playlist</h1>
        </div>
        
    <div id = "player"><p id = "play">Nothing to play! Pick a country to get started.</p> <br><br></div>
<br><br><hr> 
<p align = "right">Copyright (c) 2017</p> 
    </body>
</html>