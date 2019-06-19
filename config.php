<?php
$th4 = ["id" => "ID","Наименование" => "Наименование","Компонент1" => "Компонент1","Компонент2" => "Компонент2","Компонент3" => "Компонент3","Компонент4" => "Компонент4","Компонент5" => "Компонент5","Компонент6" => "Компонент6","Компонент7" => "Компонент7","Компонент8" => "Компонент8","Компонент9" => "Компонент9","Компонент10" => "Компонент10","Компонент11" => "Компонент11","Компонент12" => "Компонент12","Компонент13" => "Компонент13","Компонент14" => "Компонент14","Компонент15" => "Компонент15","Компонент16" => "Компонент16","Компонент17" => "Компонент17","Компонент18" => "Компонент18","Компонент19" => "Компонент19","Компонент20" => "Компонент20","Местоположение","Пользователь","Дата введения","Дата деструкции","Статус"];
$td4 = ["id" => "id","workstation" => "workstation","component1" => "component1","component2" => "component2","component3" => "component3","component4" => "component4","component5" => "component5","component6" => "component6","component7" => "component7","component7" => "component7","component8" => "component8","component9" => "component9"];
$th1 = ["id" => "ID","Логин" => "Логин","Пароль" => "Пароль","Роль" => "Роль","Права доступа" => "Права доступа"];
$td1 = ["id" => "id","login" => "login","password" => "password","position" => "position","flag" => "flag"];
$th2 = ["id" => "ID","Наименование" => "Наименование","Модель" => "Модель","Серийный номер" => "Серийный номер","Инвентарный номер" => "Инвентарный номер","Год выпуска" => "Год выпуска","Дата ввода в эксплуатацию" => "Дата ввода в эксплуатацию","Параметр1" => "Параметр1","Параметр2" => "Параметр2","Параметр3" => "Параметр3","Параметр4" => "Параметр4","Параметр5" => "Параметр5","Параметр6" => "Параметр6","Параметр7" => "Параметр7","Параметр8" => "Параметр8","Параметр9" => "Параметр9","Статус" => "Статус"];
$td2 = ["id" => "id","name" => "name","model" => "model","serial_number" => "serial_number","inventary_number" => "inventary_number","release_year" => "release_year","start_exploitation" => "start_exploitation","option1" => "option1","option2" => "option2","option3" => "option3","option4" => "option4","option5" => "option5","option6" => "option6","option7" => "option7","option8" => "option8","option9" => "option9","status" => "status"];
$th3 = ["id" => "ID","Технические Средства" => "Технические Средства","Дата" => "Дата","Статус" => "Статус"];
$td3 = ["id" => "id","technical_means" => "technical_means","date_plan" => "date_plan","status" => "status"];

$th5 = ["id" => "ID","Наименование" => "Наименование","Параметр1" => "Параметр1","Параметр2" => "Параметр2","Параметр3" => "Параметр3","Параметр4" => "Параметр4","Параметр5" => "Параметр5","Параметр6" => "Параметр6","Параметр7" => "Параметр7","Параметр8" => "Параметр8","Параметр9" => "Параметр9"];
$td5 = ["id" => "id","name" => "name","option1" => "option1","option2" => "option2","option3" => "option3","option4" => "option4","option5" => "option5","option6" => "option6","option7" => "option7","option8" => "option8","option9" => "option9"];

$th6 = ["id" => "ID","Статус" => "Статус"];
$td6 = ["id" => "id","status" => "status"];

$th7 = ["id" => "ID","ФИО" => "ФИО","Профессия" => "Профессия","АРМ" => "АРМ"];
$td7 = ["id" => "id","full_name" => "full_name","profession" => "profession","job" => "job"];

$th8 = ["id" => "ID","Филиал" => "Филиал","Адрес" => "Адрес"];
$td8 = ["id" => "id","branch" => "branch","address" => "address"];

class Database{
    public $isConn;
    protected $datab;
    
    // connect to db
    public function __construct($username = "Frizzes", $password = "Frizzes14", $host = "localhost", $dbname = "accounting_", $options = []){
        $this->isConn = TRUE;
        try {
            $this->datab = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password, $options);
            $this->datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->datab->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
        
    }
    
    public function Disconnect(){
        $this->datab = NULL;
        $this->isConn = FALSE;
    }
    // get row
    public function getRow($query, $params = []){
        try {
            $stmt = $this->datab->prepare($query);
            $stmt->execute($params);
            return $stmt->fetch();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }
    // get rows
    public function getRows($query, $params = []){
        try {
            $stmt = $this->datab->prepare($query);
            $stmt->execute($params);
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }
    // insert row
    public function insertRow($query, $params = []){
        try {
            $stmt = $this->datab->prepare($query);
            $stmt->execute($params);
            return TRUE;
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }
    // update row
    public function updateRow($query, $params = []){
        $this->insertRow($query, $params);
    }
    // delete row
    public function deleteRow($query, $params = []){
        $this->insertRow($query, $params);
    }
}
/*return [
	'key'=>'42B19AD6237FBF502E8808D744AE763C',
	'redirect'=>'http://frizzesorg/'
];*/
?>