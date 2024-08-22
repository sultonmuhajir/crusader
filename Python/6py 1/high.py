"""
|--------------------------------------------------------------------------
| Highest Scoring Word
|--------------------------------------------------------------------------
|
"""

def high(x):
   maxx, res = 0, ""
   for word in x.split(" "):
      score = sum(ord(char) - 96 for char in word)
      if score > maxx: maxx, res = score, word
   return res


def high(x):
   return max(x.split(), key=lambda k: sum(ord(c) - 96 for c in k))


def high(x):
   words=x.split(' ')
   list = []
   for i in words:
      scores = [sum([ord(char) - 96 for char in i])]
      list.append(scores)
   return words[list.index(max(list))]


print(high('man i need a taxi up to ubud'), 'taxi')
print(high('what time are we climbing up the volcano'), 'volcano')
print(high('take me to semynak'), 'semynak')
print(high('aa b'), 'aa')
print(high('b aa'), 'b')
print(high('bb d'), 'bb')
print(high('d bb'), 'd')
print(high("aaa b"), "aaa")