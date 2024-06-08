/*
|--------------------------------------------------------------------------
| Maze Runner
|--------------------------------------------------------------------------
|
*/

function mazeRunner(maze, directions) {
   let row, col;
   for (let i = 0; i < maze.length; i++) {
      for (let j = 0; j < maze[i].length; j++) {
         if (maze[i][j] === 2) {
            row = i;
            col = j;
         }
      }
   }
   const moves = { N: [-1, 0], E: [0, 1], S: [1, 0], W: [0, -1] };
   for (let direction of directions) {
      [row, col] = [row + moves[direction][0], col + moves[direction][1]];
      if (row < 0 || row >= maze.length || col < 0 || col >= maze.length || maze[row][col] === 1)
         return "Dead";
      if (maze[row][col] === 3) return "Finish";
   }
   return "Lost";
}


function mazeRunner(maze, dirs) {
   let y = maze.findIndex((arr) => arr.includes(2));
   let x = maze[y].indexOf(2);
   let curPos;
   for (let i = 0; i < dirs.length; i++) {
      if (dirs[i] === "N") y--;
      if (dirs[i] === "S") y++;
      if (dirs[i] === "W") x--;
      if (dirs[i] === "E") x++;
      if (!maze[y]) return "Dead";
      curPos = maze[y][x];
      if (curPos === 3) return "Finish";
      if (curPos === 1 || curPos === undefined) return "Dead";
   }
   return "Lost";
}


let maze = [
   [1, 1, 1, 1, 1, 1, 1],
   [1, 0, 0, 0, 0, 0, 3],
   [1, 0, 1, 0, 1, 0, 1],
   [0, 0, 1, 0, 0, 0, 1],
   [1, 0, 1, 0, 1, 0, 1],
   [1, 0, 0, 0, 0, 0, 1],
   [1, 2, 1, 0, 1, 0, 1],
];
console.log(mazeRunner(maze, ["N", "N", "N", "N", "N", "E", "E", "E", "E", "E"]), "Finish");
console.log(mazeRunner(maze, ["N", "N", "N", "W", "W"]), "Dead");
console.log(mazeRunner(maze, ["N", "E", "E", "E", "E"]), "Lost");