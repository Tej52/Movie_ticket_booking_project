from flask import Flask, request, render_template 
from movie import city

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
    else:
        full_name = request.form.get('full_name')
        email = request.form.get('email')
        password = request.form.get('password')
        ph_number = request.form.get('Ph_number')
        print(full_name, email, password, ph_number)
        return render_template('login.html')


@app.route('/user', methods = ['POST', 'GET'])
def user():
    req = request.method 
    gmail = request.form.get('gmail')
    password = request.form.get('password')
    print(gmail, password)
    if req == 'POST':
        return render_template('user.html')
    
@app.route('/create', methods = ['GET', 'POST'])
def creat():
    req = request.method 
    if req == 'GET':
        return render_template('create.html')
    else:
        return "Hello"
    

if __name__ == "__main__":
    app.run(debug=True)