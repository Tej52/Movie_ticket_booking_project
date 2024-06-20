from flask import Flask, request, render_template 

app = Flask(__name__)
@app.route('/', methods = ['GET', 'POST'])
def index():
    print( request.method)
    req = request.method
    if req == 'GET':
        return render_template('index.html')
    else:
        return 'POST REQ'
@app.route('/login', methods = ["GET", "POST"])
def login():
    req = request.method
    if req == 'GET':
        return render_template('login.html')


@app.route('/user', methods = ['POST', 'GET'])
def user():
    req = request.method 
    if req == 'POST':
        return "User Page"
    
@app.route('/create', methods = ['GET', 'POST'])
def creat():
    req = request.method 
    if req == 'GET':
        return render_template('create.html')
    else:
        return "Hello"
    

if __name__ == "__main__":
    app.run(debug=True)