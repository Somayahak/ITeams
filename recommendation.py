from flask import Flask,render_template


app = Flask(__name__)

@app.route('/')
@app.route('/postProject')
def recommendation():

    MEHAF= 'MEHAFMEHAFMEHAFMEHAFMEHAFMEHAF'
    return render_template("/postProject.php", MEHAF=MEHAF)

if __name__ == '__main__':
   app.run(debug = True)
