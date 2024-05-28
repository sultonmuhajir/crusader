"""
|--------------------------------------------------------------------------
| Rectangle into Squares
|--------------------------------------------------------------------------
|
"""

def sq_in_rect(lng, wdth):
   if lng == wdth:
      return None
   squares = []
   while lng != 0 and wdth != 0:
      if lng > wdth:
         squares.append(wdth)
         lng -= wdth
      else:
         squares.append(lng)
         wdth -= lng
   return squares


def sqInRect(lng, wdth, ret = []):
   return None if lng==wdth else ret if not wdth else ([wdth]*(lng//wdth)) +  sqInRect(wdth, lng%wdth, ret) 


def sqInRect(a, b):
   if a == b: return None
   if not b: return []
   return [b] * (a // b) + sqInRect(b, a % b)


print(sq_in_rect(5, 5), None)
print(sq_in_rect(5, 3), [3, 2, 1, 1])
print(sq_in_rect(3, 5), [3, 2, 1, 1])
print(sq_in_rect(20, 14), [14, 6, 6, 2, 2, 2])