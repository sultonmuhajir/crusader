"""
|--------------------------------------------------------------------------
| Primorial Of a Number
|--------------------------------------------------------------------------
|
"""

def is_prime(num):
   return num > 1 and all(num % i for i in range(2, int(num**0.5) + 1))
def num_primorial(n):
   primes, num = [], 2
   while len(primes) < n:
      if is_prime(num): primes.append(num)
      num += 1
   res = 1
   for prime in primes: res *= prime
   return res


def num_primorial(n):
   primorial, x, n = 2, 3, n-1
   while n:
      if all(x % d for d in range(3, int(x ** .5) + 1, 2)):
         primorial *= x
         n -= 1
      x += 2
   return primorial


from gmpy2 import next_prime
def num_primorial(n: int) -> int:
   p = prev = 1
   for _ in range(n):
      prev = next_prime(prev)
      p *= prev
   return p


print(num_primorial(3),30)
print(num_primorial(4),210)
print(num_primorial(5),2310)
print(num_primorial(8),9699690)
print(num_primorial(9),223092870)