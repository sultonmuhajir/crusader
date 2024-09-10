"""
|--------------------------------------------------------------------------
| String average
|--------------------------------------------------------------------------
|
"""

def average_string(s):
   num_map = { "zero": 0, "one": 1, "two": 2, "three": 3, "four": 4, "five": 5, 
               "six": 6, "seven": 7, "eight": 8, "nine": 9 }
   nums = [num_map.get(word) for word in s.split()]
   if None in nums or not s: return "n/a"
   avg = sum(nums) // len(nums)
   return list(num_map.keys())[list(num_map.values()).index(avg)]


def average_string(s):
   N = 'zero one two three four five six seven eight nine'.split()
   try: return N[sum(map(N.index, s.split())) // len(s.split())]
   except: return 'n/a'


from statistics import mean
def average_string(s):
   num = 'zero one two three four five six seven eight nine'.split()
   try: return num[int(mean(num.index(i) for i in s.split()))]
   except: return "n/a"


print(average_string("zero nine five two"), "four")
print(average_string("four six two three"), "three")
print(average_string("one two three four five"), "three")
print(average_string("five four"), "four")
print(average_string("zero zero zero zero zero"), "zero")
print(average_string("one one eight one"), "two")
print(average_string("one"), "one")
print(average_string(""), "n/a")
print(average_string("ten"), "n/a")
print(average_string("pippi"), "n/a")