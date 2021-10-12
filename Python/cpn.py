"""
|--------------------------------------------------------------------------
| Create Phone Number
|--------------------------------------------------------------------------
|
"""

def create_phone_number(n):
   return f'({n[0]}{n[1]}{n[2]}) {n[3]}{n[4]}{n[5]}-{n[6]}{n[7]}{n[8]}{n[9]}'


def create_phone_number(n):
   return "({}{}{}) {}{}{}-{}{}{}{}".format(*n)


def create_phone_number(n):
   str1 =  ''.join(str(x) for x in n[0:3])
   str2 =  ''.join(str(x) for x in n[3:6])
   str3 =  ''.join(str(x) for x in n[6:10])
   return '({}) {}-{}'.format(str1, str2, str3)


def create_phone_number(n):
   m = ''.join(map(str, n))
   return f"({m[:3]}) {m[3:6]}-{m[6:]}"


def create_phone_number(n):
   return "(%i%i%i) %i%i%i-%i%i%i%i" % tuple(n)


print(create_phone_number([1, 2, 3, 4, 5, 6, 7, 8, 9, 0]), "(123) 456-7890")
print(create_phone_number([1, 1, 1, 1, 1, 1, 1, 1, 1, 1]), "(111) 111-1111")
print(create_phone_number([1, 2, 3, 4, 5, 6, 7, 8, 9, 0]), "(123) 456-7890")
print(create_phone_number([0, 2, 3, 0, 5, 6, 0, 8, 9, 0]), "(023) 056-0890")
print(create_phone_number([0, 0, 0, 0, 0, 0, 0, 0, 0, 0]), "(000) 000-0000")