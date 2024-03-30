"""
|--------------------------------------------------------------------------
| Consecutive strings
|--------------------------------------------------------------------------
|
"""

def longest_consec(strarr, k):
   if len(strarr) == 0 or k > len(strarr) or k <= 0: return ""
   res = ""
   for i in range(len(strarr) - k + 1):
      curr = ''.join(strarr[i:i + k])
      if len(curr) > len(res): res = curr
   return res


def longest_consec(strarr, k):
   return max([''.join(tuple) for tuple in zip(*[strarr[i:] for i in range(k)])] + [''], key=len)


def longest_consec(strarr, k):
   if len(strarr) == 0 or k < 1 or k > len(strarr): return ""
   strarr = ["".join(strarr[i: i+k]) for i in range(len(strarr))]
   return max(strarr, key=len)


print(longest_consec(["zone", "abigail", "theta", "form", "libe", "zas"], 2), "abigailtheta")
print(longest_consec([], 3), "")
print(longest_consec(["wlwsasphmxx","owiaxujylentrklctozmymu","wpgozvxxiu"], 2), "wlwsasphmxxowiaxujylentrklctozmymu")
print(longest_consec(["zone", "abigail", "theta", "form", "libe", "zas"], -2), "")
print(longest_consec(["it","wkppv","ixoyx", "3452", "zzzzzzzzzzzz"], 3), "ixoyx3452zzzzzzzzzzzz")
print(longest_consec(["it","wkppv","ixoyx", "3452", "zzzzzzzzzzzz"], 15), "")
print(longest_consec(["it","wkppv","ixoyx", "3452", "zzzzzzzzzzzz"], 0), "")