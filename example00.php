<?php

   require  'php/db.php';

   function getUsersData ($uid)
    {
      $array= array();
      $q = mysql_query("SELECT * FROM `userinfo` WHERE  `uid` =".$uid);
      while($r=mysql_fetch_assoc($q)){
      

          $array ['uid'] = $r['uid'] ;
          $array ['idno'] = $r['idno'] ;
          $array ['fname'] = $r['fname'] ;
          $array ['mname'] = $r['mname'] ;
          $array ['lname'] = $r['lname'] ;
          $array ['password'] = $r['password'] ;
          $array ['email'] = $r['email'] ;
          $array ['sex'] = $r['sex'] ;
          $array ['type'] = $r['type'] ;

      }
      return $array;
    }
    function getuid($idno){
      $q = mysql_query ("SELECT `uid` * FROM `userinfo` WHERE `idno`='" .$idno."'");
      while ($r = mysql_fetch_assoc($q));
      {
        return $r ['uid'];
    }
  }

?>