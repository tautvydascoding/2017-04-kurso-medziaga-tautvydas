<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>abstract class && Interface</title>
  </head>
  <body>
    <h1>abstract class && Interface</h1>

    <?PHP

    // uzduotis:
    //1. sukurti interface Edit: turi funkcijas, kurios nera aprasytos (privalomos)
//changeName($a), isLogin(), getName()
//2. suskurti abstract klase User:
//A)turi privalomosius kint: name, password
//B) neprivalomus kint: createDate, lastLogin
//C) privaloma f-ja : "Logout()"
//D) neprivaloma f-ja clearlastLoginTime()

//3. suskurti klase Admin :
//A) kuri panaudoja Edit ir User klases


interface Edit {
  public function changeName($a);
  public function isLogin();
  public function getName();
}

 abstract class User  {
    public $createDate="yymmdd";
   public $lastlogin="20170523";
   public $password="xx333";
   public $name="Petras";
  abstract function Logout ();
  function clearLastLoginTime(){
    //kazkas
  }
  }

class Admin extends User implements Edit {
  function changeName($a){
    //kodas
  }
  function isLogin(){
    //kazka login
  }
  function getName(){
//kodas
  }
  function logout(){
    //kazkoks kodas
  }
}
    ?>


    </body>

  </html>
