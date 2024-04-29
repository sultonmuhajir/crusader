"""
|--------------------------------------------------------------------------
| Consonant value
|--------------------------------------------------------------------------
|
"""

def solve(s):
   res, temp = 0, 0
   for char in s:
      if char not in 'aeiou':
         temp += ord(char) - 96
         res = max(res, temp)
      else: temp = 0
   return res


def solve(s):
   return max(sum(ord(c) - ord('a') + 1 for c in p) for p in s.translate(str.maketrans('aeiou', '     ')).split())


from re import split
def solve(s):
   return max(sum(ord(c)-96 for c in subs) for subs in split('[aeiou]+', s))


print(solve("cozy"), 51)
print(solve("xyzzy"), 126)
print(solve("zodiac"), 26)
print(solve("chruschtschov"), 80)
print(solve("khrushchev"), 38)
print(solve("strength"), 57)
print(solve("catchphrase"), 73)
print(solve("twelfthstreet"), 103)
print(solve("mischtschenkoana"), 80)