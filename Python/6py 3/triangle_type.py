"""
|--------------------------------------------------------------------------
| Triangle type
|--------------------------------------------------------------------------
|
"""

def triangle_type(a, b, c):
   sides = sorted([a, b, c])
   a, b, c = sides
   if a + b <= c: return 0  
   if a * a + b * b == c * c: return 2  
   if a * a + b * b < c * c: return 3  
   return 1  


def triangle_type(a, b, c):
   a,b,c = sorted((a,b,c))
   if a+b<=c: return 0
   x = a**2+b**2-c**2
   return (x<0) + (x<=0) + 1


def triangle_type(a, b, c):
   x,y,z = sorted([a,b,c])
   if z >= x + y: return 0
   if z*z == x*x + y*y: return 2
   return 1 if z*z < x*x + y*y else 3


print(triangle_type(2, 4, 6), 0)  
print(triangle_type(8, 5, 7), 1)  
print(triangle_type(3, 4, 5), 2)  
print(triangle_type(7, 12, 8), 3)