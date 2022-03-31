<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial Plan</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,600;1,200&family=Italianno&display=swap"
        rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://unpkg.com/scrollreveal"></script>
    <style>
        @keyframes floater {
            0% {
                transform: translate3d(10, 10, 10);
                transition: ease 5s;

            }

            50% {
                transform: rotate3d(1, 2, 1, 30deg);

            }

            100% {
                transform: translate3d(30, 2, 1, );

            }
        }


        .floating-img1,
        .floating-img2,
        .floating-img3,
        .floating-img4,
        .floating-img5 {
            animation: floater 2s infinite;
            transition: ease 1s;
            height: 80px;
        }

        body {
            background-color: #fffffd;
            font-family: 'Barlow', sans-serif;
            /* font-family: 'Italianno', cursive; */
        }
    </style>


</head>

<body style="overflow-x: hidden;">
    <div class="content-wrapper">

        <header class=" bg-headercolor ">

            <nav class="navbar  flex justify-between w-70  ">
                <div>
                    <a href="#" class="flex items-center mt-8 px-2 ml-40 ">
                        <!-- <img src="logo.png" alt="Logo" class="h-8 w-8 mr-2" />  -->
                        <span class="font-semibold text-primarycolor wow shake text-2xl">Financial Plan</span>
                    </a>
                </div>
                <div class="nav-items mx-20">
                    <ul class="nav-item flex space-x-5 md:flex">
                        <li
                            class="nav-links py-8 px-2  text-gray-500 hover:underline hover:underline-offset-8 hover:decoration-primarycolor hover:decoration-2 ">
                            <a href="">Home</a></li>
                        <li
                            class="nav-links py-8 px-2 text-gray-500 hover:underline hover:underline-offset-8 hover:decoration-primarycolor hover:decoration-2 ">
                            <a href="">Services</a></li>
                        <li
                            class="nav-links py-8 px-2 text-gray- hover:underline hover:underline-offset-8 hover:decoration-primarycolor hover:decoration-2 ">
                            <a href="">Pricing</a></li>


                        <li class="nav-links mt-6 px-2 ">
                            <button
                                class="get-started-btn w-40 py-3 hover:shadow-xl text-sm px-3  uppercase  text-headercolor bg-primarycolor rounded-full">

                                Get started
                            </button>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="wow relative slideInLeft header-content py-20  justify-between  grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 "
                data-wow-duration="3s" data-wow-delay="5s">

                <div class="content-text justify-center my-10 mx-auto">
                    <p class=" header-text1 text-black text-5xl font-extrabold capitalize">Your Roadmap to <br> <span
                            class="header-text2 text-3xl font-bold tracking-wide text-primarycolor">interesting</span>
                        <br> business plan</p>
                    <p class="header-para mt-8 text-lg font-medium text-textgray  leading-loose">Easily write a business plan,
                        secure funding, and get <br />
                        insights to help you reach your goals.
                    </p>
                    <div class="btn mt-6">
                        <button
                            class="header-get-started-btn w-40 py-3 hover:shadow-xl hover:animate-pulse text-sm px-2 mt-2 uppercase  text-headercolor bg-primarycolor rounded-full">
                            Sign up now!!!


                        </button>
                    </div>

                </div>
                <div class="content-img w-full py-0 relative">
                    <img class=" object-cover" src="/assets/images/illustration2.png" alt="">

                </div>


                <div class="floating-img1 absolute top-20 right-20 mx-60">
                    <img class=" object-contain w-6 md:hover:w-10" src="/assets/images/icon3.png" alt="">
                </div>

                <div class="floating-img3 absolute top-40  right-20">
                    <img class=" object-contain w-6 md:hover:w-10" src="/assets/images/icon1.png" alt="">

                </div>
                <div class="floating-img4  absolute bottom-0 top-20 left-80">
                    <img class=" object-contain w-6 md:hover:w-10" src="/assets/images/icon4.png" alt="">

                </div>
                <div class="floating-img5 absolute top-80 bottom-10 left-20">
                    <img class=" object-contain w-6 md:hover:w-10" src="/assets/images/icon6.png" alt="">

                </div>
                <div class="floating-img5 absolute top-60 right-80 mx-80 pr-20">
                    <img class=" object-contain w-6 md:hover:w-10" src="/assets/images/icon7.png" alt="">

                </div>

                <div class="floating-img5 absolute bottom-40   right-80 mx-80">
                    <img class=" object-contain w-6 md:hover:w-10" src="/assets/images/icon5.png" alt="">

                </div>
            </div>

        </header>



        <section class="about-us grid grid-cols-1 md:grid-cols-2 gap-10   ">
            <div class="about-us-img  ">
                <img class=" object-cover" src="/assets/images/illustration3.png" alt="">
            </div>
            <div class="about-us-text  rounded-md rounded-tr-none  mx-auto py-20 h-auto">
                <div class="section-title">
                    <h1 class="text-6xl font-bold text-textblack text-center"><span class="text-primarycolor text-5xl">Our</span> Story </h1>

                    <!-- <h1 class="text-6xl mt-10 font-bold text-headercolor text-center">Us </h1> -->

                </div>
                
                <blockquote>
                
                    <p class="about-us-para text-textgray text-lg font-bold mt-10 leading-relaxed mx-20">
                        <span class="mr-4 text-primarycolor  font-bold text-3xl"> “</span> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas quibusdam cupiditate nulla itaque
                        doloremque quas quasi similique sequi beatae provident a ipsa adipisci ipsum nisi laborum inventore,
                        libero atque iste!
                    </p>
                    
                    <p class="about-us-para text-textgray text-lg font-bold mt-10 leading-relaxed mx-20">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas quibusdam cupiditate nulla itaque
                        doloremque quas quasi similique sequi beatae provident a ipsa adipisci ipsum nisi laborum inventore,
                        libero atque iste !  <span class="text-primarycolor  font-bold text-3xl ml-4 "> ”</span>
                    </p>
                </blockquote>
               
              <div class="mx-20 text-center">
                <button
                class="about-get-started-btn w-40 py-3 px-2 mt-10 uppercase hover:shadow-xl text-sm  text-headercolor bg-primarycolor rounded-full">
                Read More


            </button>
              </div>
            </div>
        </section>


        <section class="services py-10">
            <div class="card-wrapper mx-10 md:mx-40 ">
                <div class="section-title mt-10">
                    <h1 class=" text-center text-6xl font-bold  "> <span class="text-primarycolor text-5xl">We</span>
                        Provide</h1>
                </div>
                <div class="product-content md:flex mt-20 justify-between gap-10 ">
                    <div
                        class=" cards bg-headercolor hover:border-t-2  hover:shadow-lg h-auto shadow-xl  md:w-80  rounded-2xl pb-10 mx-auto sm:w-100 transition-colors	">
                        <div class="card-img mx-auto">
                            <img class="mx-auto py-5 mt-10 object-contain bg-clip-border  "
                                src="/assets/images/icon3.png" alt="">
                        </div>
                        <h3 class="font-bold text-xl py-1 text-center uppercase   ">Business Plan</h3>
                        <p
                            class="text-lg font-medium  text-textgray justify-start  text-center mt-5 mx-5 ">
                            Lorem ipsum dolor, sit amet
                            consectetur adipisicing elit. Dignissimos optio </p>


                    </div>
                    <div
                        class="cards h-auto bg-headercolor hover:border-t-2 hover:border-y-primarycolor hover:shadow-lg  shadow-xl w-80 rounded-2xl pb-10 mx-auto">
                        <div class="card-img mx-auto">
                            <img class="mx-auto py-5 mt-10 object-contain bg-clip-border center "
                                src="/assets/images/icon2.png" alt="">
                        </div>
                        <h3 class="font-bold text-xl py-1 text-center uppercase  ">Curriculum Vitae</h3>
                        <p class="text-lg text-textgray font-medium text-center mt-5 mx-5 "> Lorem
                            ipsum dolor, sit amet
                            consectetur adipisicing elit. Dignissimos optio </p>


                    </div>
                    <div
                        class="cards  h-auto shadow-xl w-80 hover:shadow-lg hover:border-t-2 hover:border-y-primarycolor bg-headercolor rounded-2xl pb-10 mx-auto hover:">
                        <div class="card-img mx-auto">
                            <img class="mx-auto py-5 mt-10 object-contain bg-clip-border center "
                                src="/assets/images/icon1.png" alt="">
                        </div>
                        <h3 class="font-extrabold text-xl py-1 text-center uppercase wow shake js-show-on-scroll ">Cover
                            Letter</h3>
                        <p class="text-lg font-medium text-textgray  text-center mt-5 mx-5 "> Lorem
                            ipsum dolor, sit amet
                            consectetur adipisicing elit. Dignissimos optio </p>


                    </div>
                </div>
            </div>

        </section>



        <section class="testimonies py-10">
            <div class="testimonies-wrapper mx-40 my-20">
                <div class="section-title">
                    <h1 class=" text-center text-5xl font-bold  ">
                        Happy <span class="text-primarycolor text-6xl">Clients</span></h1>

                    <h3 class="text-center mt-5 text-textgray text-md leading-relaxed ">See what people are saying</h3>
                </div>

               <figure class="md:flex bg-headercolor rounded-md p-8 md:p-0 shadow-xl mx-40 mt-20 single-testimony">
                <img class="w-24 h-24 md:w-48 md:h-auto md:rounded-md rounded-full mx-auto" src="/assets/images/users/6.jpg"
                    alt="" width="384" height="512">
                <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                    <blockquote>
                        <p class="text-lg font-medium text-textgray">
                            “Tailwind CSS is the only framework that I've seen scale
                            on large teams. It’s easy to customize, adapts to any design,
                            and the build size is tiny.”
                        </p>
                    </blockquote>
                    <figcaption class="font-medium">
                        <div class="font-bold text-md text-primarycolor">
                            Catherine Jonathan
                        </div>
                        <div class="font-medium text-sm  text-textgray mt-2">
                            Staff Engineer, Algolia
                        </div>
                    </figcaption>
                </div>
                </figure>


            </div>
        </section>


        <footer class="footer bg-headercolor py-20 h-auto underline-offset-4 ">
            <div class="content mx-40 grid md:grid-cols-4 gap-24 ">
                <div class="footer-item">
                    <a href="#" class="flex items-center py-4 ">
                        <span class="font-bold text-primarycolor text-2xl">Financial Plan</span>
                    </a>
                    <p class=" font-light text-m text-textgray">
                        repudiandae incidunt minus itaque illo corporis
                        voluptatum.
                    </p>
                </div>
                
                <div class="footer-item">
                    <h3
                        class="py-4 text-textblack font-bold text-xl underline underline-offset-8 decoration-primarycolor">
                        About</h3>
                    <p class="pt-2 hover:underline hover:decoration-primarycolor hover:underline-offset-4">
                        <a class=" font-light text-m text-textgray e " href="">Support request</a>
                    </p>
                    <p class="pt-2 hover:underline hover:decoration-primarycolor hover:underline-offset-4">
                        <a class=" font-light text-m text-textgray " href="">Contact</a>
                    </p>
                    <p class="pt-2 hover:underline hover:decoration-primarycolor hover:underline-offset-4">
                        <a class=" font-light text-m text-textgray " href="">Branding</a>
                    </p>

                </div>
                <div class="footer-item">
                    <h3
                        class="py-4 text-textblack font-bold text-xl underline underline-offset-4 underline-offset-8 decoration-primarycolor">
                        Support</h3>
                    <p class="pt-2 hover:underline hover:decoration-primarycolor hover:underline-offset-4">
                        <a class=" font-light text-m text-textgray " href="">Websites</a>
                    </p>
                    <p class="pt-2 hover:underline hover:decoration-primarycolor hover:underline-offset-4">
                        <a class=" font-light text-m  text-textgray " href="">Social Media</a>
                    </p>
                    <p class="pt-2 hover:underline hover:decoration-primarycolor hover:underline-offset-4">
                        <a class=" font-light text-m  text-textgray " href="">Branding</a>
                    </p>
                </div>


                <div class="newsletter">
                    <h3
                        class="py-4 text-textblack font-bold text-xl underline underline-offset-8 decoration-primarycolor">
                        Newsletter</h3>
                    <form action="" method="post" class="pt-2">
                        <div class="absolute">
                            <input class="rounded-full py-3 border-0 focus:border-0 px-2 text-sm" class="pt-2"
                                type="text" name="" id="" placeholder="Your email">

                        </div>
                        <div class="relative bottom-0 right-30 ">
                            <button class="rounded-full bg-primarycolor text-headercolor text-sm py-2 px-6 "
                                type="submit">Submit</button>

                        </div>
                    </form>
                    <p class="pt-8 font-light text-md text-textgray">Lorem ipsum dolor sit amet </p>

                </div>

            </div>

            <div class="mx-40 mt-20">
                <hr class="text-primarycolor">
                <div class="footer-bottom md:flex mt-10 md:justify-between">
                    <p class="font-light text-m text-textgray">All right reserved 2022</p>
                    <div class="social w-60 flex font-light justify-evenly text-m text-textgray ">
                        <a href="">
                            <img class=" object-contain w-6" src="/assets/images/icons8-facebook-48.png" alt="">
                        </a>
                        <a href="">
                            <img class=" object-contain w-6" src="/assets/images/icons8-instagram-48.png" alt="">

                        </a>
                        <a href="">
                            <img class=" object-contain w-6" src="/assets/images/icons8-twitter-48.png" alt="">

                        </a>
                        <a href="">
                            <img class=" object-contain w-6" src="/assets/images/icons8-linkedin-48.png" alt="">

                        </a>

                    </div>
                </div>
            </div>



        </footer>
    </div>
    
    


    <script>
        ScrollReveal({
            reset: true,
            distance: '60px',
            duration: 2500,
            delay: 400
        });
        ScrollReveal().reveal('.section-title', { delay: 100, origin: 'down' });
        ScrollReveal().reveal('.cards', { delay: 100, origin: 'left', interval: 700 });
        ScrollReveal().reveal('.testimony-client-img', { delay: 200, origin: 'left', });
        ScrollReveal().reveal('.testimony-client-text', { delay: 200, origin: 'left' });
        ScrollReveal().reveal('.about-us-para', { delay: 200, origin: 'right' });
        ScrollReveal().reveal('.header-para', { delay: 300, origin: 'left' });
        ScrollReveal().reveal('.header-text1', { delay: 200, origin: 'bottom' });
        ScrollReveal().reveal('.about-get-started-btn', { delay: 200, origin: 'bottom' });
        ScrollReveal().reveal('.header-get-started-btn', { delay: 200, origin: 'bottom' });
        ScrollReveal().reveal('.single-testimony', { delay: 500, origin: 'left' });






    </script>



</body>

</html>