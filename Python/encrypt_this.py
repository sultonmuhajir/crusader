"""
|--------------------------------------------------------------------------
| Encrypt this!
|--------------------------------------------------------------------------
|
"""

def encrypt_this(text):
   t = text.split(' ')
   res = []
   for i in range(len(t)):
      tmp = ''
      if len(t[i]) < 1:
         return ''
      elif len(t[i]) == 1:
         tmp += str(ord(t[i][0]))
      elif len(t[i]) > 2:
         tmp += str(ord(t[i][0]))
         tmp += t[i][-1]
         tmp += t[i][slice(2, -1)]
         tmp += t[i][1]
      else:
         tmp += str(ord(t[i][0]))
         tmp += t[i][1]
      res.append(tmp)
   return ' '.join(res)


from re import sub
def encrypt_this(text):
   return ' '.join(sub('^\w',lambda x: str(ord(x[0])), sub(r'^(\w)(\w)?(.*?)?(\w)?$',r'\1\4\3\2',i)) for i in text.split())


def encrypt_this(text):
   return " ".join( [
      str(ord(p[0])) + p[2:][-1:] + p[2:len(p)-1] + p[1:2]
      for p in text.split()
   ])


def e(word):
   first, *rest = word
   return ''.join([str(ord(first))] + rest[-1:] + rest[1:-1] + rest[:len(rest) > 1])
def encrypt_this(text):
   return ' '.join(map(e, text.split()))


print(encrypt_this("A wise old owl lived in an oak"), "65 119esi 111dl 111lw 108dvei 105n 97n 111ka");