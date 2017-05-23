<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test class extensions</title>
  </head>
  <body>


      <?php

            class  Gyvunas   {
              public $alive = true;
              public $positionX;
              public $positionY;

              function printA($xx) {
                echo $xx;
              }
            }

            class Tipas extends Gyvunas {
              public $rusis = "kate";
              public $minta = "mesa";
            }

            class Liutas extends Tipas {
                private $name;
                public $kailis = true;
                public $spalva = "#a34baa";

                // overwriting
                function printA($xx) {
                  echo $xx . $xx . $xx;
                }
                public function medzioti() {
                  // kazkoks kodas
                   iToleta(); // privati naudojama tik viduje
                }
                private  function iToleta() {
                  // kazkoks kodas
                }
                public function setName($xx) {
                    $this->name = $xx;
                }
                public function getName() {
                    return $this->name;
                }
            }

            $simba = new Liutas();
            $hdaras = new Liutas();
            $lita = new Liutas();

            // uzduotis 1: pakeisti visu triju liutu spalvas (ir pakeitimus atspausdinti)
              // $simba->spalva = "violetine";
              // $hdaras->spalva = "juodas";
              // $lita->spalva = "ruda";
              //
              // echo "Simbos spalva: " . $simba->spalva . " <br />";
              // echo "Hdarro spalva: " . $hdaras->spalva . " <br />";
              // echo "Litos spalva: " . $lita->spalva . " <br />";
              // print_r($simba);  // atspausdina visa obj.

              // uzduotis2: Liuto klasei susikurti privatu kintamaji "Name". ir uskurti 2 funkcijas jo reiksmei pakeisti ir paimti "setName($x)", "getName()".

              $simba->setName("Karolis");
              echo " Simbos vardas: " . $simba->getName() . "<br />";
              $simba->setName("Ana");
              echo " Simbos vardas: " . $simba->getName() . "<br />";

              $simba->printA(" ===Kastytis===  ");
              // uzduotis 3:
              // 1) sukurti dvi klases: User, Admin
              // 2) User klase turi kintamuosius : username, password, rights ir funkcija Login($name, $pass)
              // 3) Admin klase  funkcijas:  changeUserName($nm),  changeRights($rgt)


              class User   {
                  public $username = "Tim";
                  protected $password = "xx3";
                  private $rights = "moderator";
                  public function Login($name, $pass) {
                    // kazkoks kodas
                  }
              }
              class Admin extends User  {
                  public function changeUserName($nm) {
                      $this->username = $nm;
                  }
                  public function  changeRights($rights) {
                      $this->rights = $rights;
                  }
              }

              $adminas = new Admin();

              $adminas->changeRights("Admin");
              echo "vartotjo teiese: $adminas->rights <br />";
              // echo "vartotjo kodas: $adminas->password <br />";  // tai nera public / viesa reiksme
              $adminas->username = "Aruolis";

              print_r($adminas);
       ?>

  </body>
</html>
