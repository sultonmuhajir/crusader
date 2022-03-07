"""
|--------------------------------------------------------------------------
| Exclamation marks series #17: Put the exclamation marks and question marks on the balance - are they balanced?
|--------------------------------------------------------------------------
|
"""

def balance(left, right):
   res = 0
   for i in range(len(left)):
      res += 2 if left[i] == '!' else 3
   for j in range(len(right)):
      res -= 2 if right[j] == '!' else 3
   return "Right" if res < 0 else "Left" if res > 0 else "Balance"


def balance(left, right):
   return ('Balance', 'Left', 'Right')[min(1, max(-1, 2 * (len(left) - len(right)) + left.count('?') - right.count('?')))]


def balance(left, right):
   val = ((left.count('!') * 2) + (left.count('?') * 3)) - ((right.count('!') * 2) + (right.count('?') * 3))
   return 'Right' if val < 0 else 'Left' if val > 0 else 'Balance'


def balance(left, right):
   x = 2*len(left) + left.count('?')
   y = 2*len(right) + right.count('?')
   return "Balance" if x == y else "Left" if x > y else "Right"
  

print(balance("","") , "Balance")
print(balance("!!","??") , "Right")
print(balance("!??","?!!") , "Left")
print(balance("!?!!","?!?") , "Left")
print(balance("!!???!????","??!!?!!!!!!!") , "Balance")