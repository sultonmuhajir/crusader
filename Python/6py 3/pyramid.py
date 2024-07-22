"""
|--------------------------------------------------------------------------
| Pyramid Array
|--------------------------------------------------------------------------
|
"""

def pyramid(n):
   res = []
   for i in range(n):
      temp = []
      for j in range(i+1):
         temp.append(1)
      res.append(temp)
   return res


pyramid = lambda n:[-~i*[1]for i in range(n)]


def pyramid(n):
   return [[1]*x for x in range(1, n+1)]


pyramid = lambda n:[i*[1]for i in range(1,n+1)]


def pyramid(n):
   result = []
   for i in range (1, n + 1):
      result.append(i * [1])
   return result


print(pyramid(0), [])
print(pyramid(1), [[1]])
print(pyramid(2), [[1], [1, 1]])
print(pyramid(3), [[1], [1, 1], [1, 1, 1]])