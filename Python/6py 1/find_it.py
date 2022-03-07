"""
|--------------------------------------------------------------------------
| Find the odd int
|--------------------------------------------------------------------------
|
"""

import functools
def find_it(seq):
   return functools.reduce(lambda a, b: a ^ b, seq)


def find_it(seq):
   return [x for x in seq if seq.count(x) % 2][0]


from itertools import groupby
def find_it(seq):
   return next(k for k, g in groupby(sorted(seq)) if len(list(g)) % 2)


def find_it(seq):
   odds = set()
   for i in seq:
      odds.symmetric_difference_update(set([i]))
   return odds.pop()


from collections import Counter
def find_it(seq):
   return [c for c in Counter(seq).items() if c[1] % 2 == 1][0][0]


print(find_it([20,1,-1,2,-2,3,3,5,5,1,2,4,20,4,-1,-2,5]), 5)
print(find_it([1,1,2,-2,5,2,4,4,-1,-2,5]), -1)
print(find_it([20,1,1,2,2,3,3,5,5,4,20,4,5]), 5)
print(find_it([10]), 10)
print(find_it([10, 10, 10]), 10)
print(find_it([1,1,1,1,1,1,10,1,1,1,1]), 10)
print(find_it([5,4,3,2,1,5,4,3,2,10,10]), 1)