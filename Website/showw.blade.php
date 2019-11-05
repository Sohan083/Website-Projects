<!Doctype html>
<html>
<head>
    <link rel="stylesheet" href="{{ URL::asset('css/profile.css') }}" />
    <title>

    </title>
</head>

<body>
<div class="logo">
    <form action="home">
        <p>World's School</p>
    </form>
</div>
<div class="menu">

    <ul>

        <li> <img src="image/Menu-512.png" id="menupic">Catagories
            <ul>
                <li>Development
                    <ul>
                        <li>Web Development
                            <ul>
                                <li>HTML</li>
                                <li>JavaScript</li>
                                <li>CSS</li>
                                <li>PHP</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>Software & It</li>
                <li>Languages
                    <ul>
                        <li>C</li>
                        <li>C++</li>
                        <li>JAVA</li>
                        <li>PYTHON</li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
    <div class="searchbar">
        <form action="search">
            <input type="text" placeholder="Search for courses"
                   maxlength="20" id="search">
            <input type="submit" value="Go" id="searchbtn">
        </form>
    </div>

    <form action="instructor">
        <button id="insbtn">
            Become an Instructor
        </button>
    </form>


    <button id="mycourses">
        My Courses
    </button>

    <div class="imgcontainer">
        <img src="image/1.png" alt="Avatar" class="avatar">
    </div>
</div>
<div class="full">
    <div id="para">
        <p id="prof">Profile</p>
        <p id="ma">Manage Account</p>
        <p id="his">History of course taken</p>
    </div>
</div>
<img src="" id="pic">
</body>

</html>