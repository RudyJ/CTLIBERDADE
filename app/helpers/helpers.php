<?php

  function checkPermission($permissions){
    $userAccess = getMyPermission(auth()->user()->nivel);
    foreach ($permissions as $key => $value) {
      if($value == $userAccess){
        return true;
      }
    }
    return false;
  }

  function checkAbility($ability)
  {
      $userAccess = getMyPermission(auth()->user()->nivel);
      if($userAccess == $ability):
          return true;
      else:
          return false;
      endif;
  }


  function getMyPermission($id)
  {
    switch ($id) {
      case "A":
        return 'admin';
        break;
      case "C":
        return 'consultor';
        break;
      case "F":
        return 'filiado';
        break;
    }
  }

?>