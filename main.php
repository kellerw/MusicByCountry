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
        var a = input.split(",");
        var srcr = a[a.length-1];

        

        function indFunction() {
    
            document.getElementById("player").innerHTML='<iframe width=100% height=50px src= ' + India + '  frameborder="0" allowfullscreen></iframe>';
         
        }
        function usaFunction() {
        document.getElementById("player").innerHTML='<iframe width=100% height=50px src='+USA+' frameborder="0" allowfullscreen></iframe>';
        }
        function ukFunction() {
        document.getElementById("player").innerHTML='<iframe width=100% height=50px src='+UK+' frameborder="0" allowfullscreen></iframe>';
        }
        function nigFunction() {
        document.getElementById("player").innerHTML='<iframe width=100% height=50px src='+USA+' frameborder="0" allowfullscreen></iframe>';
        }
        function mexFunction() {
        document.getElementById("player").innerHTML='<iframe width=100% height=50px src='+ Mexico +' frameborder="0" allowfullscreen></iframe>';
        }
        function korFunction() {
        document.getElementById("player").innerHTML='<iframe width=100% height=50px src='+ Korea +' frameborder="0" allowfullscreen></iframe>';
        }
        
    </script>
    
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
    <td><div id = "nigeria">
        <a href = "index.html#playlist"><img src = "res/WT.Section2Nigeria.png" alt = "nigeria" onclick="nigFunction()">
        </a> </div></td>
        
        </tr>
</table>
          </div>
        
        <div id ="playlist">
        <h1>Playlist</h1>
        </div>
        
    <div id = "player">Player </div> 
    </body>
</html>