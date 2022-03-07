"""
|--------------------------------------------------------------------------
| Are they the "same"?
|--------------------------------------------------------------------------
|
"""

def comp(array1, array2):
	if (array1 == None or array2 == None):
		return False
	else:
		a1 = sorted(map(lambda i: i ** 2, array1))
		a2 = sorted(array2)
		return a1 == a2


def comp(array1, array2):
	try:
		return sorted([i ** 2 for i in array1]) == sorted(array2)
	except:
		return False


def comp(a1, a2):
	return None not in (a1,a2) and [i*i for i in sorted(a1)]==sorted(a2)


def comp(array1, array2):
	if array1 and array2:
		return sorted([x*x for x in array1]) == sorted(array2)
	return array1 == array2 == []


def comp(xs, ys):
	if xs is None or ys is None:
		return False
	return sorted(x * x for x in xs) == sorted(ys)


a1 = [121, 144, 19, 161, 19, 144, 19, 11]
a2 = [11*11, 121*121, 144*144, 19*19, 161*161, 19*19, 144*144, 19*19]
print(comp(a1, a2), True)