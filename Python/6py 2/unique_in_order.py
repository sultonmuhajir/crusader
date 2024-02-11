"""
|--------------------------------------------------------------------------
| Unique In Order
|--------------------------------------------------------------------------
|
"""

def unique_in_order(sequence):
   if not sequence: return []
   res = [sequence[0]]
   for i in range(1, len(sequence)):
      if sequence[i] != sequence[i - 1]:
         res.append(sequence[i])
   return res


unique_in_order = lambda l: [z for i, z in enumerate(l) if i == 0 or l[i - 1] != z]


from itertools import groupby
def unique_in_order(iterable):
   return [k for (k, _) in groupby(iterable)]


print(unique_in_order("AAAABBBCCDAABBB"), ["A", "B", "C", "D", "A", "B"]);