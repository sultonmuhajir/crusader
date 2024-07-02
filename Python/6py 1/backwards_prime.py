"""
|--------------------------------------------------------------------------
| Backwards Read Primes
|--------------------------------------------------------------------------
|
"""

def is_prime(num):
   if num < 2: return False
   for i in range(2, int(num ** 0.5) + 1):
      if num % i == 0: return False
   return True
def reverse_number(num):
   return int(str(num)[::-1])
def backwards_prime(start, stop):
   return [num for num in range(start, stop + 1) if is_prime(num) and is_prime(reverse_number(num)) and num != reverse_number(num)]


def backwards_prime(start, stop):
   is_prime = lambda n : all(n % a for a in range(3, 1 + int(n ** 0.5), 2)) if n > 2 and n % 2 else n == 2
   return [n for n in range(start + ~start % 2, stop + 1, 2) if is_prime(n) and n != int(str(n)[::-1]) and is_prime(int(str(n)[::-1]))]


from gmpy2 import next_prime, is_prime
def backwards_prime(start, stop):
   res = []
   i = start
   while i<= stop :
      i = next_prime(i)
      if is_prime(int(str(i)[::-1])) and i<=stop and int(str(i)[::-1])!=i: res.append(int(i))
   return res


print(backwards_prime(9900, 10000), [9923, 9931, 9941, 9967])