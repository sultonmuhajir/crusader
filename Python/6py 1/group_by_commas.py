"""
|--------------------------------------------------------------------------
| Grouped by commas
|--------------------------------------------------------------------------
|
"""

def group_by_commas(n):
   res = []
   x = list(reversed(str(n)))
   for i in range(len(x)):
      if i % 3 == 0 and i != 0:
         res.append(',')
      res.append(x[i])
   return ''.join(list(reversed(res)))


def group_by_commas(n):
   return f'{n:,}'


def group_by_commas(n):
   n = [i for i in str(n)]
   for i in range(len(n) -4, -1, -3):
      n.insert(i+1, ',')
   return ''.join(n)


def group_by_commas(n):
   return format(n,',')


def group_by_commas(n):
   n = str(n)[::-1]
   res = ''
   while n:
      res += n[:3] + ','
      n = n[3:]
   return res[::-1].strip(',')


print(group_by_commas(1), '1')
print(group_by_commas(10), '10')
print(group_by_commas(100), '100')
print(group_by_commas(1000), '1,000')
print(group_by_commas(10000), '10,000')
print(group_by_commas(100000), '100,000')
print(group_by_commas(1000000), '1,000,000')
print(group_by_commas(35235235), '35,235,235')