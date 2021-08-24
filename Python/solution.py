"""
|--------------------------------------------------------------------------
| Multiples of 3 or 5
|--------------------------------------------------------------------------
|
"""

def solution(number):
   s = 0
   for i in range(number):
      if i % 3 == 0 or i % 5 == 0:
         s+= i
   return s


def solution(number):
   return sum(x for x in range(number) if x % 3 == 0 or x % 5 == 0)


def solution(number):
   threes = range(3, number, 3)
   fives = range(5, number, 5)
   return sum(list(set(threes + fives)))


def solution(number):
   return sum(set(range(0,number,3)) | set(range(0,number,5)))


def solution(number):
   x = number-1
   f = lambda n: n*(n+1)//2
   return 3*f(x//3) + 5*f(x//5) - 15*f(x//15)


print(solution(4), 3)
print(solution(6), 8)
print(solution(16), 60)
print(solution(3), 0)
print(solution(5), 3)
print(solution(15), 45)
print(solution(0), 0)
print(solution(-1), 0)
print(solution(10), 23)
print(solution(20), 78)
print(solution(200), 9168)