
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iternary section</title>
    <link rel="stylesheet" href="style-i.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Kanit:wght@300&family=Oswald&family=Tilt+Neon&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form onsubmit = "takevalue()" method="POST">
            <div>
                <input type="text" list="mylist" class="search" id = "place" name = "search-bar" placeholder="Where would you like to go?">
                    <datalist id="mylist">
                        <option>statue of liberty</option>
                        <option>times square</option>
                        <option>central park</option>
                        <option>metropolitan museum of art</option>
                        <option>broadway and theatre district</option>
                        <option>the museum of modern art</option>
                        <option>world trade centre</option>
                        <option>rockeffeler centre</option>
                        <option>empire state building</option>
                        <option>9/11 memorial and museum</option>
                        <option>high line</option>
                        <option>brooklyn bridge</option>
                        <option>fifth avenue</option>
                        <option>one world observatory</option>
                        <option>wall street</option>
                        <option>new york public library</option>
                        <option>St. Patrick’s Cathedral</option>
                        <option>Solomon R. Guggenheim Museum </option>
                        <option> Bryant Park</option>
                        <option>Carnegie Hall </option>
                        <option>American Museum Of Natural History</option>
                        <option>Washington Square Park</option>
                        <option>Radio City Music Hall </option>
                        <option>Liberty Island </option>
                        <option>New York harbour</option>
                    </datalist>
            </div>
            <div>        
                    <input type="date" class = "date-s"  id = "start" name = "s-date" placeholder="start date">
                    <input type="date" class="date-e"  id = "end" name = "e-date" placeholder="end date">
            </div>
            <div  >        
                    <input type="number"class="num1"  id = "num-1" name = "num-1" placeholder="number of persons">
                    <input type="number"  class = "num2" id = "num-2" name = "num-2" placeholder="number of days">

            </div>  
            <input type = "submit" value ="set-trip" class= "set-trip" name ="set-trip">
            <a href="#" class ="invite">+ invite a friend</a>      
                
        </form>
    </div>
    <section>
        <div class ="places"><h1>famous places to visit</h1></div>
        <div class ="images">
            <img src="liberty-island.webp" class="cards">
            <img src="brooklyn-bridge.webp" class="cards">
            <img src="library.webp" class="cards">
            <img src="bryant-park.jpg" class="cards">
        </div>
        <div class ="link1"><a href ="https://www.thrillophilia.com/destinations/new-york-city/places-to-visit"> click here to see all</a></div>
        <div class = "hotel-h"><h1>top rated hotels</h1></div>
        <div class="hotels">

            <div class = "sec-1" >
                <img src ="hotel1.webp" class="hotel1">
                <img src ="hotel2.webp" class="hotel1">
                <img src ="hotel3.webp" class="hotel1">
                <img src ="hotel4.webp" class="hotel1">
                
            </div>
            <div class ="link2"><a href ="https://www.google.com/travel/hotels/New%20York%2C%20NY%2C%20USA?q=hotels%20in%20new%20york%20to%20visit&g2lb=2502548%2C2503771%2C2503781%2C4258168%2C4270442%2C4284970%2C4291517%2C4306835%2C4429192%2C4515404%2C4597339%2C4731329%2C4757164%2C4778035%2C4814050%2C4850737%2C4861688%2C4864715%2C4874190%2C4886480%2C4893075%2C4906023%2C4920132%2C4924070%2C4936396%2C4955104%2C4956017%2C4964835%2C4964966%2C4965727%2C4965990%2C4968087%2C4972345%2C4977787&hl=en-IN&gl=in&ssta=1&ts=CAESCgoCCAMKAggDEAAaIAoCGgASGhIUCgcI5w8QAxgUEgcI5w8QAxgVGAEyAhAAKgkKBToDSU5SGgA&rp=EKftoZSsg6HcThCdwPfHkr_DpPEBEIbSvPeI3J-PIRCftLHN4YSWuWU4AUAASAKiARFOZXcgWW9yaywgTlksIFVTQZoCAggA&ap=EgNDQmcwA2gB&ictx=1&sa=X&ved=0CAAQ5JsGahcKEwiwt4Oghub9AhUAAAAAHQAAAAAQBA&utm_campaign=sharing&utm_medium=link&utm_source=htls">click here to book your stay</a></div>
        </div>
    </section>
    <footer class="footer">

    </footer>
</body>
<script>
    function takevalue(){
        var place = document.getElementsByClassName("search");
        var start = document.getElementsByClassName("date-s");
        var end = document.getElementsByClassName("date-e");
        var days = document.getElementsByClassName("num1");
        var persons = document.getElementsByClassName("num2");
        document.write("your previous visited place is :"+ place+"<br>");
        document.write("from date :"+ start + "to"+end+"<br>");
        document.write("number of days of trip :"+ days+"<br>");
        document.write("number of persons planned the trip :"+ persons+"<br>");
    } 
</script>
</html>