"""
|--------------------------------------------------------------------------
| Lottery Ticket
|--------------------------------------------------------------------------
|
"""

def bingo(ticket, win):
   res = sum(1 for string, num in ticket if any(ord(char) == num for char in string))
   return "Winner!" if res >= win else "Loser!"


def bingo(ticket, win):
   return 'Winner!' if sum(chr(n) in s for s, n in ticket) >= win else 'Loser!'


def bingo(ticket,win):
   counter = 0
   for x,y in ticket:
      for i in x: counter += 1 if ord(i) == y else 0 
   return 'Loser!' if counter < win else 'Winner!'


print(bingo([['ABC', 65], ['HGR', 74], ['BYHT', 74]], 2), 'Loser!')
print(bingo([['ABC', 65], ['HGR', 74], ['BYHT', 74]], 1), 'Winner!')
print(bingo([['HGTYRE', 74], ['BE', 66], ['JKTY', 74]], 3), 'Loser!')