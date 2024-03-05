"""
|--------------------------------------------------------------------------
| Valid Braces
|--------------------------------------------------------------------------
|
"""

def valid_braces(string):
   res, pairs = [], {"(": ")", "[": "]", "{": "}"}
   for x in string:
      if x in pairs: res.append(x)
      else: 
         if not res or pairs[res.pop()] != x: return False
   return len(res) == 0


def validBraces(s, previous = ''):
   while s != previous: previous, s = s, s.replace('[]','').replace('{}','').replace('()','')
   return not s


def validBraces(s):
   pairs = ['{}', '()', '[]']
   while any(pair in s for pair in pairs):
      for pair in pairs: 
         s = s.replace(pair, "")
   return s == ""


print(valid_braces("(){}[]"), True)
print(valid_braces("([{}])"), True)
print(valid_braces("(}"), False)
print(valid_braces("[(])"), False)
print(valid_braces("[({})](]"), False)