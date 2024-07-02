"""
|--------------------------------------------------------------------------
| Find The Parity Outlier
|--------------------------------------------------------------------------
|
"""

def find_outlier(integers):
   even = list(filter(lambda i: abs(i) % 2 == 0 , integers))
   odd = list(filter(lambda i: abs(i) % 2 == 1 , integers))
   return even[0] if len(even) == 1 else odd[0]


def find_outlier(integers):
   parity = [n % 2 for n in integers]
   return integers[parity.index(1)] if sum(parity) == 1 else integers[parity.index(0)]


def find_outlier(int):
   odds = [x for x in int if x%2!=0]
   evens= [x for x in int if x%2==0]
   return odds[0] if len(odds)<len(evens) else evens[0]


def find_outlier(integers):
   even = filter(lambda x: x % 2 == 0, integers)
   return even[0] if len(even) == 1 else list(set(integers) - set(even))[0]


print(find_outlier([2, 4, 6, 8, 10, 3]), 3)
print(find_outlier([2, 4, 0, 100, 4, 11, 2602, 36]), 11)
print(find_outlier([160, 3, 1719, 19, 11, 13, -21]), 160)