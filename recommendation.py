from flask import Flask, request, render_template,request
import pickle

movies = pickle.load(open('Model/description_df','rb'))
similarity = pickle.load(open('Model/similarity.pkl','rb'))

def recommend():
    movie='to plan execute control ensure closure project managing people delivery parameter project drive execution project roadmap manage entire project lifecycle strategy planning tactical activity deploying vulnerability management system ensure high customer connect project building process relevant team member engage customer ensure completion project satisfaction report relevant survey feedback mechanism guide launch project concept delivery managing project governing overall budget articulate explain design constraint stakeholder understanding customer perspective'
    index = movies[movies['description']== movie].index[0]
    destances = sorted(list(enumerate(similarity[index])), reverse=True, key=lambda x: x[1])
    recomended_movies_name =[]
    for i in destances[1:]:
       recomended_movies_name.append(movies.iloc[i[0]].description)
    return recomended_movies_name
app = Flask(__name__)

@app.route('/')
def home():
    return render_template('index.php')

@app.route('/recommendation', methods =['GET','POST'])
def recommendation():
    movies_list = movies["description"].values
    if request.method == "POST":
        try:
            if request.form:
                movies_name = request.form['movies']
                recomended_movies_name = recommend()

                return render_template("HTML/findProject.php", movies_name = recomended_movies_name)

        except Exception as e:
            error={'error', e}
            return render_template("HTML/findProject.php", movies_list=movies_list)

    else:
     return render_template("HTML/findProject.php", movies_list=movies_list)
