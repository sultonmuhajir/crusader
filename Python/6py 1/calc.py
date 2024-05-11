"""
|--------------------------------------------------------------------------
| Reverse polish notation calculator
|--------------------------------------------------------------------------
|
"""

from re import match
def calc(expr):
   stack, tokens = [0], expr.split(" ")
   for token in tokens:
      if match(r'\d', token):
         stack.append(float(token))
      else:
         operation = token.join(map(str, stack[-2:]))
         stack = stack[:-2]
         stack.append(eval(operation))
   return stack.pop()


def calc(expr):
   stack = []
   [stack.append(eval("{1}{2}{0}".format(stack.pop(), stack.pop(), e)) if e in ('+', '-', '/', '*') else e) for e in expr.split()]
   return float(stack.pop()) if stack else 0


def calc(expr):
   if len(expr) > 0:
      a,b = ['+','-','*','/'],[]
      for i in expr.split():
         if i not in a:
            b.append(i)
         else:
            n = int(b.pop())
            m = int(b.pop())
            if i == '+': c = m + n
            elif i == '-': c = m - n
            elif i == '*': c = m * n
            elif i == '/': c = m / n
            b.append(str(c))
      return eval(b[0])
   return 0


print(calc(""), 0)
print(calc("3"), 3)
print(calc("3.5"), 3.5)
print(calc("1 3 +"), 4)
print(calc("1 3 *"), 3)
print(calc("1 3 -"), -2)
print(calc("4 2 /"), 2)