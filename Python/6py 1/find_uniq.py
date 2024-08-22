"""
|--------------------------------------------------------------------------
| Find the unique number
|--------------------------------------------------------------------------
|
"""

def find_uniq(arr):
   x = sorted(arr)
   return x[0] if x[0] != x[1] else x.pop()


def find_uniq(arr):
   return [x for x in set(arr) if arr.count(x) == 1][0]


from collections import Counter
def find_uniq(a):
   return Counter(a).most_common()[-1][0]


def find_uniq(arr):
   return min(set(arr),key=arr.count)


print(find_uniq([ 1, 1, 1, 2, 1, 1 ]), 2)
print(find_uniq([ 0, 0, 0.55, 0, 0 ]), 0.55)
print(find_uniq([ 3, 10, 3, 3, 3 ]), 10)