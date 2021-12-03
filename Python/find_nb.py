"""
|--------------------------------------------------------------------------
| Build a pile of Cubes
|--------------------------------------------------------------------------
|
"""

def find_nb(m):
   n = 0
   x = 0
   while x < m:
      n += 1
      x += pow(n, 3)
   return n if x == m else -1


def find_nb(m):
   a = int((2*m**0.5)**0.5)
   if (a*(a+1)/2)**2 == m:
      return a
   return -1


from math import sqrt, floor
def find_nb(m):
   return (-1 + sqrt(1 + 8 * sqrt(m))) / 2 if int(sqrt(m)) ** 2 == m else -1


def find_nb(m):
   n = floor((4 * m) ** 0.25)
   return n if int(n * (n + 1) / 2) ** 2 == m else -1


print(find_nb(4183059834009), 2022)
print(find_nb(24723578342962), -1)
print(find_nb(135440716410000), 4824)
print(find_nb(40539911473216), 3568)
print(find_nb(26825883955641), 3218)