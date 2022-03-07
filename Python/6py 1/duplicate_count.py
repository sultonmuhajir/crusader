"""
|--------------------------------------------------------------------------
| Counting Duplicates
|--------------------------------------------------------------------------
|
"""

def duplicate_count(text):
   arr = list(text.lower())
   c = 0
   for i in set(arr):
      if len(list(filter(lambda x: x == i, arr))) >= 2:
         c += 1
   return c


def duplicate_count(s):
   return len([c for c in set(s.lower()) if s.lower().count(c)>1])


def duplicate_count(text):
   count = 0
   for c in set(text.lower()):
      if text.lower().count(c) > 1:
         count += 1
   return count


def duplicate_count(text):
   text = text.lower()
   return(sum([text.count(c) > 1 for c in set(text)]))


print(duplicate_count(""), 0)
print(duplicate_count("abcde"), 0)
print(duplicate_count("abcdeaa"), 1)
print(duplicate_count("abcdeaB"), 2)
print(duplicate_count("Indivisibilities"), 2)