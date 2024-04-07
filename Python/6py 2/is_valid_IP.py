"""
|--------------------------------------------------------------------------
| IP Validation
|--------------------------------------------------------------------------
|
"""

def is_valid_IP(strng):
   octets = strng.split(".")
   if len(octets) != 4: return False
   for octet in octets:
      if not octet.isdigit() or int(octet) < 0 or int(octet) > 255: return False
      if len(octet) > 1 and octet[0] == "0": return False
   return True


def is_valid_IP(s):
   sp = s.split('.')
   return all(x in map(str,range(256))for x in sp)and len(sp)==4


from ipaddress import ip_address
def is_valid_IP(strng):
   try: return True if ip_address(strng) else False
   except ValueError: return False


print(is_valid_IP("0.0.0.0"), True)
print(is_valid_IP("12.255.56.1"), True)
print(is_valid_IP("137.255.156.100"), True)
print(is_valid_IP(""), False)
print(is_valid_IP("abc.def.ghi.jkl"), False)
print(is_valid_IP("123.456.789.0"), False)
print(is_valid_IP("12.34.56"), False)
print(is_valid_IP("01.02.03.04"), False)
print(is_valid_IP("256.1.2.3"), False)
print(is_valid_IP("1.2.3.4.5"), False)
print(is_valid_IP("123,45,67,89"), False)
print(is_valid_IP("1e0.1e1.1e2.2e2"), False)
print(is_valid_IP(" 1.2.3.4"), False)
print(is_valid_IP("1.2.3.4 "), False)
print(is_valid_IP("12.34.56.-7"), False)
print(is_valid_IP("1.2.3.4\n"), False)
print(is_valid_IP("\n1.2.3.4"), False)