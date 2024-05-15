"""
|--------------------------------------------------------------------------
| WeIrD StRiNg CaSe
|--------------------------------------------------------------------------
|
"""

def to_weird_case(s):
   return ' '.join([''.join([c.upper() if i % 2 == 0 else c.lower() for i, c in enumerate(w)]) for w in s.split()])


def to_weird_case(words):
   string = words.split()
   sentence = []
   for i in string:
      new_word = ''
      for j in range(len(i)):
         if j%2: new_word += i[j].lower()
         else: new_word += i[j].upper()
      sentence.append(new_word)
   return  ' '.join(sentence)


from re import sub
def to_weird_case(string):
   return sub(r'\w{2}|\w\W|\w$', lambda m: m.group().lower().capitalize(), string)


print(to_weird_case("This"), "ThIs")
print(to_weird_case("is"), "Is")
print(to_weird_case("This is a test"), "ThIs Is A TeSt")