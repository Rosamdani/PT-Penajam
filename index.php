<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a13d2f4f0a.js" crossorigin="anonymous"></script>
    <title>Project</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&display=swap');

        * {
            font-family: Poppins;
        }

        .outline-gradient {
            border: 3px solid;
            border-radius: 100px;
            border-image: linear-gradient(to right, #ffa726, #fb8c00) 10;
        }

        .hero {
            background-image: url("assets/img/hero.png");
            background-color: rgba(3, 0, 34, 0.9);
        }
        .hero::before{
            content: "";
            position: absolute;
            right: 40px;
            bottom: 100px;
            width: 70%;
            height: 70%;
            background-size: cover;
            z-index: 10;
            background-image: url("assets/img/pose_5.png");
        }
        .hero::after{
            content: "";
            position: absolute;
            left: -40px;
            bottom: 0px;
            width: 500px;
            height: 500px;
            background-size: cover;
            z-index: 10;
            background-color: grey;
            border-radius: 100%;
        }
    </style>
</head>

<body class="overflow-x-hidden">
    <nav class="w-full max-h-fit py-4 bg-[#030022] flex items-center justify-between px-10">
        <div class="logo flex items-center">
            <img src="assets/img/Ellipse 3.png" class="w-[12%] h-[12%] mr-3" alt="">
            <p class="text-white text-lg font-bold">Pt. Penajam Inti Karya Persada</p>
        </div>
        <div class="menu text-white">
            <ul class="flex">
                <li class="bg-gradient-to-r px-1 py-1 from-cyan-900 to-[#0066FF] rounded-full max-w-fit flex items-center justify-center max-h-fit mr-3"><a href="#" class=" px-3 py-1 bg-[#030022] rounded-full flex items-center justify-center">About Us</a></li>
                <li class="bg-gradient-to-r px-1 py-1 from-cyan-900 to-[#0066FF] rounded-full max-w-fit flex items-center justify-center max-h-fit mr-3"><a href="#" class=" px-3 py-1 bg-[#030022] rounded-full flex items-center justify-center">Project</a></li>
                <li class="bg-gradient-to-r px-1 py-1 from-cyan-900 to-[#0066FF] rounded-full max-w-fit flex items-center justify-center max-h-fit mr-3"><a href="#" class=" px-3 py-1 bg-[#030022] rounded-full flex items-center justify-center">License</a></li>
            </ul>
        </div>
    </nav>

    <div class="w-full hero lg:h-[550px] md:h-[300px] h-[200px] relative">

    </div>
</body>

</html>