"""
|--------------------------------------------------------------------------
| Length of missing array
|--------------------------------------------------------------------------
|
"""

def get_length_of_missing_array(x):
   if x == None or len(x) == 0:
      return 0
   else:
      res = []
      for i in range(len(x)):
         if x[i] == None:
            return 0
         else:
            res.append(len(x[i]))
      arr = sorted(res)
      if arr[0] == 0:
         return 0
      else:
         last = arr[len(arr)-1]
         i = 0
         for j in range(arr[0], last):
            if j != arr[i]:
               return j
            i+=1


def get_length_of_missing_array(a):
   lns = a and all(a) and list(map(len, a))
   return bool(lns) and sum(range(min(lns), max(lns) + 1)) - sum(lns)


def get_length_of_missing_array(arr):
   if not arr or any(type(a) != list or not len(a) for a in arr):
      return 0
   lengths = set(len(a) for a in arr)
   return (set(range(min(lengths), max(lengths)+1)) - set(lengths)).pop()


def get_length_of_missing_array(array_of_arrays):
   try:
      lengths = [len(array) for array in array_of_arrays]
      return 0 if 0 in lengths \
         else [missing for missing in range(min(lengths), max(lengths)) if missing not in lengths][0]
   except:
      return 0


print(get_length_of_missing_array([
   [1, 0, 3, 3, 3, 1, 2, 3, 4, 0, 4],
   [4, 2],
   [1, 4, 4, 3, 1],
   [3, 1, 2, 0, 2, 4, 1],
   [],
   [3, 1, 0],
   [1, 1, 2, 0],
   [2, 4, 0, 3, 2, 2, 3, 0],
   [4, 0, 1, 0, 0, 4],
   [2, 4, 3, 0, 0, 3, 3, 0, 3],
   [4, 4, 3, 3, 2, 3, 4, 0, 0, 2]
]), 0)
print(get_length_of_missing_array([]), 0)
print(get_length_of_missing_array([None]), 0)