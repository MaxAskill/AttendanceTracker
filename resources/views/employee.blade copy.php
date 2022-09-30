    <!DOCTYPE html>
    <html>
    <head>
    <style>
    body {
        margin:0;
        background-color: #C2FEFF;
        font-family: Arial, Helvetica, sans-serif;
    }

    ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #00A3AD;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1;
    box-shadow: 1px 2px 6px #aaaaaa;
    }

    li {
    float: left;
    }

    li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    }

    /* li a:hover:not(.active) {
    background-color: #111;
    } */

    .active {
    background-color: #04AA6D;
    }   

    .button {
    background-color: transparent;
    border: none;
    color: white;
    padding: 10px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    }

    .button1{
        /* background-color: #00A3AD; */
        border-radius: 12px;
        border: 2px solid #FFFFFF;
        float: right;
        margin-bottom: 10px;
    }

    .button1:hover {
    background-color: #FFFFFF;
    color: #00A3AD;
    }

    .button2{
        /* background-color: #00A3AD; */
        border-radius: 12px;
        border: 2px solid #00A3AD;
        margin-bottom: 10px;
        color: #00A3AD
    }

    .button2:hover {
    background-color: #00A3AD;
    color: #FFFFFF;
    }

    .button3{
        background-color: #00A3AD;
        border-radius: 12px;
        border: 2px solid #00A3AD;
        margin-bottom: 10px;
        color: #FFFFFF;
        margin-left: 5rem;
    }

    .button3:hover {
    background-color: #FFFFFF;
    color: #00A3AD;
    }

    .caption-edit{
        padding: 8px 20px;
        display: flex;
        flex-wrap: wrap;
        justify-content: flex;
        align-items: center;
        align-content: space-between;
        flex-direction: row;
        overflow: hidden;
        height: 100%;
    }

    .caption-edit input[type=text] {
        float: right;
    clear: both;
    border-radius: 12px;
    padding: 6px;
    margin-top: -8px;
    margin-left: 46%;
    font-size: 17px;
    }

    .caption-edit input[type=text]{
        border: 2px solid #00A3AD;
    }

    .caption-edit input[type=text]:hover{
        border: 2px solid #00A3AD;
    }

    table {
    border-collapse: collapse;
    width: 100%;
    margin: 0%;
    position: relative;
    }

    th, td {
    text-align: left;
    padding: 1em;
    }

    tr:nth-child(even) {background-color: #F2F2F2;}

    table thead th {
    /* Important */
    background-color:     #FFFFFF;
    position: sticky;
    top: 0;
    }

    .table-div{
        overflow: auto; 
        background-color: #FFFFFF;
        /* border: 2px solid red; */
    height: 700px;
    border-radius: 0px 0px  0px 15px;
    }
    .container{
        background-color: #FFFFFF;
        margin: 0% 10.5%;
    border-radius: 15px;
    }
    .dropbtn {
        border-radius: 12px;
        border: 2px solid #00A3AD;
        margin-bottom: 10px;
        color: #00A3AD;
    padding: 5px 20px;
    border-radius: 5px;
    }

    .dropdown {
    position: relative;
    display: inline-block;
    padding: 0px 15px;

    }

    .dropdown-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    border-radius: 5px;
    border: 2px solid #00A3AD;
    }

    .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    }

    .dropdown-content a:hover {
        background-color: #00A3AD;
        color: #FFFFFF
    }

    .dropdown:hover .dropdown-content {
    display: block;
    }

    .dropdown:hover .dropbtn {
    background-color: #00A3AD;
    color: #FFFFFF
    }

    .employee-profile{
        color: black;
        align-items: center;
        justify-content: left;
    }

    .employee-profile p {
        padding: 1px 5px;
        margin: 5px;
    }

    .container-employee {
        position: relative; 
        border-radius: 15px;
        background-color: #99EAED;
        margin: 2% 10.5%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .container-attendance{
        background-color: #00A3AD;
        margin: 0% 10.5%;
        border-radius: 15px;
    }

    .attendance-edit{
        color: #FFFFFF;
    }

    .attendance-edit input[type=text] {
        float: right;
    clear: both;
    border-radius: 12px;
    padding: 6px;
    margin-top: -8px;
    margin-left: 53%;
    font-size: 17px;
    }


    .dropdown input[type=date] {
    clear: both;
    color: white;
    background-color: #00A3AD;
    border-radius: 12px;
    padding: 6px;
    font-size: 17px;
    }

    .dropdown input[type=date]{
        border: 2px solid #FFFFFF;
    }

    .dropdown p{
        color: #FFFFFF;
    }

    .attendance-edit .dropbtn {
        border-radius: 12px;
        border: 2px solid #FFFFFF;
        margin-bottom: 10px;
        color: #FFFFFF;
    padding: 5px 20px;
    border-radius: 5px;
    }

    .container-attendance .dropbtn{
        border: 2px solid #FFFFFF;
        color: #FFFFFF;
    }

    .container-attendance .dropdown:hover .dropbtn {
    background-color: #FFFFFF;
    color: #00A3AD
    }

    </style>
    </head>
    <body>
    <!-- <ul>
    <li><a href="#home">Home</a></li>
    <li><a href="#news">News</a></li>
    <li><a href="#contact">Contact</a></li>
    <li style="float:right"><a class="active" href="#about">About</a></li>
    </ul> -->

    <ul>
    <li style="margin-top: 10px; font-size: 25px; margin-left: 10%"><a href="#home">BARBIZON EVERYDAY GROUP OF COMPANIES</a></li>
    <li style="float:right;margin-right: 10%"><a href="#logout"><button class="button button1">Log out</button></a></li>
    <li style="float:right;"><a href="#about"><img src="resources/images/profileicon.png"></a></li>
    
    </ul>

    <div style="padding:20px;margin-top:3%;height: 100%;"></div>

    <div class="container">
        <div class="caption-edit">
            <h1>EMPLOYEES LIST</h1>
            <button class="button button3">Add New</button>
            <input type="text" placeholder="Search..."></input>
        </div>

    <div class="dropdown" >
    <button class="button dropbtn">Branch</button>
    <div class="dropdown-content" style="left:0;">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
    </div>

    </div><!--End Dropdown-->
    <div class="dropdown" >
    <button class="button dropbtn">Chain</button>
    <div class="dropdown-content" style="left:0;">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
    </div>
    </div><!--End Dropdown-->

    <div class="table-div">
    <table>
        
        <thead>
            <tr>
            <th>Name</th>
            <th>fn.lastname@email.com </th>
            <th>ID Number</th>
            <th>Contact Number</th>
            <th>Branch</th>
            <th>Chain</th>
            <th>Attendance</th>
            </tr>
        </thead>
        <tr>
        <td>Maria M. Clara</td>
        <td>fn.lastname@email.com </td>
        <td>0000-0001</td>
        <td>123</td>
        <td>SM Bicutan</td>
        <td>SM Department Store</td>
        <td><button class="button button2">View</button></td>
        </tr>
        <tr>
        <td>Maria M. Clara</td>
        <td>fn.lastname@email.com </td>
        <td>0000-0002</td>
        <td>123</td>
        <td>SM Bicutan</td>
        <td>SM Department Store</td>
        <td><button class="button button2">View</button></td>
        </tr>
        <tr>
        <td>Maria M. Clara </td>
        <td>fn.lastname@email.com </td>
        <td>0000-0003 </td>
        <td>123</td>
        <td>SM Bicutan</td>
        <td>SM Department Store</td>
        <td><button class="button button2">View</button></td>
        </tr>
        <tr>
        <td>Maria M. Clara </td>
        <td>fn.lastname@email.com </td>
        <td>0000-0003 </td>
        <td>123</td>
        <td>SM Bicutan</td>
        <td>SM Department Store</td>
        <td><button class="button button2">View</button></td>
        </tr>
        <tr>
        <td>Maria M. Clara </td>
        <td>fn.lastname@email.com </td>
        <td>0000-0003 </td>
        <td>123</td>
        <td>SM Bicutan</td>
        <td>SM Department Store</td>
        <td><button class="button button2">View</button></td>
        </tr>
        <tr>
        <td>Maria M. Clara </td>
        <td>fn.lastname@email.com </td>
        <td>0000-0003 </td>
        <td>123</td>
        <td>SM Bicutan</td>
        <td>SM Department Store</td>
        <td><button class="button button2">View</button></td>
        </tr>
        <tr>
        <td>Maria M. Clara </td>
        <td>fn.lastname@email.com </td>
        <td>0000-0003 </td>
        <td>123</td>
        <td>SM Bicutan</td>
        <td>SM Department Store</td>
        <td><button class="button button2">View</button></td>
        </tr>
        <tr>
        <td>Maria M. Clara </td>
        <td>fn.lastname@email.com </td>
        <td>0000-0003 </td>
        <td>123</td>
        <td>SM Bicutan</td>
        <td>SM Department Store</td>
        <td><button class="button button2">View</button></td>
        </tr>
        <tr>
        <td>Maria M. Clara </td>
        <td>fn.lastname@email.com </td>
        <td>0000-0003 </td>
        <td>123</td>
        <td>SM Bicutan</td>
        <td>SM Department Store</td>
        <td><button class="button button2">View</button></td>
        </tr>
        <tr>
        <td>Maria M. Clara </td>
        <td>fn.lastname@email.com </td>
        <td>0000-0003 </td>
        <td>123</td>
        <td>SM Bicutan</td>
        <td>SM Department Store</td>
        <td><button class="button button2">View</button></td>
        </tr>
        <tr>
        <td>Maria M. Clara </td>
        <td>fn.lastname@email.com </td>
        <td>0000-0003 </td>
        <td>123</td>
        <td>SM Bicutan</td>
        <td>SM Department Store</td>
        <td><button class="button button2">View</button></td>
        </tr>
        <tr>
        <td>Maria M. Clara </td>
        <td>fn.lastname@email.com </td>
        <td>0000-0003 </td>
        <td>123</td>
        <td>SM Bicutan</td>
        <td>SM Department Store</td>
        <td><button class="button button2">View</button></td>
        </tr>
        <tr>
        <td>Maria M. Clara </td>
        <td>fn.lastname@email.com </td>
        <td>0000-0003 </td>
        <td>123</td>
        <td>SM Bicutan</td>
        <td>SM Department Store</td>
        <td><button class="button button2">View</button></td>
        </tr>
    </table><!--End Table-->
    </div><!--End table-div-->
    </div><!--End Container-->

    <div class="container-employee">
        <div class="employee-profile">
            <img src="dsa.jpg">
        </div>
        <div class="employee-profile">
            <h1>EMPLOYEES PROFILE</h1>
            <p><strong>Name :</strong> FirstName M. LastName</p>
            <p><strong>ID No. :</strong> 0000-0001</p>
            <p><strong>Contact No. :</strong> 123</p>
            <p><strong>Email :</strong> fm.lastname@email.com</p>
            <p><strong>Department :</strong> SM Bicutan</p>
            <p><strong>Chain :</strong> SM Department Store</p>
        </div>
    </div>

    <div class="container-attendance">
        <div class="caption-edit attendance-edit">
            <h1> ATTENDANCE SUMMARY</h1>
            <!-- <button class="button button3">Add New</button> -->
            <input type="text" placeholder="Search..."></input>
            
            </div>
            <div>
            <div class="dropdown" >
                <p><strong> Sort by: <input type="date" id="birthday" name="birthday"> to </strong> <input type="date" id="birthday" name="birthday"><p>
            </div>
            <div class="dropdown" >
                <button class="button dropbtn">Duration</button>
                <div class="dropdown-content" style="left:0;">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
                </div>
            </div>
    <button class="button dropbtn" style="margin-left:41%">View History</button>
    <button class="button dropbtn">Print</button>

</div>

    <div class="table-div">
    <table>
        
        <thead>
            <tr>
            <th>Date</th>
            <th>Time In </th>
            <th>Time Out</th>
            <th>Late</th>
            <th>Undertime</th>
            <th>Overtime</th>
            <th>Hours Rendered</th>
            <th></th>
            </tr>
        </thead>
        <tr>
        <td>September 02, 2022</td>
        <td>07:30 am</td>
        <td>06:30 am</td>
        <td>0</td>
        <td>0</td>
        <td>0hrs</td>
        <td>0hrs</td>
        <td><button class="button button2">+</button></td>
        </tr>
        <tr>
        <td>September 02, 2022</td>
        <td>07:30 am</td>
        <td>06:30 am</td>
        <td>0</td>
        <td>0</td>
        <td>0hrs</td>
        <td>0hrs</td>
        <td><button class="button button2">+</button></td>
        </tr>
        <tr>
        <td>September 02, 2022</td>
        <td>07:30 am</td>
        <td>06:30 am</td>
        <td>0</td>
        <td>0</td>
        <td>0hrs</td>
        <td>0hrs</td>
        <td><button class="button button2">+</button></td>
        </tr>
        <tr>
        <td>September 02, 2022</td>
        <td>07:30 am</td>
        <td>06:30 am</td>
        <td>0</td>
        <td>0</td>
        <td>0hrs</td>
        <td>0hrs</td>
        <td><button class="button button2">+</button></td>
        </tr>
        <tr>
        <td>September 02, 2022</td>
        <td>07:30 am</td>
        <td>06:30 am</td>
        <td>0</td>
        <td>0</td>
        <td>0hrs</td>
        <td>0hrs</td>
        <td><button class="button button2">+</button></td>
        </tr>
        <tr>
        <td>September 02, 2022</td>
        <td>07:30 am</td>
        <td>06:30 am</td>
        <td>0</td>
        <td>0</td>
        <td>0hrs</td>
        <td>0hrs</td>
        <td><button class="button button2">+</button></td>
        </tr>
        <tr>
        <td>September 02, 2022</td>
        <td>07:30 am</td>
        <td>06:30 am</td>
        <td>0</td>
        <td>0</td>
        <td>0hrs</td>
        <td>0hrs</td>
        <td><button class="button button2">+</button></td>
        </tr>
        <tr>
        <td>September 02, 2022</td>
        <td>07:30 am</td>
        <td>06:30 am</td>
        <td>0</td>
        <td>0</td>
        <td>0hrs</td>
        <td>0hrs</td>
        <td><button class="button button2">+</button></td>
        </tr>
        <tr>
        <td>September 02, 2022</td>
        <td>07:30 am</td>
        <td>06:30 am</td>
        <td>0</td>
        <td>0</td>
        <td>0hrs</td>
        <td>0hrs</td>
        <td><button class="button button2">+</button></td>
        </tr>
    </table><!--End Table-->
    </div><!--End table-div-->
    </div><!--End Container-Attendance-->

    <br>
    <br>
    <div class="container-attendance">
        <div class="caption-edit attendance-edit">
            <h1> OVERTIME HISTORY</h1>
            <!-- <button class="button button3">Add New</button> -->
            <input type="text" placeholder="Search..."></input>
            
            </div>
            <div>
            <div class="dropdown" >
                <p><strong> Sort by: <input type="date" id="birthday" name="birthday"> to </strong> <input type="date" id="birthday" name="birthday"><p>
            </div>
    <button class="button dropbtn" style="margin-left:55%">fILE OT</button>

</div>

    <div class="table-div">
    <table>
        
        <thead>
            <tr>
            <th>Date</th>
            <th>Time In </th>
            <th>Time Out</th>
            <th>Hours Rendered</th>
            <th>Status</th>
            </tr>
        </thead>
        <tr>
        <td>September 02, 2022</td>
        <td>07:30 am</td>
        <td>06:30 am</td>
        <td>0hrs</td>
        <td>APPROVE</td>
        </tr>
        <tr>
        <td>September 02, 2022</td>
        <td>07:30 am</td>
        <td>06:30 am</td>
        <td>0</td>
        <td>0</td>
        <td>0hrs</td>
        <td>0hrs</td>
        <td>APPROVE</td>
        </tr>
        <tr>
        <td>September 02, 2022</td>
        <td>07:30 am</td>
        <td>06:30 am</td>
        <td>0</td>
        <td>0</td>
        <td>0hrs</td>
        <td>0hrs</td>
        <td>APPROVE</td>
        </tr>
        <tr>
        <td>September 02, 2022</td>
        <td>07:30 am</td>
        <td>06:30 am</td>
        <td>0</td>
        <td>0</td>
        <td>0hrs</td>
        <td>0hrs</td>
        <td>APPROVE</td>
        </tr>
        <tr>
        <td>September 02, 2022</td>
        <td>07:30 am</td>
        <td>06:30 am</td>
        <td>0</td>
        <td>0</td>
        <td>0hrs</td>
        <td>0hrs</td>
        <td>APPROVE</td>
        </tr>
        <tr>
        <td>September 02, 2022</td>
        <td>07:30 am</td>
        <td>06:30 am</td>
        <td>0</td>
        <td>0</td>
        <td>0hrs</td>
        <td>0hrs</td>
        <td>APPROVE</td>
        </tr>
        <tr>
        <td>September 02, 2022</td>
        <td>07:30 am</td>
        <td>06:30 am</td>
        <td>0</td>
        <td>0</td>
        <td>0hrs</td>
        <td>0hrs</td>
        <td>APPROVE</td>
        </tr>
        <tr>
        <td>September 02, 2022</td>
        <td>07:30 am</td>
        <td>06:30 am</td>
        <td>0</td>
        <td>0</td>
        <td>0hrs</td>
        <td>0hrs</td>
        <td>APPROVE</td>
        </tr>
        <tr>
        <td>September 02, 2022</td>
        <td>07:30 am</td>
        <td>06:30 am</td>
        <td>0</td>
        <td>0</td>
        <td>0hrs</td>
        <td>0hrs</td>
        <td>APPROVE</td>
        </tr>
        <tr>
        <td>September 02, 2022</td>
        <td>07:30 am</td>
        <td>06:30 am</td>
        <td>0</td>
        <td>0</td>
        <td>0hrs</td>
        <td>0hrs</td>
        <td>APPROVE</td>
        </tr>
        <tr>
        <td>September 02, 2022</td>
        <td>07:30 am</td>
        <td>06:30 am</td>
        <td>0</td>
        <td>0</td>
        <td>0hrs</td>
        <td>0hrs</td>
        <td>APPROVE</td>
        </tr>
        <tr>
        <td>September 02, 2022</td>
        <td>07:30 am</td>
        <td>06:30 am</td>
        <td>0</td>
        <td>0</td>
        <td>0hrs</td>
        <td>0hrs</td>
        <td>APPROVE</td>
        </tr>
        <tr>
        <td>September 02, 2022</td>
        <td>07:30 am</td>
        <td>06:30 am</td>
        <td>0</td>
        <td>0</td>
        <td>0hrs</td>
        <td>0hrs</td>
        <td>APPROVE</td>
        </tr>
        <tr>
        <td>September 02, 2022</td>
        <td>07:30 am</td>
        <td>06:30 am</td>
        <td>0</td>
        <td>0</td>
        <td>0hrs</td>
        <td>0hrs</td>
        <td>APPROVE</td>
        </tr>
    </table><!--End Table-->
    </div><!--End table-div-->
    </div><!--End Container-Attendance-->
    <br>
    </body>
    </html>


