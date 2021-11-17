from flask import Flask, request, jsonify
import requests
app = Flask(__name__)

@app.route('/getmsg/', methods=['GET'])
def respond():
    name = request.args.get("mess", None)
    api_url = requests.get(f"https://simsimi.info/api/?text={mess}&lc=vn")
    print(api_url)
    load_api = api_url.json()
    sim_api = load_api['success']
    print(sim_api)
    print(f"got mess {sim_api}")

    response = {}

    if not sim_api:
        response = "Vậy đó hả? Ừ :)"
    elif str(sim_api) == "":
        response = "Nhắn cái gì đó thú vị hơn được không? Nhạt vậy chơi mình đi má"
    else:
        response = f"{sim_api}"

    return response

@app.route('/post/', methods=['POST'])
def post_something():
    param = request.form.get('sim_api')
    print(param)
    if param:
        return jsonify({
            "Message": f"{sim_api}",
            "METHOD" : "POST"
        })
    else:
        return jsonify({
            "ERROR": "kiểm tra kết nối."
        })

@app.route('/')
def index():
    return "<h1>Đang chạy...</h1>"

if __name__ == '__main__':
    app.run(threaded=True, port=5000)
