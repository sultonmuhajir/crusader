"""
|--------------------------------------------------------------------------
| Dashatize it
|--------------------------------------------------------------------------
|
"""

def dashatize(n):
   if n == None:
      return 'None'
   else:
      num = str(abs(n))
      res = ''
      for i in range(len(num)):
         res += num[i] if int(num[i]) % 2 == 0 else f'-{num[i]}-'
      return '-'.join(list(filter(lambda i: i != '' , res.split('-'))))


def dashatize(num):
   try:
      return ''.join(['-'+i+'-' if int(i)%2 else i for i in str(abs(num))]).replace('--','-').strip('-')
   except:
      return 'None'


def dashatize(num):
   num_str = str(num)
   for i in ['1','3','5','7','9']:
      num_str = num_str.replace(i,'-' + i + '-')
   return num_str.strip('-').replace('--','-')


from re import findall
def dashatize(num):
   return '-'.join(findall('([13579]|[02468]+)', str(num))) or 'None'


print(dashatize(274), "2-7-4")
print(dashatize(5311), "5-3-1-1")
print(dashatize(86320), "86-3-20")
print(dashatize(974302), "9-7-4-3-02")
print(dashatize(None), "None")