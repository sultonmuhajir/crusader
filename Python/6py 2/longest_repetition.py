"""
|--------------------------------------------------------------------------
| Character with longest consecutive repetition
|--------------------------------------------------------------------------
|
"""

def longest_repetition(chars):
   max_c, max_n = "", 0
   curr_c, curr_n = "", 0
   for char in chars:
      if char == curr_c:
         curr_n += 1
      else:
         curr_c = char
         curr_n = 1
      if curr_n > max_n:
         max_n = curr_n
         max_c = curr_c
   return (max_c, max_n)


from itertools import groupby
def longest_repetition(chars):
   return max([(x, len(list(gp))) for x, gp in groupby(chars)], key = lambda x: x[1], default = ('', 0))


from re import split
def longest_repetition(a):
   c = max(split(r'((.)\2*)',a),key=len)
   return (c and c[0] or '',len(c))


print(longest_repetition("aaaabb"), ["a", 4])
print(longest_repetition("bbbaaabaaaa"), ["a", 4])
print(longest_repetition("cbdeuuu900"), ["u", 3])
print(longest_repetition("abbbbb"), ["b", 5])
print(longest_repetition("aabb"), ["a", 2])
print(longest_repetition(""), ["", 0])
print(longest_repetition("ba"), ["b", 1])