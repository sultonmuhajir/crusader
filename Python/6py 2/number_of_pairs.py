"""
|--------------------------------------------------------------------------
| Pair of gloves
|--------------------------------------------------------------------------
|
"""

from collections import Counter
def number_of_pairs(gloves):
   color_count = Counter(gloves)
   return sum(count // 2 for count in color_count.values())


def number_of_pairs(gloves):
   return sum(gloves.count(color)//2 for color in set(gloves))


def number_of_pairs(gloves):
   result = 0
   for glove in set(gloves):
      result += gloves.count(glove) // 2
   return result


print(number_of_pairs(["red","red"]),1)
print(number_of_pairs(["red","green","blue"]),0)
print(number_of_pairs(["gray","black","purple","purple","gray","black"]),3)
print(number_of_pairs([]),0)
print(number_of_pairs(["red","green","blue","blue","red","green","red","red","red"]),4)