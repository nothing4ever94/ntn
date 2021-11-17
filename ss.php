text = input("Input: ")
URL = "https://simsimi.info/api/?lc=vn&text={text}"
r = requests.get(url = URL)
data = r.json()
	print(data['sucess'])
	
