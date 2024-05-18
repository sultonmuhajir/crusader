"""
|--------------------------------------------------------------------------
| If you can read this...
|--------------------------------------------------------------------------
|
"""

from preloaded import NATO
def to_nato(words):
   res = []
   for char in words:
      if char.isalpha():
         res.append(NATO[char.upper()])
      elif char in '.,!?':
         res.append(char)
   return ' '.join(res)


def to_nato(words):
   return " ".join(NATO.get(c, c) for c in words.upper() if c != " ")


def to_nato(words):
   return ' '.join(NATO.get(i,i) for i in words.upper().replace(' ',''))


print(to_nato('If you can read'), "India Foxtrot Yankee Oscar Uniform Charlie Alfa November Romeo Echo Alfa Delta")
print(to_nato('Did not see that coming'), "Delta India Delta November Oscar Tango Sierra Echo Echo Tango Hotel Alfa Tango Charlie Oscar Mike India November Golf")
print(to_nato('.d?d!'),'. Delta ? Delta !')