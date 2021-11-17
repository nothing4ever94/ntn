inputtext = input("Input: ")
URL = "https://simsimi.info/api/?lc=vn&text={inputtext}"
r = requests.get(url = URL)
data = r.json()
	print(data['msg'])
	
