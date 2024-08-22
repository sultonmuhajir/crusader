"""
|--------------------------------------------------------------------------
| Which are in?
|--------------------------------------------------------------------------
|
"""

def in_array(array1, array2):
   return sorted(set(a1 for a1 in array1 if any(a1 in a2 for a2 in array2)))


def in_array(array1, array2):
   res = []
   for a1 in array1:
      for a2 in array2:
         if a1 in a2 and not a1 in res:
            res.append(a1)
   res.sort()
   return res


def in_array(a1, a2):
   return sorted(x for x in set(a1) if any(x in y for y in a2))


print(in_array(["arp", "live", "strong"], ["lively", "alive", "harp", "sharp", "armstrong"]), ['arp', 'live', 'strong'])