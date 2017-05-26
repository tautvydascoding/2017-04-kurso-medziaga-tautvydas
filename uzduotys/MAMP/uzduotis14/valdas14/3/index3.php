<?php

// uzduotis:
// 1) sukurti interface "Edit": turi funkcijas, kurios nera aprasytos (bet privalomos)
// (ar gali tureti kintamuosius???)
// changeName($a)
// isLogin()
// getName()
// 2) sukurti (abstrakcia) klase User: ABSTRAKTI KLASE NEGALI TURETI ABSTRAKCIU KINTAMUJU (PAPRASTUS GALI)
//                                     A) kuri turi neprivalomus kintamuosius: name, password, createdDate, lastLogin
//                                     B) privaloma funkcija "logout()"
//                                     C) neprivaloma funkcija clearLastLoginTime()
// 3) sukurti klase Admin
//    A) kuri panaudoja Edit ir User ~klases(implementuoti ir paveldeti)


interface Edit {
    //interface negali turet kintamuju
    public function changeName($a);
    public function isLogin();
    public function getName();
}


abstract class User
{
    //abstrakti klase negali turet abstrakciu kintamuju (paprastus gali)
    public $name, $password, $createdDate, $lastLogin;

    abstract public function Logout(); //ja tures realizuoti kazkas kitas

    public function clearlastLoginTime()
    {
        echo "Jusu duomenys issivalys";

    }
}

class Admin extends User implements Edit {
    public function Logout() {
        echo "Jus atjungtas!";
    }
    public function changeName($a) {
        $this->name = $a;
    }
    public function isLogin() {
        // kazkoks kodas
    }
    public function getName(){
        return $this->name;
    }
}



?>
