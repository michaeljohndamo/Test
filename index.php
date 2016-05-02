<?php
	$employee = array("employee"=>array(
		"name"=>"Jay Damo", "position" => "Quality Assurance" , "skills" =>
		"php,bootstrap,html,css"),"employee2" =>array(
		"name"=>"Anjelyn Ramirez", "position" => "Database Designer" , "skills" =>
		"MySQL,vb.net,html,css"));
 echo $employee['employee']['name'];
 echo "<br><br><br><br>";

 $days=array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');

 for($d = 0; $d <= 7; $d++) {
 	echo $days[$d]."<br>";
 }

 echo "<br><br><br><br>";

 foreach($days as $day) {
 	echo $day."<br>";
 }
 echo"<br><br><br>";

echo "<h1> TOP 3 of Ph Royale </h1>";
 $codename = array('Jay'=>'cLoud','Aoms'=>'wewww','Gomer'=>'blacknight');

 foreach($codename as $key => $code) {
 	echo $key. ' as '. $code. "<br>";
 	
 }
 echo "<br><br>";

// To print multi dimensional array with keys
foreach ($employee as $employee1) {

	foreach ($employee1 as $key => $data) { 
		echo $key.':'.$data."<br>";
	}
}
echo "<br><Br><br>";

echo "<h1>Fave game and characters</h1>";
$hero = array('games'=>array('DotA2'=>'Bone Clinkz','Devil May Cry'=>'Dante','Clash Royale'=>'Wizard','Clash of Clans'=>'Hog Rider'));

foreach($hero as $game) {
	foreach($game as $key=>$play) {
		echo $key.' - '. $play . "<br>";
	}

}
echo "<br><br><br>";

//To check if it is inside an array
$s_days = 'Holidays';
if (in_array($s_days,$days)) {
	echo "$s_days". " is inside the array";

}else {
	echo "I am sorry $s_days is not inside the array";

}

echo "<br><br>";

if(is_array($s_days)) {
	echo 'True';
}else {
	echo 'False';
}

array_unshift($days,'Mcdo day','Weekends','Rainy Days');
print_r($days);
echo "<br><br>"; 
array_shift($days);
print_r($days);
echo "<br><br>";
array_pop($days);
print_r($days);

echo "<br><br>";

//To sort arrays
ksort($codename);
foreach($codename as $key =>$code){
	echo $key. ' - ' . $code ."<pre>";
}

$skills = array_column($employee,'skills','name');
	print_r($skills);
	echo "</pre>";

	echo $_GET['name']."<br>";
	echo $_GET['age'];

?>