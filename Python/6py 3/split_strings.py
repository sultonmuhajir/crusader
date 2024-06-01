"""
|--------------------------------------------------------------------------
| Split Strings
|--------------------------------------------------------------------------
|
"""

def solution(s):
   res = []
   for i in range(0, len(s), 2):
      x = s[i:i+2]
      if len(x) < 2: x += "_"
      res.append(x)
   return res


from re import findall
def solution(s):
   return findall(".{2}", s + "_")


def solution(s):
   return [(s + "_")[i:i + 2] for i in range(0, len(s), 2)]


print(solution("abcdef"), ["ab", "cd", "ef"])
print(solution("abcdefg"), ["ab", "cd", "ef", "g_"])
print(solution(""), [])