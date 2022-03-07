"""
|--------------------------------------------------------------------------
| Reverse every other word in the string
|--------------------------------------------------------------------------
|
"""

def reverse_alternate(string):
   res = []
   arr = list(filter(lambda i: i != '' , string.split(' ')))
   for i in range(len(arr)):
      if i % 2 != 0:
         res.append(''.join(list(reversed(arr[i]))))
      else:
         res.append(arr[i])
   return ' '.join(res)


def reverse_alternate(string):
   return " ".join(y[::-1] if x%2 else y for x,y in enumerate(string.split()))


def reverse_alternate(s):
   words = s.split()
   words[1::2] = [word[::-1] for word in words[1::2]]
   return ' '.join(words)


def reverse_alternate(string):
   string = string.split()
   res = []
   for i in range(len(string)):
      if (i+1) % 2 == 0:
         res.append(string[i][::-1])
      else :
         res.append(string[i])
   return " ".join(res)


def reverse_alternate(st):
   return ' '.join([c[::(1,-1)[a%2]] for a,c in enumerate(st.strip().split())])


print(reverse_alternate("Did it work?"), "Did ti work?")
print(reverse_alternate("I really hope it works this time..."), "I yllaer hope ti works siht time...")
print(reverse_alternate("Reverse this string, please!"), "Reverse siht string, !esaelp")
print(reverse_alternate("Have a beer"), "Have a beer")
print(reverse_alternate(""), "")
print(reverse_alternate('This       si a  test'))