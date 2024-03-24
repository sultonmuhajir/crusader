"""
|--------------------------------------------------------------------------
| Roman Numerals Decoder
|--------------------------------------------------------------------------
|
"""

def solution(roman):
   x = {'I': 1, 'V': 5, 'X': 10, 'L': 50, 'C': 100, 'D': 500, 'M': 1000}
   res, prev= 0, 0
   for char in roman:
      res += x[char]
      if x[char] > prev: 
         res -= 2 * prev
      prev = x[char]
   return res


def solution(roman):
   values = [('M', 1000), ('CM', -200), ('D', 500), ('CD', -200),
         ('C', 100), ('XC', -20), ('L', 50), ('XL', -20),
         ('X', 10), ('IX', -2), ('V', 5), ('IV', -2),
         ('I', 1)]
   return sum(roman.count(s)*v for s,v in values)


def solution(roman): 
   inter = [ {'I':1,'V':5,'X':10,'L':50,'C':100,'D':500,'M':1000 }[i] for i in roman ]+[0]       
   return sum( [-inter[i] if inter[i]<inter[i+1] else inter[i] for i in range(len(inter)-1) ])


print(solution("XXI"), 21)
print(solution("I"), 1)
print(solution("IV"), 4)
print(solution("MMVIII"), 2008)
print(solution("MDCLXVI"), 1666)