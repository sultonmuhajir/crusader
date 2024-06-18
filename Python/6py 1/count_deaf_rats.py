"""
|--------------------------------------------------------------------------
| The Deaf Rats of Hamelin
|--------------------------------------------------------------------------
|
"""

def count_deaf_rats(town):
   town = town.replace(" ", "")
   pI = town.index("P")
   def count_deaf(rats, correct_direction):
      count = 0
      for i in range(0, len(rats), 2):
         rat = rats[i:i + 2]
         if rat != correct_direction: count += 1
      return count
   return count_deaf(town[:pI], "~O") + count_deaf(town[pI + 1:], "O~")


def count_deaf_rats(town):
   return town.replace(' ', '')[::2].count('O')


def count_deaf_rats(town):
   i,m = -1,0
   for c in town:
      if c!=' ' and (i:=i+1)%2 == 0 and c=='O': m+=1
   return m


print(count_deaf_rats("~O~O~O~O P"), 0)
print(count_deaf_rats("P O~ O~ ~O O~"), 1)
print(count_deaf_rats("~O~O~O~OP~O~OO~"), 2)