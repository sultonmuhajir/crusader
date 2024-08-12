"""
|--------------------------------------------------------------------------
| Coordinates Validator
|--------------------------------------------------------------------------
|
"""

from re import match
def is_valid_coordinates(coordinates):
   if match(r"^-?\d{1,2}(\.\d+)?,\s?-?\d{1,3}(\.\d+)?$", coordinates):
      lat, lon = map(float, coordinates.split(','))
      return -90 <= lat <= 90 and -180 <= lon <= 180
   return False


def is_valid_coordinates(coordinates):
   return bool(match("-?(\d|[1-8]\d|90)\.?\d*, -?(\d|[1-9]\d|1[0-7]\d|180)\.?\d*$", coordinates))


def is_valid_coordinates(coordinates):
   try: lat, lng = [abs(float(c)) for c in coordinates.split(',') if 'e' not in c]
   except ValueError: return False
   return lat <= 90 and lng <= 180


print(is_valid_coordinates("-23, 25"), True)
print(is_valid_coordinates("24.53525235, 23.45235"), True)
print(is_valid_coordinates("04, -23.234235"), True)
print(is_valid_coordinates("43.91343345, 143"), True)
print(is_valid_coordinates("4, -3"), True)
print(is_valid_coordinates("23.234, - 23.4234"), False)
print(is_valid_coordinates("2342.43536, 34.324236"), False)
print(is_valid_coordinates("N23.43345, E32.6457"), False)
print(is_valid_coordinates("99.234, 12.324"), False)
print(is_valid_coordinates("6.325624, 43.34345.345"), False)
print(is_valid_coordinates("0, 1,2"), False)
print(is_valid_coordinates("0.342q0832, 1.2324"), False)