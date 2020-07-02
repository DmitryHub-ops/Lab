<html>
<head>
    <title>Авторизация пользователя</title>
</head>
<body>
<?php
$log = $_POST["login"];
$pass = $_POST["password"];

$usinfo = array(array('login' => '1', 'password' => '1', 'name' => 'Ада', 'surname' => 'Байрон', 'role' => 'admin'),
                array('login' => '2', 'password' => '2', 'name' => 'Афанасий', 'surname' => 'Авдотьев', 'role' => 'client'),
                array('login' => '3', 'password' => '3', 'name' => 'Иван', 'surname' => 'Иванов', 'role' => 'manager'));

if (!($log == $usinfo[0]['login']) || !($log == $usinfo[1]['login']) || !($log == $usinfo[2]['login'])){
    header('location: login.php');
}

class user {
    public $login;
    public $password;
    public $name;
    public $surname;
    public $role;

    function __construct($login,$password,$name,$surname,$role)
    {
        $this->login = $login;
        $this->password = $password;
        $this->name = $name;
        $this->surname = $surname;
        $this->role = $role;
    }
}
class admin extends user {

    public function introduce (){
        echo "Здравствуйте, " . $this->name. "  " . $this->surname. "  ". " - Админ";
    }
}
class manager extends user {

    public function introduce() {
        echo "Здравствуйте, " . $this->name. "  " . $this->surname. "  ". " - Мененджер";
    }
}
class client extends user {

    public function introduce (){
        echo "Здравствуйте, " . $this->name. "  " . $this->surname. "  ". " - Клиент";;
    }
}

switch ($log) {
    case "1";
        $admin = new admin($usinfo[0]["name"], $usinfo[0]["surname"], $usinfo[0]["role"], $usinfo[0]["login"], $usinfo[0]["password"]);
        $admin->introduce();
        break;
    case "2";
        $manager = new manager($usinfo[2]["name"], $usinfo[2]["surname"], $usinfo[2]["role"], $usinfo[2]["login"], $usinfo[2]["password"]);
        $manager->introduce();
        break;
    case "3";
        $client = new client($usinfo[1]["name"], $usinfo[1]["surname"], $usinfo[1]["role"], $usinfo[1]["login"], $usinfo[1]["password"]);
        $client->introduce();
        break;
}
?>
</html>
