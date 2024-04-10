"""
|--------------------------------------------------------------------------
| Make the Deadfish Swim
|--------------------------------------------------------------------------
|
"""

def parse(data):
   res, val = [], 0
   for char in data:
      if char == "i": val += 1
      elif char == "d": val -= 1
      elif char == "s": val *= val
      elif char == "o": res.append(val)
   return res


def parse(data):
   v, r = 0, []
   for c in data:
      v, r = v + {'i': 1, 'd': -1, 's': v * (v - 1)}.get(c, 0), r + [v] * (c == 'o')
   return r


def parse(data):
   value, result = 0, []
   for instruction in data:
      match instruction:
         case "i": value += 1
         case "d": value -= 1
         case "s": value = value**2
         case "o": result.append(value)
   return result


print(parse("ooo"), [0,0,0])
print(parse("ioioio"), [1,2,3])
print(parse("idoiido"), [0,1])
print(parse("isoisoiso"), [1,4,25])
print(parse("codewars"), [0])