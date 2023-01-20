# importing modules
from flask import Flask, render_template
  
# declaring app name
app = Flask(__name__)
  
# making list of pokemons
AMAL= 'AmalllAmalll'

# defining home page
@app.route('/footer')
def homepage():
  
# returning index.html and list
# and length of list to html page
    return render_template("/footer.html", AMAL=AMAL)
  
    if __name__ == '__main__':
      app.run()
