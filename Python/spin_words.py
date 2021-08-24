"""
|--------------------------------------------------------------------------
| Stop gninnipS My sdroW!
|--------------------------------------------------------------------------
|
"""

def spin_words(sentence):
   arr = sentence.split(" ")
   res = []
   for i in range(len(arr)):
      if len(arr[i]) >= 5:
         res.append(''.join(reversed(arr[i])))
      else:
         res.append(arr[i])
   return ' '.join(res)


def spin_words(sentence):
   return " ".join([x[::-1] if len(x) >= 5 else x for x in sentence.split(" ")])


import re
def spin_words(sentence):
   return re.sub(r"\w{5,}", lambda w: w.group(0)[::-1], sentence)


def spin_words(sentence):
   words = [word for word in sentence.split(" ")]
   words = [word if len(word) < 5 else word[::-1] for word in words]
   return " ".join(words)


print(spin_words("Welcome"), "emocleW")
print(spin_words("Hey fellow warriors"), "Hey wollef sroirraw")
print(spin_words("This is a test"), "This is a test")
print(spin_words("This is another test"), "This is rehtona test")
print(spin_words("You are almost to the last test"), "You are tsomla to the last test")
print(spin_words("Just kidding there is still one more"), "Just gniddik ereht is llits one more")
print(spin_words("Seriously this is the last one"), "ylsuoireS this is the last one")