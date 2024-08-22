"""
|--------------------------------------------------------------------------
| Detect Pangram
|--------------------------------------------------------------------------
|
"""

def is_pangram(s):
   teks = s.lower()
   teks = set(teks)
   alpha = [ch for ch in teks if ord(ch) in range(ord('a'), ord('z')+1)]
   return len(alpha) == 26


import string
def is_pangram(s):
   return set(string.lowercase) <= set(s.lower())


def is_pangram(s):
   s = s.lower()
   for char in 'abcdefghijklmnopqrstuvwxyz':
      if char not in s:
         return False
   return True


def is_pangram(s):
   return set(string.ascii_lowercase).issubset(s.lower())


def is_pangram(s):
   s = s.lower()
   return all(letter in s for letter in string.lowercase)


print(is_pangram("The quick, brown fox jumps over the lazy dog!"), True)
print(is_pangram("This is not a pangram."), False)