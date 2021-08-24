"""
|--------------------------------------------------------------------------
| Replace With Alphabet Position
|--------------------------------------------------------------------------
|
"""

def alphabet_position(text):
   res = []
   teks = list(text.lower())
   alp = list("abcdefghijklmnopqrstuvwxyz")
   for i in range(len(teks)):
      for j in range(len(alp)):
         if teks[i] == alp[j]:
            res.append(str(j + 1))
   return ' '.join(res)


def alphabet_position(text):
   return ' '.join(str(ord(c) - 96) for c in text.lower() if c.isalpha())


import string
def alphabet_position(text):
   return " ".join([str(string.lowercase.index(letter.lower())+1) for letter in list(text) if letter.isalpha()])


def alphabet_position(text):
   al = 'abcdefghijklmnopqrstuvwxyz'
   return " ".join(filter(lambda a: a != '0', [str(al.find(c) + 1) for c in text.lower()]))


import re
def alphabet_position(text):
   return " ".join([str(ord(i) - 96) for i in re.findall('[a-z]', text.lower())])


print(alphabet_position("The sunset sets at twelve o' clock."), "20 8 5 19 21 14 19 5 20 19 5 20 19 1 20 20 23 5 12 22 5 15 3 12 15 3 11")
print(alphabet_position("The narwhal bacons at midnight."), "20 8 5 14 1 18 23 8 1 12 2 1 3 15 14 19 1 20 13 9 4 14 9 7 8 20")