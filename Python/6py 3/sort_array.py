"""
|--------------------------------------------------------------------------
| Sort the odd
|--------------------------------------------------------------------------
|
"""

def sort_array(array):
   odd = sorted([x for x in array if x % 2 != 0])
   return [odd.pop(0) if x % 2 != 0 else x for x in array]


sort_array=lambda a:(lambda x:[next(x)if e%2 else e for e in a])(filter(2..__rmod__,sorted(a)))


def sort_array(source_array):
   result = sorted([l for l in source_array if l % 2 == 1])
   for index, item in enumerate(source_array):
      if item % 2 == 0:
         result.insert(index, item)
   return result


print(sort_array([5, 3, 2, 8, 1, 4]), [1, 3, 2, 8, 5, 4])
print(sort_array([5, 3, 1, 8, 0]), [1, 3, 5, 8, 0])
print(sort_array([]),[])