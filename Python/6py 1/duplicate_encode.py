"""
|--------------------------------------------------------------------------
| Duplicate Encoder
|--------------------------------------------------------------------------
|
"""

def duplicate_encode(word):
   return ''.join(['(' if word.lower().count(i) == 1 else ')' for i in word.lower()])


from collections import Counter
def duplicate_encode(word):
   word = word.lower()
   counter = Counter(word)
   return ''.join(('(' if counter[c] == 1 else ')') for c in word)


def duplicate_encode(word):
   word = word.upper()
   result = ""
   for char in word:
      result += ')' if word.count(char) > 1 else '('
   return result


print(duplicate_encode("din"),"(((")
print(duplicate_encode("recede"),"()()()")
print(duplicate_encode("Success"),")())())","should ignore case")
print(duplicate_encode("(( @"),"))((")