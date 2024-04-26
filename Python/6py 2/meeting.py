"""
|--------------------------------------------------------------------------
| Meeting
|--------------------------------------------------------------------------
|
"""

def meeting(s):
   res = []
   names = s.upper().split(";")
   for name in names:
      x = name.split(":")
      res.append(f"({x[1]}, {x[0]})")
   return ''.join(sorted(res))


def meeting(s):
   return ''.join(sorted('({1}, {0})'.format(*(x.split(':'))) for x in s.upper().split(';')))


from re import sub
def meeting(s):
   return ''.join(sorted(sub(r"(\w+):(\w+)", r"(\2, \1)", s.upper()).split(';')))


print(
   meeting(
      "Alexis:Wahl;John:Bell;Victoria:Schwarz;Abba:Dorny;Grace:Meta;Ann:Arno;Madison:STAN;Alex:Cornwell;Lewis:Kern;Megan:Stan;Alex:Korn"
   ),
   "(ARNO, ANN)(BELL, JOHN)(CORNWELL, ALEX)(DORNY, ABBA)(KERN, LEWIS)(KORN, ALEX)(META, GRACE)(SCHWARZ, VICTORIA)(STAN, MADISON)(STAN, MEGAN)(WAHL, ALEXIS)"
)