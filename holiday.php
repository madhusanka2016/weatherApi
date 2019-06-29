<?php

for ($year = 2006; $year <= 2019; $year++){

    //$FileContents = file_get_contents("https://www.yr.no/place/Norway/Oslo/Oslo/Oslo_(Blindern)_observation_site/almanakk.html?dato=".$year."-".$month."-".$x);
    $FileContents = file_get_contents("https://www.timeanddate.com/calendar/custom.html?year=".$year."&country=18&cols=3&hol=537&df=1");

    //sleep(1);
    $filename=$year.".php";
    $fp = fopen($filename, 'a');
    fwrite($fp, $FileContents);
    fclose($fp);

}



// echo "OK";
// echo "<script> document.write(datename); </script>";
// echo "Date";
// echo "<script> var x = document.getElementsByClassName('yr-table yr-table-hourly yr-popup-area').innerHTML='<object  data='https://www.yr.no/place/Norway/Oslo/Oslo/Oslo_(Blindern)_observation_site/almanakk.html?dato=2018-05-28' ></object>';
//   var datename = document.getElementsByClassName('dayname')[0].textContent;
//   var day = document.getElementsByClassName('day')[0].outerText;
//   var month = document.getElementsByClassName('month')[0].textContent;
//   var year = document.getElementsByClassName('year')[0].textContent;
//   console.log(datename);
//   console.log(day);
//   console.log(month);
//   console.log(year);
//   var b = x[0];
//   var c = b.rows.length;
//   var i;
// for (i = 0; i < 2; i++) { 
//     var d = b.rows[i].cells;
  
//   console.log(d); 
// }
// var j;
// for (j = 2; j < 14; j++) { 
    
//     var k;
//     var x = '';
//     for (k = 0; k < 9; k++) { 
//         var d = b.rows[j].cells[k].textContent;
//          x= x +' '+d;
      
      
//     }
//     console.log(x); 
    
  
// }
//   //var c = b.rows[3].cells.length;
//   document.write(c);
  
//   console.log(c);  </script>";
//   echo "Other";

   //require('https://www.google.com/search?q=require+url+in+php&oq=require+url+in+p&aqs=chrome.1.69i57j33l5.13865j1j7&sourceid=chrome&ie=UTF-8');
?>
<?php
  
?>
<?php
  echo "<script> document.write(datename); </script>";
  echo "end";
?>