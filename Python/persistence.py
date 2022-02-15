"""
|--------------------------------------------------------------------------
| Persistent Bugger.
|--------------------------------------------------------------------------
|
"""

from functools import reduce
def persistence(n):
   count = 0
   while (n >= 10):
      arr = []
      string = str(n)
      for i in string:
         arr.append(int(i))
      n = reduce(lambda a, b: a * b, arr)
      count += 1
   return count


from operator import mul
def persistence(n):
   return 0 if n<10 else persistence(reduce(mul,[int(i) for i in str(n)],1))+1


def persistence(n):
   if n < 10: return 0
   mult = 1
   while(n > 0):
      mult = n%10 * mult
      n = n//10
   return persistence(mult) + 1


def persistence(n, count=0):
   return count if n<10 else persistence( eval('*'.join(list(str(n)))), count+1 )


print(persistence(39), 3)
print(persistence(4), 0)
print(persistence(25), 2)
print(persistence(999), 4)