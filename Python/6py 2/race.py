"""
|--------------------------------------------------------------------------
| Tortoise racing
|--------------------------------------------------------------------------
|
"""

def race(v1, v2, g):
   if v1 >= v2: return None
   time = int(g * 3600 / (v2 - v1))
   return [time // 3600, (time % 3600) // 60, time % 60]


def race(v1, v2, g):
   if v2>v1: return [(t:=g/(v2-v1)*3600)//3600, t//60%60, int(t%60)]


def race(v1, v2, g):
   t = 3600 * g/(v2-v1)
   return [t/3600, t/60%60, t%60] if v2 > v1 else None


print(race(720, 850, 70), [0, 32, 18])
print(race(80, 91, 37), [3, 21, 49])
print(race(820, 81, 550), None) 