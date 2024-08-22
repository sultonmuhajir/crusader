"""
|--------------------------------------------------------------------------
| Prize Draw
|--------------------------------------------------------------------------
|
"""

def rank(st, we, n):
   if not st: return "No participants"
   names = st.split(",")
   if n > len(names): return "Not enough participants"
   participants = []
   for i, name in enumerate(names):
      som = len(name) + sum(ord(char) - 64 for char in name.upper())
      participants.append({'name': name, 'winningNumber': som * we[i]})
   participants.sort(key=lambda x: (-x['winningNumber'], x['name']))
   return participants[n - 1]['name']


def rank(st, we, n):
   if not st: return "No participants"
   if n>len(we): return "Not enough participants"
   name_score = lambda name,w: w*(len(name)+sum([ord(c.lower())-96for c in name]))
   scores= [name_score(s,we[i]) for i,s in enumerate(st.split(','))]
   scores = list(zip(st.split(','),scores))    
   scores.sort(key=lambda x: (-x[1],x[0]))
   return scores[n-1][0]


def rank(st, we, n):
   mas = [{i : len(i) + sum([ord(j.upper()) - 64 for j in i])} for i in st.split(",")]
   wining_number = {j : mas[i][j] * we[i] for i in range(len(mas)) for j in mas[i]}
   try:
      return sorted(wining_number, key = lambda x: (-wining_number[x], x))[n-1]
   except:
      return "Not enough participants" if st else "No participants"


print(rank("Addison,Jayden,Sofia,Michael,Andrew,Lily,Benjamin", [4, 2, 1, 4, 3, 1, 2], 4), "Benjamin")
print(rank("Elijah,Chloe,Elizabeth,Matthew,Natalie,Jayden", [1, 3, 5, 5, 3, 6], 2), "Matthew")
print(rank("Aubrey,Olivai,Abigail,Chloe,Andrew,Elizabeth", [3, 1, 4, 4, 3, 2], 4), "Abigail")
print(rank("Lagon,Lily", [1, 5], 2), "Lagon")