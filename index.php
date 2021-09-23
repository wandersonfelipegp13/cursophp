<!DOCTYPE html>
<html>

<head>
    <title>Page Title</title>
</head>

<body>

    <?php
        print "Hello world! :D <br>";

        $name = "Wanderson";
        $age = 20;
        $height = 1.73;

        echo "$name, $age, $height <br>";

        // Variáveis dinâmicas
        $drink = "soda";
        $$drink = "Coca-Cola";

        echo $soda;

        var_dump($soda);

        if(is_string($soda)):
            echo 'string';
        else:
            echo 'no string';
        endif;
        echo "<br>";

        // Arrays

        $list = array('Go', 'Python', 'C#', 13.3, true, 20);

        echo var_dump($list);

        // Class and Object

        class Client {

            private $name;

            public function setName($name) {
                $this->$name = $name;
            }

        }

        $client = new Client();
        echo var_dump($client);
        $client->setName("Adamo");
        if(is_object($client)):
            echo var_dump($client);
        endif;

        // " and '

        $text = "php";
        echo 'Text = $text <br>'; // not works
        echo 'Text = '.$text.' \'some citation\' <br>';

        // scope

        $alias = "Farinha";
        
        function printAlias() {
            global $alias;
            echo $alias.'<br>';
        }

        printAlias();
        
        //
        
        function setCity() {
            global $city;
            $city = "Texas".'<br>';    
        }

        setCity();
        echo $city;

        // 

        $a = 7;
        $b = 6;

        function printSum() {
            echo $GLOBALS['a'] + $GLOBALS['b'].'<br>';
        }

        printSum();

        // constants

        define("NAME", "Giorno Giovanna");
        define("HEIGHT", 1.72);
        define("LANGUAGES", ['Go', 'Java', 'Ruby']);
        
        echo NAME.', '.HEIGHT.'<br>';
        echo LANGUAGES[2].'<br>';

        function showName() {
            echo NAME.'<br>';
        }

        showName();

        // arrays

        $parts = array(1 => 'Phantom Blood', 2 => 'Battle Tendency', 3 => 'Stardust Crusaders');
        $parts[] = 'Diamond Is Unbreakable';
        $parts[6] = 'Stone Ocean';
        print_r($parts);

        echo '<br>';
        $stands = array();
        $stands[] = 'Star Platinum';
        $stands[] = 'The World';
        $stands[] = 'Civil War';
        print_r($stands);
        echo '<br>';

        $mcs = ['Jonathan Joestar', 'Jotaro Kujo', 'Jolyne Cujoh'];
        print_r($mcs);
        echo '<br>'.count($mcs).'<br>';

        foreach($parts as $part) {
            echo $part.'<br>';
        }

        $person = array('name' => 'Josuke Higashikata', 'age' => 19, 'height' => 1.80);
        $person['weight'] = 82.0;
        var_dump($person);

        foreach ($person as $key => $value) {
            echo $key.": ".$value.'<br>';
        }

        $frameworks = array(
            'java' => array('#1' => 'Spring Boot', '#2' => 'Hibernate', '#3' => 'Struts'),
            'php' => array('Laravel', 'Symfony', 'Aura'),
            'python' => array('Django', 'Flask', 'CherryPy')
        );

        echo $frameworks['php'][0].'<br>';

        foreach ($frameworks['java'] as $key => $value) {
            echo $key.': '.$value.'<br>';
        }

    ?>

</body>

</html>