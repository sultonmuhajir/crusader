"""
|--------------------------------------------------------------------------
| Playing with digits
|--------------------------------------------------------------------------
|
"""

def dig_pow(n, p):
   res = 0
   for i in range(len(str(n))):
      res += int(str(n)[i]) ** (p + i)
   return res // n if res % n == 0 else -1


def dig_pow(n, p):
   t = sum( int(d) ** (p+i) for i, d in enumerate(str(n)) )
   return t//n if t%n==0 else -1


def dig_pow(n, p):
   k, fail = divmod(sum(int(d)**(p + i) for i, d in enumerate(str(n))), n)
   return -1 if fail else k


print(dig_pow(89, 1), 1)
print(dig_pow(92, 1), -1)
print(dig_pow(46288, 3), 51)
print(dig_pow(41, 5), 25)
print(dig_pow(114, 3), 9)
print(dig_pow(8, 3), 64)