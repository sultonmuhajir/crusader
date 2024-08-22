"""
|--------------------------------------------------------------------------
| Is a number prime?
|--------------------------------------------------------------------------
|
"""

def is_prime(num):
   even = 2
   while ((even * even <= num) and (num % even != 0)):
      even += 1
   return even * even > num and num > 1


from math import sqrt
def is_prime(n):
   return n > 1 and all(n % d for d in xrange(2, int(sqrt(n)) + 1))


def is_prime(n):
   return n>1 and all(n%i for i in range(2, int(n**.5+1)))


import gmpy2
def is_prime(num):
   return gmpy2.is_prime(num) if num > 0 else False


print(is_prime(0),  False)
print(is_prime(1),  False)
print(is_prime(2),  True)
print(is_prime(73), True)
print(is_prime(75), False)
print(is_prime(-1), False)