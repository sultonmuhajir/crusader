"""
|--------------------------------------------------------------------------
| New Cashier Does Not Know About Space or Shift
|--------------------------------------------------------------------------
|
"""

def get_order(order):
   res = []
   arr = ['Burger', 'Fries', 'Chicken', 'Pizza', 'Sandwich', 'Onionrings', 'Milkshake', 'Coke']
   for i in arr:
      temp = order.split(i.lower())
      for j in range(len(temp)-1):
         res.append(i)
   return ' '.join(res)


def get_order(order):
   menu = ['Burger', 'Fries', 'Chicken', 'Pizza', 'Sandwich', 'Onionrings', 'Milkshake', 'Coke']
   return "".join([(item + " ") * order.count(item.lower()) for item in menu]).strip()


def get_order(order):
   menu = ['Burger','Fries','Chicken','Pizza','Sandwich','Onionrings','Milkshake','Coke']
   res = []
   for i in menu:
      while i.lower() in order:
         res += [i]
         order = order.replace(i.lower(),'',1)        
   return ' '.join(res)


def get_order(order):
   word =""
   list = ["Burger" ,"Fries","Chicken","Pizza", "Sandwich","Onionrings","Milkshake","Coke" ]
   for i in list:
      word = word+(" "+i)*order.count(i.lower())
   return word.strip()


print(get_order("milkshakepizzachickenfriescokeburgerpizzasandwichmilkshakepizza"),
   "Burger Fries Chicken Pizza Pizza Pizza Sandwich Milkshake Milkshake Coke")
print(get_order("pizzachickenfriesburgercokemilkshakefriessandwich"),
   "Burger Fries Fries Chicken Pizza Sandwich Milkshake Coke")