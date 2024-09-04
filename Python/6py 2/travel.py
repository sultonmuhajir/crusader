"""
|--------------------------------------------------------------------------
| Salesman's Travel
|--------------------------------------------------------------------------
|
"""

import re
def travel(r, zipcode):
   x = re.findall(r'(\d+) (.+?) ([A-Z]{2} \d+)', r)
   return f'{zipcode}:{",".join(i[1] for i in x if i[2]==zipcode)}/{",".join(i[0] for i in x if i[2]==zipcode)}'


def travel(r, zipcode):
   streets = []
   nums = []
   addresses = r.split(',')
   for address in addresses:
      if ' '.join(address.split()[-2:]) == zipcode:
         streets.append(' '.join(address.split()[1:-2]))
         nums += address.split()[:1]
   return '{}:{}/{}'.format(zipcode, ','.join(streets), ','.join(nums))


import re
def travel(r, zipcode):
   res = [(m.group(2), m.group(1)) for m in re.finditer(r'(\d+) ([^,]+) ([A-Z][A-Z] \d{5})', r) if zipcode == m.group(3)]
   return '{}:{}/{}'.format(zipcode, ','.join(a[0] for a in res), ','.join(a[1] for a in res))