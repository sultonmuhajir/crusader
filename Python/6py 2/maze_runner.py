"""
|--------------------------------------------------------------------------
| Maze Runner
|--------------------------------------------------------------------------
|
"""

def maze_runner(maze, directions):
   row, col = next((i, j) for i, row in enumerate(maze) for j, val in enumerate(row) if val == 2)
   moves = {'N': (-1, 0), 'E': (0, 1), 'S': (1, 0), 'W': (0, -1)}
   for direction in directions:
      row += moves[direction][0]
      col += moves[direction][1]
      if row < 0 or row >= len(maze) or col < 0 or col >= len(maze[0]) or maze[row][col] == 1: return "Dead"
      if maze[row][col] == 3: return "Finish"
   return "Lost"


def maze_runner(maze, directions):
   DIRS = {'S': (1,0), 'E': (0,1), 'N': (-1,0), 'W': (0,-1)}
   maze = [l + [1] for l in maze] + [[1] * len(maze[0])]
   y, x = next((y,x) for y, l in enumerate(maze) for x, c in enumerate(l) if c == 2)
   for dy, dx in map(DIRS.get, directions):
      y += dy; x += dx
      if maze[y][x] == 3: return 'Finish'
      if maze[y][x] == 1: return 'Dead'
   return 'Lost'


maze = [
   [1, 1, 1, 1, 1, 1, 1],
   [1, 0, 0, 0, 0, 0, 3],
   [1, 0, 1, 0, 1, 0, 1],
   [0, 0, 1, 0, 0, 0, 1],
   [1, 0, 1, 0, 1, 0, 1],
   [1, 0, 0, 0, 0, 0, 1],
   [1, 2, 1, 0, 1, 0, 1],
]
print(maze_runner(maze, ["N", "N", "N", "N", "N", "E", "E", "E", "E", "E"]), "Finish")
print(maze_runner(maze, ["N", "N", "N", "W", "W"]), "Dead")
print(maze_runner(maze, ["N", "E", "E", "E", "E"]), "Lost")