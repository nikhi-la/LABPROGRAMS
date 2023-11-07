d1={1:'Ball',2:'Dog',3:'Apple',4:'Cat'}

print("Ascending")
print("Based on items  :",sorted(d1.items()))
print("Based on keys   :",sorted(d1.keys()))
print("Based on values :",sorted(d1.values()))
print("\nDescending")
print("Based on items  :",sorted(d1.items(),reverse=True))
print("Based on keys   :",sorted(d1,reverse=True))
print("Based on values :",sorted(d1.values(),reverse=True))
