<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pandding reqest</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        #pandding {
            /* height: 100vh; */
            height: 100vh;
            width: 100vw;
            position: fixed;
            display: flex;
            align-content: center;
            flex-direction: column;
            justify-content: center;
            top: 0;
            left: 0;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url({{ asset('images/pandding.png') }});
            
        }
        #pandding h2 {
            margin: 0 30px;
            font-size: 40px;
            font-family: "Poppins", sans-serif;
            text-transform: capitalize;
            color: #201f1fa3;
        }

        @media (max-width: 576px) {
            #pandding h2 {
            font-size: 20px;
        }
        }
    </style>
</head>
<body>
    <section id="pandding">
        <h2>
            your request has been received. 
        </h2>
        <h2>please wait for getting approval of admin.</h2>
    </section>
</body>
</html>