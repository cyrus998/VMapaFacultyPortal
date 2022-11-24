<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">

    <title>My Portfolio</title>

    <style>
        .text-right {
            text-align: right;
        }
    </style>

</head>

<body class="login-page" style="background: white">

    <div>
        <div class="row">
            <div class="col-xs-7">
                <h1>{{ $name }}</h1>
                <!-- {{ $image }} -->
                <hr>
                <strong>Victorino Mapa HighSchool - Faculty.</strong><br>
                HXXR+5V7, Concepcion Aguila St, <br>
                T San Miguel, Manila, 1008 Metro Manila<br>
                Phone: (695) 123-4567 <br>
                Email: companyemail@company.com <br>
                <br>
            </div>

            <div class="col-xs-4">
            </div>
        </div>

        <div style="margin-bottom: 0px">&nbsp;</div>

        <div class="row">
            <div class="col-xs-6">
                <h4>Faculty Number: {{ $facultyNumber }}</h4>
                <address>
                    <span>{{ $name }}</span> <br>
                    <span>Address: {{ $address }}</span> <br>
                    <span>Phone Number: {{ $contactnumber }}</span> <br>
                    <a href="mailto:#">Email Address: {{ $email }}</a> <br> <br> <br>
                </address>
            </div>


        </div>

        <table class="table">
            <thead style="background: #0080c0;">
                <tr>
                    <th>Personal Details</th> <br> <br>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <br> <br>
                        <div><strong>About The Instructor:</strong></div>
                        <p> {{ $aboutme }}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h2>Subject of Expertise:</h2>
                        <hr>
                        <h3>{{ $subjectexpertise }}</h3>
                </tr>
            </tbody>
        </table>

        <h2>Educational Background:</h2>
        <hr>
        <h3>College</h3>
        <p><strong>{{ $collegename }}</strong> Batch SY: {{ $yeargraduated }}</p>

        <p>Course: {{ $teachercollegecourse }}</p>

        
        <div style="margin-bottom: 0px">&nbsp;</div>

    </div>

</body>

</html>