"""
|--------------------------------------------------------------------------
| Does my number look big in this?
|--------------------------------------------------------------------------
|
"""

def narcissistic( value ):
   string = str(value)
   res = 0
   for i in range(len(string)):
      res += int(string[i]) ** len(string)
   return res == value


def narcissistic(value):
   return value == sum(int(x) ** len(str(value)) for x in str(value))


def narcissistic( value ):
   digs = map(int, str(value))
   l = len(digs)
   return value == sum(map(lambda x: x**l, digs))


def narcissistic( value ):
   from math import log10
   c = int(log10(value)+1)
   def f(n): return (n % 10)**c + f(n/10) if n!=0 else 0
   return True if value==f(value) else False


def narcissistic( value ):
   s = str(value)
   return sum(map(lambda x: int(x) ** len(s), s)) == value 


print(narcissistic(7), True, '7 is narcissistic');
print(narcissistic(371), True, '371 is narcissistic');
print(narcissistic(122), False, '122 is not narcissistic')
print(narcissistic(4887), False, '4887 is not narcissistic')