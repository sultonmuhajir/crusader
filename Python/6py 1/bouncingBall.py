"""
|--------------------------------------------------------------------------
| Bouncing Balls
|--------------------------------------------------------------------------
|
"""

def bouncingBall(h, bounce, window):
   if h <= 0 or bounce <= 0 or bounce >= 1 or window >= h: return -1
   res = 1
   while h > window:
      h *= bounce
      if h > window: res += 2
   return res


def bouncingBall(h, bounce, window):
   if h <= 0 or bounce <= 0 or bounce >= 1 or window >= h: return -1
   return 2 + bouncingBall(h * bounce, bounce, window)


from math import log
def bouncingBall(h, bounce, window):
   return 2*int(log(window/h)/log(bounce)) + 1 if h > 0 and 0 < bounce < 1 and window < h else -1


print(bouncingBall(3.0, 0.66, 1.5), 3)
print(bouncingBall(30.0, 0.66, 1.5), 15)
print(bouncingBall(3.0, 1.0, 1.5), -1)