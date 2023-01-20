from flask import Flask, request, render_template,request
import pickle

movies = pickle.load(open('Model/description25_df','rb'))
similarity = pickle.load(open('Model/similarity25.pkl','rb'))

def recommend():
    movie="This system is a hybrid of a web and an Android application, with the user using the Android application and the admin and HR using the web application. Employers of field work should use this application. The employee will have this program on his Android phone, and when he logs into the system, his image and GPS position will be sent to the admin, who will view the image and GPS location in the online application. After logging in, the system will automatically track the employee's GPS position and communicate it to the administrator every 5 minutes. When the employee logs out of the system again, the picture and GPS position are sent to the administrator. This method is essential for keeping track of an employee's attendance as well as payroll. The admin's task is to add a new employee by inputting his personal information, and the admin will offer the employee with an identification number and password so that he may use the program on his Android phone. Admin may examine the employee's GPS location by inputting the Employee Identity Number as well as the Date. Admin may view the pay of a specific employee by providing the date and employee ID. Admin may examine the employee's GPS location's latitude and longitude. The employee's password can be changed by the administrator. When the HR user logs into the system, he may view the employee's GPS position by providing the employee ID and date. HR may verify an employee's salary by providing the employee ID number and date. This program allows administrators and human resources to simply check an employee's salary. Because the employee's GPS position is recorded, the employee will not attempt to add proxy attendance."
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

@app.route('../HTML/findProject.php', methods =['GET','POST'])
def recommendation():
    movies_list = movies["description"].values
    status= False
    if request.method == "POST":
        try:
            if request.form:
                movies_name = request.form['movies']
                recomended_movies_name = recommend()
                status=True

                return render_template("../HTML/findProject.php", movies_name = recomended_movies_name, movies_list= movies_list, status= status)

        except Exception as e:
            error={'error', e}
            return render_template("../HTML/findProject.php", error = error,movies_list=movies_list)

    else:
     return render_template("../HTML/findProject.php", movies_list=movies_list)
