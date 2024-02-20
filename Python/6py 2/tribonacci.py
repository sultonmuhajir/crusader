"""
|--------------------------------------------------------------------------
| Tribonacci Sequence
|--------------------------------------------------------------------------
|
"""

def tribonacci(signature, n):
   if n == 0: return []
   res = signature[:n]
   while len(res) < n:
      x = sum(res[-3:])
      res.append(x)
   return res


def tribonacci(signature,n):
   return signature[:n] if n<=len(signature) else tribonacci(signature + [sum(signature[-3:])],n)


def tribonacci(s, n):
   for i in range(3, n): s.append(s[i-1] + s[i-2] + s[i-3])
   return s[:n]


print(tribonacci([1, 1, 1], 10), [1, 1, 1, 3, 5, 9, 17, 31, 57, 105])
print(tribonacci([0, 0, 1], 10), [0, 0, 1, 1, 2, 4, 7, 13, 24, 44])
print(tribonacci([0, 1, 1], 10), [0, 1, 1, 2, 4, 7, 13, 24, 44, 81])