"""
|--------------------------------------------------------------------------
| Sequences and Series
|--------------------------------------------------------------------------
|
"""

def get_score(n):
   return n * (n + 1) * 25


def get_score(n):
   return 50*(n*(n+1))/2


def get_score(n):
   z=50
   for x in range(2,n+1):
      z+=x*50
   return z


def get_score(n):
   return sum([x*50 for x in range(n+1)])


def get_score(n):
   return (1+(1<<1<<1))**(1<<1)*n*(n+1)


print(get_score(3))
print(get_score(5))