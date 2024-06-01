"""
|--------------------------------------------------------------------------
| Pascal's Triangle
|--------------------------------------------------------------------------
|
"""

def pascals_triangle(n):
   res = []
   for i in range(n):
      x = len(res) - i
      for j in range(i + 1):
         res.append(1) if j == 0 or j == i else res.append(res[x + j] + res[x + j - 1])
   return res


from scipy.special import comb
def pascals_triangle(n):
   return [comb(a, b, exact=True) for a in range(n) for b in range(a + 1)]


def pascals_triangle(n):
   x = [[1]]
   while n>1:
      m = x[-1]
      m = [1] + [i+j for i,j in zip(m, m[1:])] + [1]
      x += [m]
      n -= 1
   return [i for j in x for i in j]


print(pascals_triangle(1), [1])
print(pascals_triangle(2), [1, 1, 1])
print(pascals_triangle(4), [1, 1, 1, 1, 2, 1, 1, 3, 3, 1])