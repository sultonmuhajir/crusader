"""
|--------------------------------------------------------------------------
| String transformer
|--------------------------------------------------------------------------
|
"""

def string_transformer(s):
   x = ''.join([char.lower() if char.isupper() else char.upper() for char in s])
   return ' '.join(reversed(x.split(' ')))


def string_transformer(s):
   return ' ' .join(s.split(' ')[::-1]).swapcase()


def string_transformer(s):
   a = s.split(' ')
   res = []
   for i in a[::-1]:
      res.append(i.swapcase())
   return ' '.join(res)


print(string_transformer("Example string"), "STRING eXAMPLE")
print(string_transformer("Example Input"), "iNPUT eXAMPLE")
print(string_transformer("To be OR not to be That is the Question"), "qUESTION THE IS tHAT BE TO NOT or BE tO")
print(string_transformer(""), "")
print(string_transformer("You Know When  THAT  Hotline Bling"), "bLING hOTLINE  that  wHEN kNOW yOU")
print(string_transformer(" A b C d E f G "), " g F e D c B a ")