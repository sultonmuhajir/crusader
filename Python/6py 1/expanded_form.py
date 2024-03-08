"""
|--------------------------------------------------------------------------
| Write Number in Expanded Form
|--------------------------------------------------------------------------
|
"""

def expanded_form(num):
   res = []
   for i in range(len(str(num))):
      if str(num)[i] != "0": res.append(str(num)[i] + "0" * (len(str(num)) - i - 1))
   return " + ".join(res)


def expanded_form(num):
   return ' + '.join([x+'0'*i for i,x in enumerate(str(num)[::-1]) if x != '0'][::-1])


def expanded_form(num):
   num = str(num)
   st = ''
   for j, i in enumerate(num):
      if i != '0':
         st += ' + {}{}'.format(i, (len(num[j+1:])*'0'))
   return st.strip(' +')


print(expanded_form(12), '10 + 2')
print(expanded_form(42), '40 + 2')
print(expanded_form(70304), '70000 + 300 + 4')