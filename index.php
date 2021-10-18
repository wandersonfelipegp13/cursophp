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

        // Array functions

        echo in_array('Stone Ocean', $parts), "<br>";
        
        $keys = array_keys($person);
        print_r($keys);
        echo '<br>';

        $values = array_values($person);
        print_r($values);
        echo '<br>';

        $info = array_merge($parts, $mcs);
        print_r($info);
        echo '<br>';


        echo array_pop($info), '<br>';
        print_r($info);
        echo '<br>';

        echo array_shift($info), '<br>';
        print_r($info);
        echo '<br>';

        array_unshift($stands, "Metallica", "Black Sabbath", "Aerosmith");
        print_r($stands);
        echo '<br>';

        array_push($stands, "Earth, Wind, and Fire", "Heaven's Door", "Red Hot Chili Pepper");
        print_r($stands);
        echo '<br>';

        $stand = array('Bad Company', 'Killer Queen', 'Tusk');
        $user = array('Keicho Nijimura', 'Yoshikage Kira', 'Johnny Joestar');
        $combine = array_combine($stand, $user);
        print_r($combine);
        echo '<br>';

        $sum = array(2.5, 1, 3, 3.5, 3);
        print array_sum($sum);
        echo '<br>';

        $date = "2021/10/02";
        $newDate = explode('/', $date);
        print_r($newDate);
        echo '<br>';

        $androxus = array("Fear", "is", "an", "illusion...", "except", "yours.", "That's", "real.");
        echo implode(' ', $androxus);
        echo '<br>';

	// conditionals 

	$number = 10;

	if($number == 10): echo 'YES! YES! YES! YES!';
	elseif($number >= 100): echo 'OH MY GOOOD!!!';
	else: echo 'NO! NO! NO! NO! NO!';
	endif;
	echo '<br>';	
	
	echo ($number > 7) ? 'NICE!' : 'OH NOOO!';	
	echo '<br>';

	$color = 'Golden';

	switch($color):
	case 'Golden':
		echo 'Wind.';
		break;
	case 'Red':
		echo 'Hot Chili Peppers';
		break;
	default:
		echo 'Purple Haze';
	endswitch;

	echo '<br>';

	// exponentiation
	
	echo 2 ** 3, '<br>';

	// pre-increment
	
	$value = 1;

	echo ++$value, '<br>';

	// post-increment

	echo $value++, '<br>';
	echo $value, '<br>';

	// comparison operators

	if(10 == "10"):
		echo 'YES!';
	else:
		echo 'NO!';
	endif;

	echo '<br>';

	// identity operator (=== and !===)
	
	if(10 === "10"):
		echo 'YES!';
	else:
		echo 'NO!';
	endif;
	
	echo '<br>';

	// Not equal

	if(10 <> 11):
		echo 'YES!';
	else:
		echo 'NO!';
	endif;

	echo '<br>';

	// spaceship, return -1, 0 or 1
	
	var_dump(10 <=> 20);

	echo '<br>';

	// XOR
	
	if(($stand[0] == 'Bad Company') xor ($stand[2] == 'Tusk')):
		echo 'YES!';
	else:
		echo 'NO!';
	endif;	

	echo '<br>';

    // string

    $dio_scream = 'wryyyyyyyy';
    echo strtoupper($dio_scream).'<br>';

    $jojo = 'JOJO';
    echo strtolower($jojo).'<br>';

    $the_world = 'The World';

    echo substr($the_world, 4).'<br>';
    echo substr($the_world, 4, 2).'<br>';  

    echo str_pad($jojo, 5).'<br>';
    echo str_pad($jojo, 7, '*').'<br>';
    echo str_pad($jojo, 7, '*', STR_PAD_LEFT).'<br>';
    echo str_pad($jojo, 7, '*', STR_PAD_BOTH).'<br>';

    echo str_repeat('YES! ', 5).'<br>';

    $giorno = 'Giorno Joestar';
    echo str_replace("Joestar", "Giovanna", $giorno).'<br>';
    $andro = implode(" ", $androxus);
    echo strpos($andro, 'illusion').'<br>'; 

    // number functions
    
    $db_prize = 1234.56;
    echo 'R$ '.number_format($db_prize, 2, ',', '.').'<br>';
    
    echo round(3.6).'<br>';
    echo ceil(5.10).'<br>'; 
    echo floor(8.90).'<br>'; 
    echo rand(1, 20).'<br>'; 
    
    // superglobals

    $x = 10;
    $y = 03;

    function sum() {
        echo $GLOBALS['x'] + $GLOBALS['y'].'<br>'; 
    }

    sum();

    echo $_SERVER['PHP_SELF'].'<br>';
    echo $_SERVER['SERVER_NAME'].'<br>';
    echo $_SERVER['SCRIPT_FILENAME'].'<br>';
    echo $_SERVER['DOCUMENT_ROOT'].'<br>';
    echo $_SERVER['SERVER_PORT'].'<br>';
    echo $_SERVER['REMOTE_ADDR'].'<br>';

    ?>
        
    <form action="data.php" method="POST">
        Name: <input type="text" name="name"><br>
        Email: <input type="email" name="email"><br>
        <!-- <input type="submit" name="send"> -->
        <button type="submit"> Send </button><br>
    </form>    

    <a href="data_get.php?age=21&alias=Wande">Send data</a>

</body>

</html>
