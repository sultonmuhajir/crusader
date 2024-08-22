"""
|--------------------------------------------------------------------------
| Take a Ten Minutes Walk
|--------------------------------------------------------------------------
|
"""

def is_valid_walk(walk):
   if len(walk) != 10: return False
   x = {'n': 0, 's': 0, 'e': 0, 'w': 0}
   for i in walk: x[i] += 1
   return x['n'] == x['s'] and x['e'] == x['w']


def isValidWalk(walk):
   return len(walk) == 10 and walk.count('n') == walk.count('s') and walk.count('e') == walk.count('w')


def isValidWalk(walk):
   if len(walk) != 10: return False
   x, y = 0, 0
   for direction in walk:
      if direction == 'n': y += 1
      elif direction == 's': y -= 1
      elif direction == 'e': x += 1
      elif direction == 'w': x -= 1
      else: return False
   return x == 0 and y == 0


print(is_valid_walk(["w"]), "should return false")
print(is_valid_walk(["n", "n", "n", "s", "n", "s", "n", "s", "n", "s"]), "should return false")