"""
|--------------------------------------------------------------------------
| Kebabize
|--------------------------------------------------------------------------
|
"""

from re import match, sub
def kebabize(string):
   res = ''
   for i in range(len(string)):
      res += string[i] if string[i] != string[i].upper() else '' if match('^[0-9]', string[i]) else f'-{string[i].lower()}'
   return '-'.join(list(filter(lambda i: i != '' , res.split('-'))))


def kebabize(s):
   return ''.join(c if c.islower() else '-' + c.lower() for c in s if c.isalpha()).strip('-')


def kebabize(string):
   a = ''
   for i in string:
      if i.isupper():
         a += '-' + i.lower()
      if i.islower():
         a += i
   return a.strip('-')


def kebabize(s):
   return sub('\B([A-Z])', r'-\1', sub('\d', '', s)).lower()


print(kebabize('myCamelCasedString'), 'my-camel-cased-string')
print(kebabize('myCamelHas3Humps'), 'my-camel-has-humps')
print(kebabize('SOS'), 's-o-s')
print(kebabize('42'), '')
print(kebabize('CodeWars'), 'code-wars')