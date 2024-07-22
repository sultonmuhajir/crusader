"""
|--------------------------------------------------------------------------
| Array Deep Count
|--------------------------------------------------------------------------
|
"""

def deep_count(a):
   count = 0
   def count_helper(arr):
      nonlocal count
      count += len(arr)
      for element in arr:
         if isinstance(element, list): count_helper(element)
   count_helper(a)
   return count


deep_count=d=lambda a:sum(type(e)is not list or d(e)+1for e in a)


def deep_count(a):
   return sum(1 + (deep_count(x) if isinstance(x, list) else 0) for x in a)


print(deep_count([]), 0)
print(deep_count([1, 2, 3]), 3)
print(deep_count(["x", "y", ["z"]]), 4)
print(deep_count([1, 2, [3, 4, [5]]]), 7)
print(deep_count([[[[[[[[[]]]]]]]]]), 8)