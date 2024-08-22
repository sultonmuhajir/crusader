"""
|--------------------------------------------------------------------------
| Convert string to camel case
|--------------------------------------------------------------------------
|
"""

from re import sub
def to_camel_case(text):
   return sub(r'[_-]\w', lambda x: x.group(0)[1].upper(), text)


def to_camel_case(text):
   return text[:1] + text.title()[1:].replace('_', '').replace('-', '')


def to_camel_case(text):
   words = text.replace('_', '-').split('-')
   return words[0] + ''.join([x.title() for x in words[1:]])


print(to_camel_case(""), "")
print(to_camel_case("the_stealth_warrior"), "theStealthWarrior")
print(to_camel_case("The-Stealth-Warrior"), "TheStealthWarrior")
print(to_camel_case("A-B-C"), "ABC")