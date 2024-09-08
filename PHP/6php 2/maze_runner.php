<?php
/*
|--------------------------------------------------------------------------
| Maze Runner
|--------------------------------------------------------------------------
|
*/

function maze_runner($maze, $directions) {
   $row = $col = null;
   foreach ($maze as $i => $rowArray) {
      foreach ($rowArray as $j => $val) {
         if ($val == 2) {
            $row = $i; $col = $j; break 2;
         }
      }
   }
   $moves = ['N' => [-1, 0], 'E' => [0, 1], 'S' => [1, 0], 'W' => [0, -1]];
   foreach ($directions as $direction) {
      $row += $moves[$direction][0];
      $col += $moves[$direction][1];
      if ($row < 0 || $row >= count($maze) || $col < 0 || $col >= count($maze[0]) || $maze[$row][$col] == 1) return "Dead";
      if ($maze[$row][$col] == 3) return "Finish";
   }
   return "Lost";
}


function maze_runner($maze, $directions): string {
	for ($v = 0 ; $v < count($maze) ; $v++) {
		if (($h = array_search(2 , $maze[$v])) !== false) break;
	}
	foreach ($directions as $direction) {
		switch ($direction) {
			case 'N' : $v--; break;
			case 'S' : $v++; break;
			case 'W' : $h--; break;
			case 'E' : $h++; break;
		}
		if ($h < 0 || $v < 0 || $h === count($maze[$v]) || $v === count($maze)) return 'Dead';
		if ($maze[$v][$h] === 1) return 'Dead';
		if ($maze[$v][$h] === 3) return 'Finish';
	} return 'Lost'; 
} 


$maze = [
   [1, 1, 1, 1, 1, 1, 1],
   [1, 0, 0, 0, 0, 0, 3],
   [1, 0, 1, 0, 1, 0, 1],
   [0, 0, 1, 0, 0, 0, 1],
   [1, 0, 1, 0, 1, 0, 1],
   [1, 0, 0, 0, 0, 0, 1],
   [1, 2, 1, 0, 1, 0, 1],
];
print_r(maze_runner($maze, ["N", "N", "N", "N", "N", "E", "E", "E", "E", "E"]) . " Finish
");
print_r(maze_runner($maze, ["N", "N", "N", "W", "W"]) . " Dead
");
print_r(maze_runner($maze, ["N", "E", "E", "E", "E"]) . " Lost
");