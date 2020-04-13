<?php
  
//Initialize array   
$arr = array('a', 'a', 'd', 'c', 'f', 'f', 'q', 'j', 'l');   
      
//Array fr will store frequencies of element  
$fr = array_fill(0, count($arr), 0);  
$visited = -1;  
   
for($i = 0; $i < count($arr); $i++){  
        $count = 1;  
        for($j = $i+1; $j < count($arr); $j++){  
            if($arr[$i] == $arr[$j]){  
                $count++;  
                //To avoid counting same element again  
                $fr[$j] = $visited;  
            }  
        }  
        if($fr[$i] != $visited)  
            $fr[$i] = $count;  
}  
      
//Displays the frequency of each element present in array  
print("-------------------------<br>");  
print(" Element | Frequency<br>");  
print("-------------------------<br>");  
for($i = 0; $i < count($fr); $i++){  
    if($fr[$i] != $visited){  
        //str_repeat(' ', 6) is used to add extra whitespace in output  
        print(str_repeat(' ', 6) . $arr[$i] );  
        print(str_repeat(' ', 7) . "|" . str_repeat(' ', 7) . $fr[$i]);  
        print("<br>");  
    }  
}