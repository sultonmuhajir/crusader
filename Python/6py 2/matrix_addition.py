"""
|--------------------------------------------------------------------------
| Matrix Addition
|--------------------------------------------------------------------------
|
"""

def matrix_addition(a, b):
   res = []
   for i in range(len(a)):
      row = []
      for j in range(len(a[i])):
         row.append(a[i][j] + b[i][j])
      res.append(row)
   return res


def matrix_addition(a, b):
   return [[sum(xs) for xs in zip(ra, rb)] for ra, rb in zip(a, b)]


from numpy import matrix
def matrix_addition(a, b):
   return (matrix(a) + matrix(b)).tolist()