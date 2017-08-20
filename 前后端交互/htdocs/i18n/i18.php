<?php 
   header('Content-Type:application/javascript;charset=UTF-8');
    $list=getallheaders();
    $lang=$list['Accept-Language'];
    $first2=substr($lang,0,2);
     
     if ($first2==='zh') {
     	  echo "alert('你好')";
     } else if($first2==='ja')  {
     	   echo "console.log('dwdw')";

     }else{
 		  echo "var p=document.CreateElement('p');
 		      p.innerHTML='HELLO';document.body.appendChild(p);
 		  ";
     }
     



 ?>