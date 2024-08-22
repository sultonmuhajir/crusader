"""
|--------------------------------------------------------------------------
| Build Tower
|--------------------------------------------------------------------------
|
"""

def tower_builder(n_floors):
   res = []
   for i in range(n_floors):
      x, y = "*" * (2 * i + 1), " " * (n_floors - i - 1)
      res.append(y + x + y)
   return res


def tower_builder(n):
   return [f'{"*"*i:^{2*n-1}}' for i in range(1,2*n,2)]


def tower_builder(n):
   return [("*" * (i*2-1)).center(n*2-1) for i in range(1, n+1)]


print(tower_builder(1), ['*', ])
print(tower_builder(2), [' * ', '***'])
print(tower_builder(3), ['  *  ', ' *** ', '*****'])