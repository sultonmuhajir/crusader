"""
|--------------------------------------------------------------------------
| Fibonacci, Tribonacci and friends
|--------------------------------------------------------------------------
|
"""

def xbonacci(signature, n):
   res = signature[:n]
   for i in range(len(signature), n):
      sum_ = sum(res[i - len(signature):])
      res.append(sum_)
   return res


def Xbonacci(signature,n):
   return signature[:1] + Xbonacci(signature[1:] + [sum(signature)], n-1) if n else []


def Xbonacci(signature,n):
   length = len(signature)
   while len(signature) < n:
      signature.append(sum(signature[-length:]))
   return signature[:n]


print(xbonacci([0,1],10),[0,1,1,2,3,5,8,13,21,34])
print(xbonacci([1,1],10),[1,1,2,3,5,8,13,21,34,55])
print(xbonacci([0,0,0,0,1],10),[0,0,0,0,1,1,2,4,8,16])
print(xbonacci([1,0,0,0,0,0,1],10),[1,0,0,0,0,0,1,2,3,6])