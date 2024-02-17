"""
|--------------------------------------------------------------------------
| Equal Sides Of An Array
|--------------------------------------------------------------------------
|
"""

def find_even_index(arr):
   for i in range(len(arr)):
      if sum(arr[:i]) == sum(arr[i+1:]): return i
   return -1


find_even_index = lambda arr: next((i for i, __ in enumerate(arr) if sum(arr[:i]) == sum(arr[i+1:])), -1)


def find_even_index(arr):
   left, right = 0, sum(arr)
   for i, e in enumerate(arr):
      right -= e
      if left == right: return i
      left += e
   return -1


print(find_even_index([1,2,3,4,3,2,1]),3)
print(find_even_index([1,100,50,-51,1,1]),1,)
print(find_even_index([1,2,3,4,5,6]),-1)
print(find_even_index([20,10,30,10,10,15,35]),3)
print(find_even_index([20,10,-80,10,10,15,35]),0)