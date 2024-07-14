"""
|--------------------------------------------------------------------------
| Coding Meetup #8 - Higher-Order Functions Series - Will all continents be represented?
|--------------------------------------------------------------------------
|
"""

def all_continents(lst):
   continents = ["Africa", "Americas", "Asia", "Europe", "Oceania"]
   res = set(dev['continent'] for dev in lst)
   return all(continent in res for continent in continents)


def all_continents(lst): 
   return len(set(x["continent"] for x in lst)) == 5


def all_continents(lst): 
   return set(['Africa', 'Americas', 'Asia', 'Europe', 'Oceania']) == set([el['continent'] for el in lst])


list2 = [{'firstName': 'Fatima', 'lastName': 'A.', 'country': 'Algeria', 'continent': 'Africa', 'age': 25, 'language': 'JavaScript'}]
print(all_continents(list2), False)