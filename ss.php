inputtext = input("Input: ")
URL = "https://simsimi.info/api/?lc=vn&text={}".format(inputtext)
r = requests.get(url = URL)
data = r.json()
if data['result'] == 509:
	print(data['msg'])
else:
	print(data['response'])
