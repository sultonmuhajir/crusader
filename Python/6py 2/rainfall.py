"""
|--------------------------------------------------------------------------
| Rainfall
|--------------------------------------------------------------------------
|
"""

def parse_data(data):
   return {line.split(':')[0].strip(): [float(record.split()[1]) for record in line.split(':')[1].split(',')] for line in data.split('\n')}
def mean(town, data):
   city_data = parse_data(data)
   if town not in city_data: return -1.0
   rainfall = city_data[town]
   return sum(rainfall) / len(rainfall)
def variance(town, data):
   city_data = parse_data(data)
   if town not in city_data: return -1.0
   rainfall = city_data[town]
   mean_value = sum(rainfall) / len(rainfall)
   return sum((x - mean_value) ** 2 for x in rainfall) / len(rainfall)


import numpy as np
def split_data(town,strng):
   city_data = dict(city.split(":") for city in strng.splitlines())
   return dict(v.split() for v in [m for m in city_data[town].split(',')]) if town in city_data else 0
def mean(town, strng):
   d = split_data(town, strng)
   return np.average(np.array([float(x) for x in d.values()])) if d else -1
def variance(town, strng):
   d = split_data(town, strng)
   return np.var(np.array([float(x) for x in d.values()])) if d else -1