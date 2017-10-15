<!DOCTYPE html>

<html>
<head>
<title>Music by Country</title> 
<link rel="stylesheet" href="design.css">

    <script>    


    var dontusetemp = "abc";
    <?php
	$array = explode('|', $argv[1]);
	echo 'var dontusetemp = "abc';
	$done = true;
	for ($i = 0; $i < count($array) - 1; $i++) {
		if(strpos($array[$i], ",") !== false)
		{
			$part = explode(',', $array[$i]);
			echo $part[1] . " - " . $part[0] . "," . $part[2] . "|";
			$done = true;
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
            document.getElementById("playlist").innerHTML = "";
            var songs = text.split("|"); 
            var content = "<center>";
            for(i = 0; i<songs.length-1; i++)
            {
                    var difsongs = songs[i].split(",");
                    content =content+'<button onClick = "play(\''+difsongs[1]+'\')">'+difsongs[0]+'</button><br><br>';
                   if(i == 0)
                       play(difsongs[1]);
                
            }
            content = content+"</center>";
            
            document.getElementById("playlist").innerHTML = '<h1 align="center">PLAYLIST</h1><P align = "right"><a href = "#header"> Go Up</a></p>'+ content;
            
        }
        
        
        
          function play(text)
        {
            document.innerHTML = "hey";
            
        document.getElementById("player").innerHTML='<iframe width=100% height=50px src="' + text + ';autoplay=1"  frameborder="0" allowfullscreen></iframe>';
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
        function gerFunction() {
        add(Germany);
        } 
        function ausFunction() {
        add(Australia);
        } 
        function itaFunction() {
        add(Italy);
        } 
        function brzFunction() {
        add(Brazil);
        } 
        function netFunction() {
        add(Netherlands);
        } 
        function fraFunction() {
        add(France);
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
       <a href = "index.html#player"> <img src = "res/WT.Section2USA.jpg" alt = "usa" onclick="usaFunction()"></a> 
    </div></td>
    <td><div id = "uk">
        <a href = "index.html#player"><img src = "res/WT.Section2UK.jpg" alt = "uk" onclick="ukFunction()"></a>
        </div></td>
    <td><div id = "ind">
        <a href = "index.html#player"><img src = "res/WT.Section2India.jpg" alt = "india" onclick="indFunction()"></a>
            </div></td>
                </tr>
   <tr> <td><div id = "korea">
       <a href = "index.html#player"><img src = "res/WT.Section2korea.jpg" alt = "korea" onclick="korFunction()"> </a></div></td>
    <td><div id = "mexico">
        <a href = "index.html#player"><img src = "res/WT.Section2Mexico.jpg" alt = "mexico" onclick="mexFunction()">
        </a>  </div></td>
    <td><div id = "ger">
       <a href = "index.html#player"> <img src = "res/WT.Section2Germany.jpg" alt = "germany" onclick="gerFunction()"></a> 
    </div></td>
        
        </tr>
               <tr>
    <td><div id = "finland">
        <a href = "index.html#player"><img src = "res/WT.Section2Finland.jpg" alt = "finland" onclick="finFunction()">
        </a> </div></td>
    
    <td><div id = "net">
        <a href = "index.html#player"><img src = "res/WT.Section2Netherlands.jpg" alt = "netherlands" onclick="netFunction()"></a>
            </div></td>
                   <td><div id = "aus">
        <a href = "index.html#player"><img src = "res/WT.Section2Australia.jpg" alt = "australia" onclick="ausFunction()"></a>
        </div></td>
                </tr>
   <tr> <td><div id = "brz">
       <a href = "index.html#player"><img src = "res/WT.Section2Brazil.jpg" alt = "brazil" onclick="brzFunction()"> </a></div></td>
    <td><div id = "italy">
        <a href = "index.html#player"><img src = "res/WT.Section2Italy.jpg" alt = "italy" onclick="itaFunction()">
        </a>  </div></td>
    <td><div id = "france">
        <a href = "index.html#player"><img src = "res/WT.Section2France.jpg" alt = "france" onclick="fraFunction()">
        </a> </div></td>
        
        </tr>
</table>
          </div>
         <div id = "player"><br><br></div>
    
        <div id ="playlist">
            <h1 align="center">PLAYLIST</h1>
            <p id = "play">Nothing to play! Pick a country to get started.</p> 
        </div>
        
   
<br><br><hr> 
        
<p align = "right" id="footer">Copyright (c) 2017</p> 
        
    </body>
</html>