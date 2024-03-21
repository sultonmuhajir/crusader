"""
|--------------------------------------------------------------------------
| Roman Numerals Encoder
|--------------------------------------------------------------------------
|
"""

def solution(num):
   x = {
      'M': 1000, 'CM': 900, 'D': 500, 'CD': 400,
      'C': 100, 'XC': 90, 'L': 50, 'XL': 40,
      'X': 10, 'IX': 9, 'V': 5, 'IV': 4, 'I': 1
   }
   res = ''
   for key, value in x.items():
      while num >= value:
         res += key
         num -= value
   return res


def solution(n):
   ones = ['', 'I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX']
   tens = ['', 'X', 'XX', 'XXX', 'XL', 'L', 'LX', 'LXX', 'LXXX', 'XC']
   hundreds = ['', 'C', 'CC', 'CCC', 'CD', 'D', 'DC', 'DCC', 'DCCC', 'CM']
   thousands = ['', 'M', 'MM', 'MMM']
   return thousands[n//1000] + hundreds[n//100%10] + tens[n//10%10] + ones[n%10]


def solution(n):
   table = zip(
      [1000,900,500,400,100,90,50,40,10,9,5,4,1],
      ['M','CM','D','CD','C','XC','L','XL','X','IX','V','IV','I']
   )
   result = []
   for d, r in table:
      while n >= d:
         result.append(r)
         n -= d
   return ''.join(result)


print(solution(1001), "MI")
print(solution(1990), "MCMXC")
print(solution(2007), "MMVII")
print(solution(11), "XI")
print(solution(19), "XIX")
print(solution(22), "XXII")
print(solution(15), "XV")