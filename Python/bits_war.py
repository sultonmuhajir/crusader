"""
|--------------------------------------------------------------------------
| World Bits War
|--------------------------------------------------------------------------
|
"""

def bits_war(numbers):
   pOdd = len(list(filter(lambda i: i == '1', ''.join(list(map(lambda i: "{0:b}".format(i), (filter(lambda i: i%2!=0 and i>0, numbers))))))))
   mOdd = len(list(filter(lambda i: i == '1', ''.join(list(map(lambda i: "{0:b}".format(i), (filter(lambda i: i%2!=0 and i<0, numbers))))))))
   pEven = len(list(filter(lambda i: i == '1', ''.join(list(map(lambda i: "{0:b}".format(i), (filter(lambda i: i%2==0 and i>0, numbers))))))))
   mEven = len(list(filter(lambda i: i == '1', ''.join(list(map(lambda i: "{0:b}".format(i), (filter(lambda i: i%2==0 and i<0, numbers))))))))
   odd = pOdd-mOdd
   even = pEven-mEven
   return 'odds win' if odd > even else 'evens win' if odd < even else 'tie'


bits_war=lambda n: (lambda s: "evens win" if s>0 else "odds win" if s else "tie")(sum(bin(d)[2:].count("1")*(-1)**((d%2 or d<0)-(d%2 and d<0)) for d in n))


def bits_war(numbers):
   FIGHT = sum( sum(map(int, bin(abs(n))[2:])) * (-1)**(n < 0) * (-1)**(n%2 == 0) for n in numbers )
   return ["evens win", "tie", "odds win"][(FIGHT >= 0) + (FIGHT > 0)]


def bits_war(numbers):
   evens = sum([bin(numb).replace('0b', '').count('1') * (-1 if '-' in bin(numb) else 1) for numb in numbers if numb % 2 == 0])
   odds = sum([bin(numb).replace('0b', '').count('1') * (-1 if '-' in bin(numb) else 1) for numb in numbers if numb % 2 != 0])
   return 'odds win' if odds > evens else 'evens win' if evens > odds else 'tie'


def bits_war(numbers):
   scores = sum(f"{n:b}".count("1") * (-1)**(n%2 == (n>0)) for n in numbers)
   return f"{['odds', 'evens'][scores>0]} win" if scores else "tie"


print(bits_war([1,5,12]), "odds win")
print(bits_war([7,-3,20]), "evens win")
print(bits_war([7,-3,-2,6]), "tie")
print(bits_war([-3,-5]), "evens win")
print(bits_war([]), "tie")