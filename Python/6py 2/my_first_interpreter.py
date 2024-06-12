"""
|--------------------------------------------------------------------------
| Esolang Interpreters #1 - Introduction to Esolangs and My First Interpreter (MiniStringFuck)
|--------------------------------------------------------------------------
|
"""

def my_first_interpreter(code):
   res, x = "", 0
   for char in code:
      if char == "+":
         x = (x + 1) % 256
      elif char == ".":
         res += chr(x)
   return res


def my_first_interpreter(code):
   return "".join([chr(code[:i].count("+") % 256) for i, c in enumerate(code) if c == "."])


def my_first_interpreter(code):
   out = ''
   al = 0
   for c in code:
      if c == '+' : al = (al+1)%256
      if c == '.' : out += (chr(al))
   return out


print(my_first_interpreter('+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++.+.+.+.+.+.+.+.+.+.+.+.+.+.+.+.+.+.+.+.+.+.+.+.+.+.'), 'ABCDEFGHIJKLMNOPQRSTUVWXYZ')