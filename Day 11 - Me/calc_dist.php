<?php
function generate_journey_instruction($instruction_count): array{
    $direction = ["north", "south", "east", "west"];
    $magnitude = 0;
    $instruction_list = []; 
    for($i=0; $i<$instruction_count; $i++){
        $magnitude = random_int(1, 99);
        $instruction_list[] = [$direction[array_rand(($direction))], $magnitude];
    }
    return $instruction_list;
}

function print_2D_array($array): void{
    echo "[";
    foreach($array as $ele){
        echo "[". $ele[0] .", ". $ele[1] . "], ";
    }
    echo "]";
    echo "<br>";
}

function compute_total_distance($instruction_list, $x_pos, $y_pos): float{
    $total_distance = 0;
    foreach($instruction_list as $instruction){
        switch($instruction[0]){
            case "north":
                $x_pos += $instruction[1];
                break;
            case "south":
                $x_pos -= $instruction[1];
                break;
            case "east":
                $y_pos += $instruction[1];
                break;
            case "west":
                $y_pos -= $instruction[1];
                break;
        }
    }
    $total_distance = sqrt(($x_pos * $x_pos) + ($y_pos * $y_pos));
    return $total_distance;
}

$instruction_list = generate_journey_instruction(5);
echo "Instruction list: <br>";
print_2D_array($instruction_list);
$total_distance = compute_total_distance($instruction_list, 0, 0);
echo "Total distance: ".$total_distance." units";

?>