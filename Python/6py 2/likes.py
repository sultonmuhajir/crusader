"""
|--------------------------------------------------------------------------
| Who likes it?
|--------------------------------------------------------------------------
|
"""

def likes(names):
   if (len(names) == 0):
      return 'no one likes this'
   elif (len(names) == 1):
      return f'{names[0]} likes this'
   elif (len(names) == 2):
      return f'{names[0]} and {names[1]} like this'
   elif (len(names) == 3):
      return f'{names[0]}, {names[1]} and {names[2]} like this'
   else:
      return f'{names[0]}, {names[1]} and {len(names) - 2} others like this'


def likes(names):
   n = len(names)
   return {
      0: 'no one likes this',
      1: '{} likes this', 
      2: '{} and {} like this', 
      3: '{}, {} and {} like this', 
      4: '{}, {} and {others} others like this'
   }[min(4, n)].format(*names[:3], others=n-2)


def likes(names):
   formats = {
         0: "no one likes this",
         1: "{} likes this",
         2: "{} and {} like this",
         3: "{}, {} and {} like this",
         4: "{}, {} and {others} others like this"
      }
   n = len(names)
   return formats[min(n,4)].format(*names, others=n-2)


print(likes([]), 'no one likes this')
print(likes(['Peter']), 'Peter likes this')
print(likes(['Jacob', 'Alex']), 'Jacob and Alex like this')
print(likes(['Max', 'John', 'Mark']), 'Max, John and Mark like this')
print(likes(['Alex', 'Jacob', 'Mark', 'Max']), 'Alex, Jacob and 2 others like this')