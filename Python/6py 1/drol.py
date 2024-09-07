"""
|--------------------------------------------------------------------------
| Don't rely on luck.
|--------------------------------------------------------------------------
|
"""

from random import randint
class GuessNum:
   def __eq__(self, x):
      return True
guess = GuessNum()


from random import randint
guess = 1


from random import randint,seed
seed(1)
guess = randint(1,100)
seed(1)