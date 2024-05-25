"""
|--------------------------------------------------------------------------
| Help the bookseller !
|--------------------------------------------------------------------------
|
"""

def stock_list(loa, loc):
   return '' if len(loa) == 0 else ' - '.join([f"({cat} : {sum([int(v.split(' ')[1]) for v in loa if v.startswith(cat)])})" for cat in loc])


def stock_list(arr1, arr2):
   if arr1 and arr2:
      counter = {}
      for i in arr1: counter[i[0]] = counter.get(i[0], 0) + int(i.split()[1])
      return ' - '.join(f'({i} : {counter.get(i, 0)})' for i in arr2)
   return ''


def stock_list(listOfArt, listOfCat):
   if (len(listOfArt) == 0) or (len(listOfCat) == 0):
      return ""
   result = ""
   for cat in listOfCat:
      total = 0
      for book in listOfArt:
         if (book[0] == cat[0]):
            total += int(book.split(" ")[1])
      if (len(result) != 0):
         result += " - "
      result += "(" + str(cat) + " : " + str(total) + ")"
   return result


print(
   stock_list(["BBAR 150", "CDXE 515", "BKWR 250", "BTSQ 890", "DRTY 600"], ["A", "B", "C", "D"]),
   "(A : 0) - (B : 1290) - (C : 515) - (D : 600)"
)
print(
   stock_list(["ABAR 200", "CDXE 500", "BKWR 250", "BTSQ 890", "DRTY 600"], ["A", "B"]),
   "(A : 200) - (B : 1140)"
)