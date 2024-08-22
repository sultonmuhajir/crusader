"""
|--------------------------------------------------------------------------
| A Rule of Divisibility by 13
|--------------------------------------------------------------------------
|
"""

def thirt(n):
   arr = [1, 10, 9, 12, 3, 4]
   res, prev = n, 0
   while res != prev:
      prev = res
      res = sum(int(x) * arr[i % len(arr)] for i, x in enumerate(str(res)[::-1]))
   return res


def thirt(n):
   ans = sum([int(val)*((10**key)%13) for key, val in enumerate(str(n)[::-1])])
   return n if ans == n else thirt(ans)


from itertools import cycle
def thirt(n):
   c = cycle([1, 10, 9, 12, 3, 4])
   m = sum( int(l)*next(c) for l in str(n)[::-1] )
   return m if m == n else thirt(m)


print(thirt(8529), 79)
print(thirt(85299258), 31)
print(thirt(5634), 57)
print(thirt(1111111111), 71)
print(thirt(987654321), 30)