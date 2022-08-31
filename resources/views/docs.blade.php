@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card p-4">
        <h1>Assignment 1 – 2703ICT Web Application 
            Development  
        </h1>
        <p class="mb-0">Due Date: 9th September 2022 (Friday Week 7) 5pm </p>
           <p class="mb-0">Weight: 40% </p> 
           <p class="mb-0">Individual Assignment </p>
        <article class="mt-3">
            The aim of this assignment is to build a simple web application with the basic building blocks (to a 
            reasonable level). The only support from Laravel framework you can use are routing, templating 
            (view), and session. The understanding gained from this assignment provides a foundation for 
            students to learn other frameworks or to develop new frameworks. In assignment 2, we will let you 
            unleash the capabilities of Laravel. 
        </article>
        <h4 class="mt-4">Introduction </h4>
        <p>For this assignment you are required to build a system to support Work Integrated Learning. This 
            system allows industry partners to register projects for students, and students to apply to work on a 
            project.  
        </p>
        <p>There is no requirement in Assignment 1 to support user authentication/login; as the result, we will 
            ignore the privacy and authentication problems. We will learn how to do user authentication for 
            Assignment 2. 
            </p>
            <h4 class="mt-4">Details  </h4> 
            <p>The name and design of the website can be to your choosing however it must satisfy the following 
                requirements: 
            </p>
            <ol>
                <li>All pages must have a navigation menu, either across the top of the page or down the left or 
                    right column. It provides links to access the features of this system and also contains a link to 
                    the home page. 
                </li>
                <li>The home page displays the project name and the industry partner for all the projects that are 
                    being advertised. 
                </li>
                <li>User can click on the project, which will bring up the details page for that project. The details 
                    page displays all the details for that project (including the industry partner) plus it also lists all 
                    the students that have applied to work on that project.  
                </li>
                <li>
                    There is a page for industry partners to advertise a project. To advertise a project, the 
                    industry partner needs to enter their company name, location, the project title, the related 
                    major (e.g. software development, networks and security, etc), project description, and the 
                    number of students needed. Submitting this information will create the project in the system 
                    and bring the industry partner to the details page for this project. An industry partner can 
                    advertise multiple projects. 
                </li>
                <li>Only the project title, field, description, and number of students can be edited.  </li>
                <li>
                    A project can be deleted. When a project is deleted, all applications for that project should also 
                    be deleted. 
                </li>
                <li>
                    From the details page for a project, the user (student) can apply to work on that project. To 
                    apply for a project, the student needs to enter their first and last name and a paragraph of 
                    justification text (to describe their background and reason for applying for this project). After 
                    submitting an application, the student is taken back to the details page for that project. A 
                    student can apply for multiple projects. 
                </li>
                <li>
                    In the details page, clicking on an applicant (student) will bring up the student’s justification 
                    text for that application. 
                </li>
                <li>
                    There is input validation when industry partner submits a project. All the fields for cannot be 
                    empty, and the number of students need to be a number between 3 to 8. If the input is invalid, 
                    an error message will be displayed next to the form and the project will not be saved. 
                </li>
                <li>
                    A student can only apply for a project once. If a student (with the same first and last name) 
                    has already applied for the same project, then an error message will be displayed after the 
                    application is submitted, and the application will not be saved. 
                </li>
                <li>
                    There is a page that displays a list of students that have applied for a project. Clicking on the 
                    student will display the projects (name and industry partner) this student has applied. 
                </li>
                <li>
                    In the home page, a number is displayed next to each project which indicates the number of 
                    applications for that project. 
                </li>
                <li>
                    This is a page that displays the top 3 industry partner that have advertised the most number 
                    of projects. The number of projects these industry partners offered is also displayed. 
                </li>
                <li>
                    After an industry partner has advertised a project, the system remembers the industry 
                    partner’s name and location for the duration of the session. Subsequent advertisement made 
                    within the same session will not require that industry to enter their name and location, but 
                    instead the name and location entered previously will be used. Note: this feature requires you 
                    to learn to use the session feature of PHP/Laravel. 
                </li>
                <li>
                    A student can only apply for up to 3 projects. When applying for a project, a student needs to 
                    enter their preference (1 to 3, with 1 being the highest). There is a project assignment page 
                    which displays the assignment of project to students. The assignment should satisfy as many 
                    students as possible and not go over the student limit for a project. 
                    
                    <b>The requirements above are ordered roughly in the order of difficulty, from the easiest to hardest. </b>
                </li>
            </ol>
            <h4 class="mt-4">Technical requirements  </h4> 
            <ol>
                <li>This assignment must be implemented using Laravel, however, you are only allowed to use the 
                    following feature of Laravel: routing, view, and session. Some specific implications are:  
                </li>
                <li>
                    Database access should be implemented via raw SQL and executed through Laravel’s DB 
                    class. You are not to use Laravel's ORM (ORM will be used for assignment 2). An SQL file 
                    should be used to create tables and insert initial data. There should be enough initial 
                    data to thoroughly test the retrieval, update, and deletion functionalities you have 
                    implemented. 
                </li>
                <li>
                    You must implement your own validation check, like Week 3 exercise (you must not 
                    use Laravel’s validation feature – which we will use for Assignment 2). Validation errors 
                    message must be displayed within the view. Note: validation must be done on the server 
                    side (you should know why). To demonstrate this, you should not have any client-side 
                    validation.
                </li>
                <li>
                    Proper security measures must be implemented, e.g. perform HTML and SQL sanitisation etc. 
                    You should be able to explain the security measures you have implemented. 
                </li>
                <li>Template inheritance must be properly used.  </li>
                <li>Good coding practice is expected. This includes:  <br>
                    - Naming:  using consistent, readable, and descriptive names for files, functions, variables etc.  <br>
                    - Readability: correct indenting/spacing of code. <br>
                    - Commenting: there should at least be a short description for each function. 
                </li>
            </ol>
            <h4 class="mt-4">Documentation   </h4> 
            <ol>
                <p>Provide the following documentation in no more than 1 page:  </p>
                <li>
                    An ER diagram for the database. Note: many-to-many relationships must be broken down into 
                    one-to-many. 
                </li>
                <li>
                    Describe what you were able to complete, what you were not able to complete.  
                </li>
                <li>
                    Reflect on the process you have applied to develop your solution (e.g. how did you get started, 
                    did you do any planning, how often do you test your code, how did you solve the problems you 
                    come across). What changes would you make for assignment 2 to improve your process?  
                </li>
                <li>
                    If you have completed Task 15, you need to explain your method and justify how your 
                    assignment implementation satisfies the most number of students.  
                    This documentation should be provided as a page in the website and linked to from the navigation 
                    menu. 
                    
                    For further details of the requirements, refer to the marking rubric. All requirements from both the 
                    assignment specification and marking rubric must be satisfied. 
                </li>
            </ol>
            <h4 class="mt-4">Submission Requirements </h4>
            <ol>
                <p>Your submission should consist of: </p>
                <li>. A compressed file (.zip) containing your application (including all source code). See Week 1 
                    lecture regarding how to zip a directory and download file. 
                </li>
                <li>
                    A PDF file containing your documentations. 
                    These files must be submitted via the course website through the Assignment 1 link. 
                    
                </li>
            </ol>  
            <p> <strong>Note:</strong> You are responsible for regularly backing up your work. Hence, if you lose your file due to not 
                backing up, then expect to be heavily penalised. 
            </p> 
            <p>
                Do not update your source code after you have submitted your work. During the demonstration, you 
                need to show the last modified date of your file (on Elf, run the command: ls -la in your routes 
                directory). 
            </p>
    </div>
</div>
@endsection