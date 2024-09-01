"""
|--------------------------------------------------------------------------
| Steps in Primes
|--------------------------------------------------------------------------
|
"""

def is_prime(n):
   for i in range(2,int(n**0.5) + 1):
      if n % i == 0: return False
   return True
def step(g, m, n):
   for i in range(m, n - g):
      if is_prime(i) and is_prime(i + g): return [i,i+g]
   return None
         

from gmpy2 import is_prime
def step(g, m, n):
   for i in range(m, n-g+1):
      if is_prime(i) and is_prime(i+g):
         return [i, i+g]
      

from gmpy2 import next_prime, is_prime
def step(g, m, n):
   m = next_prime(m-1)
   while m<n:
      if is_prime(g+m) and g+m<=n:
         return [m, g+m]
      m = next_prime(m)


print(step(2,100,110), [101, 103])
print(step(4,100,110), [103, 107])
print(step(2,5,5), None)
print(step(6,100,110), [101, 107])
print(step(8,300,400), [359, 367])
print(step(10,300,400), [307, 317])