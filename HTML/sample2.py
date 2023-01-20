# main.py

from fastapi import FastAPI

app = FastAPI()

@app.get("/")
async def root():
    return {"message": "Hello World"}

  
# making list of pokemons
AMAL= 'AmalllAmalll'

# defining home page
@app.get("/footer")
def homepage():
  
# returning index.html and list
# and length of list to html page
    return render_template("..//HTML/footer.html", AMAL=AMAL)
  
    if __name__ == '__main__':
      app.run()
