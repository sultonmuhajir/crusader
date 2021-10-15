"""
|--------------------------------------------------------------------------
| Bit Counting
|--------------------------------------------------------------------------
|
"""

def count_bits(n):
   return len(list(filter(lambda i: i == '1' , bin(n)[2:])))


def countBits(n):
   return bin(n).count("1")


def countBits(n):
   res = 0
   while n > 0:
      res += n % 2
      n >>= 1
   return res


def countBits(n):
   return '{:b}'.format(n).count('1')


def countBits(n):
   return (n & 1) + countBits(n >> 1) if n else 0


print(count_bits(0), 0)
print(count_bits(4), 1)
print(count_bits(7), 3)
print(count_bits(9), 2)
print(count_bits(10), 2)