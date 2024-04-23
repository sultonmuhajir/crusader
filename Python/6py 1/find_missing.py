"""
|--------------------------------------------------------------------------
| Find the missing term in an Arithmetic Progression
|--------------------------------------------------------------------------
|
"""

def find_missing(sequence):
   n = len(sequence)
   x1 = sequence[1] - sequence[0]
   x2 = sequence[n - 1] - sequence[n - 2]
   x = abs(x1) if abs(x1) < abs(x2) else x2
   for i in range(1, n):
      if sequence[i] - sequence[i - 1] != x:
         return sequence[i - 1] + x
      

def find_missing(sequence):
   return (sequence[-1] + sequence[0]) * (len(sequence) + 1) / 2 - sum(sequence)


def find_missing(sequence):
   interval = (sequence[-1] - sequence[0])/len(sequence)
   for previous, item in enumerate(sequence[1:]):
      if item - sequence[previous] != interval:
         return item - interval


print(find_missing([1, 2, 3, 4, 6, 7, 8, 9]), 5)
print(find_missing([1, 3, 4, 5, 6, 7, 8, 9]), 2)