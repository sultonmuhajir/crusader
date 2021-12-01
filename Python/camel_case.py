"""
|--------------------------------------------------------------------------
| CamelCase Method
|--------------------------------------------------------------------------
|
"""

def camel_case(string):
   res = []
   x = string.split(' ')
   for i in range(len(x)):
      if x[i] != '':
         res.append(f'{x[i][0].upper()}{x[i][slice(1, len(x[i]))]}')
   return ''.join(res)


camel_case = lambda _: ''.join(map(str.title,_.split())) 


def camel_case(string):
   return string.title().replace(" ", "")


def camel_case(string):
   return ''.join([i.capitalize() for i in string.split()])


print(camel_case("test case"), "TestCase")
print(camel_case("camel case method"), "CamelCaseMethod")
print(camel_case("say hello "), "SayHello")
print(camel_case(" camel case word"), "CamelCaseWord")
print(camel_case(""), "")