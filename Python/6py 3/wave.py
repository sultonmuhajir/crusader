"""
|--------------------------------------------------------------------------
| Mexican Wave
|--------------------------------------------------------------------------
|
"""

def wave(people):
   res = []
   for i in range(len(people)):
      if people[i] != " ": res.append(people[:i] + people[i].upper() + people[i+1:])
   return res


def wave(s):
   return [f'{s[:i]}{s[i].upper()}{s[i+1:]}' for i,x in enumerate(s) if x != ' ']


def wave(str):
   return [str[:i] + str[i].upper() + str[i+1:] for i in range(len(str)) if str[i].isalpha()]


print(wave("hello"), ["Hello", "hEllo", "heLlo", "helLo", "hellO"])