"""
|--------------------------------------------------------------------------
| Sum of Digits / Digital Root
|--------------------------------------------------------------------------
|
"""

def digital_root(n):
   n =  eval('+'.join(list(str(n))))
   if (n > 9):
      return digital_root(n)
   return n


def digital_root(n):
   return n if n < 10 else digital_root(sum(map(int,str(n))))


def digital_root(n):
   return n % 9 or n and 9 


def digital_root(n):
   return 1 + ((int(n) - 1) % 9) if n>0 else 0


print(digital_root(16), 7)
print(digital_root(942), 6)
print(digital_root(132189), 6)
print(digital_root(493193), 2)