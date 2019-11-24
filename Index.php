   <?php
    
class blabot {
    public function generate($slova, $vety, $odstavce){
        $csv = fgetcsv(fopen("slova.csv", "r"), 999999, ";");
        for($x = 0; $x < $odstavce; $x++){              
            for($y = 0; $y < $vety; $y++){
                for($z = 0; $z < $slova; $z++){
                    if($z == $slova-1){
                        echo $csv[rand(0, count($csv)-1)] . ". ";
                      } else {
                        echo $csv[rand(0, count($csv)-1)]. " ";
                      }
                }
            }
            echo "<br> <br>";
        }
    }
}
$word  = $_POST["word"];
$sentence  = $_POST["sentence"];
$paragraph  = $_POST["paragraph"];

$output = new blabot();
echo $output->generate($sentence, $word, $paragraph);          // počet vět, počet slov, počet odstavců
?>
