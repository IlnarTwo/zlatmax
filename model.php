<?php
    class Model {
        // 1. Атрибуты класса Model
        public $content;
        public $filename;
        public $title = "Zlatmax";
        public $description = "Zlatmax златоустовские ножи";
        
// 2. Операции класса Model
        public function Display() {
        $this -> DisplayTitle(); //Название веб-страницы
        $this -> DisplayDescriptions();//Мета-тег содержания веб-страницы
        $this -> DisplayStyles();//Стиль оформления
        $this -> DisplayHeader();//Заголовок
        $this->DisplayContent($this->filename); //Контент
        $this -> DisplayFooter(); //Подвал
        }
        public function DisplayTitle() {
        echo "<!DOCTYPE html><html>\n<head>\n<meta charset='UTF-8'>\n";
        echo "<title>".$this->title."</title>";
        }
        public function DisplayDescriptions() {
        echo "\n<meta name=\"description\"
        content=\"".$this->description."\" />";
        }
        public function DisplayStyles() {
?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head><body>
<?php
}
        public function DisplayHeader() {
        require('view/header.html'); //Открываем файл в любом случае
        }
        public function DisplayContent($fil) { //Подгружаем контент
        $filename = $fil;
        //Читаем файл
        $myfile = fopen($filename, "r") or die("Не удается открыть файл!");
        $content = fread($myfile,filesize($filename));
        fclose($myfile);
        echo $this->content=$content; //Публикуем контекст -> Атрибут класса = Значение
        }
        public function DisplayFooter() {
        require('view/footer.html'); //Открываем файл в любом случае
        }
    }//end class
?>
