@extends('layouts.app')
@section('content')
    <section>
        <div class="abt w-[40%] mx-auto mt-32 ">
            <div class="hea">
                <h1 class="font-bold text-6xl text-center">Contact us</h1>
            </div>
            <div class="dets">
                <h3 class="font-bold text-3xl text-center mt-8">
                    If you have any questions, please feel</br> free to get in touch with us, we’ll get</br> back to you
                    shortly.
                </h3>
            </div>
        </div>
        <div class="grid grid-cols-2 mx-auto w-[60%] mt-20">
            <div>
                <div class="text-2xl font-bold">
                    <h6>CONTACT DETAILS</h6>
                </div>
                <div class="2 list-none text-xl">
                    <ul class="text mt-4">
                        <li>E: <span class="text text-red-500">info@example.com</span></li>
                        <li>P: +1 234 567 890</li>
                        <li>A: 123 Fifth Avenue, New York, NY 10160</li>
                    </ul>

                </div>
                <div class="mt-10 font-bold">
                    <h6>FOLLOW US</h6>
                </div>

                <div class="ic flex gap-8 mt-5">
                    <div>
                        <a href=""><i class="fa-brands fa-facebook fa-xl"></i></a>
                    </div>
                    <div>
                        <a href=""><i class="fa-brands fa-square-twitter fa-xl"></i></a>
                    </div>
                    <div>
                        <a href=""><i class="fa-brands fa-square-youtube fa-xl"></i></a>
                    </div>
                </div>

            </div>
            <div>
                <form action="">
                    <div>
                        <div class="font-bold">
                            <label for="name">Name</label>
                            <span class="req text-red-600">*</span>
                            <div class="mt-5">
                                <input type="text" placeholder="first-name" class="border-2 border-dashed">
                                <input type="text" placeholder="last-name" class="border-2 border-dashed">
                            </div>
                        </div>
                        <div class="mt-5 font-bold">
                            <label for="name">Email</label>
                            <span class="req text-red-600">*</span>
                            <div class="mt-5"><input type="text" class="border-2 border-dashed"></div>
                        </div>
                        <div class="mt-5 font-bold">
                            <label for="name">Message</label>
                            <span class="req text-red-600">*</span>
                            <div class="mt-5">
                                <textarea name="" id="" cols="50" rows="10" placeholder="if any you need any help!"
                                    class="border-2 border-dashed"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="bt mt-7"> 
                        <button class="btn bg-red-500 p-2 rounded-md w-40" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </section>
    <section>
        <div class="outer pb-28">
            <div class="inner">
                <div class="element">
                    <div class="line border-2 w-0 border-red-600 mx-auto mt-32 h-24"></div>
                    <div class="us">
                        <p class="ab text-center text-4xl font-bold mt-10">Useful Links</p>
                    </div>
                  
                    <div class="grid grid-cols-3 justify-items-center mt-14">
                        <div class="fast">
                            <div class="border-2 solid border-white bg-red-400 rounded-full p-4 w-14 h-14 ml-14">
                                <a href="">
                                    <i class="fa-regular fa-handshake"></i>
                                </a>
                            </div>
                          
                            <h3 class="font-bold text-2xl mt-2">Partnerships</h3>
                            <p class="mt-4">
                                Lorem ipsum dolor sit amet consectetur
                            </p>
                            <div class="btn bg-red-500 p-2 rounded-md w-40 text-center font-bold mt-6">
                                <button>APPLY HERE</button>
                            </div>
                        </div>
                        <div class="faq">
                            <div class="border-2 solid border-white bg-red-400 rounded-full p-4 w-14 h-14 ml-14">
                                <a href="">
                                    <i class="fa-solid fa-question"></i>
                                </a>
                            </div>
                          
                            <h3 class="font-bold text-2xl mt-2"> FAQ</h3>
                                <p class="mt-4">
                                    Lorem ipsum dolor sit amet consectetur
                                </p>
                            <div class="btn bg-red-500 p-2 rounded-md w-40 text-center font-bold mt-6">
                                <button>GO TO FAQ</button>
                            </div>
                        </div>
                        <div class="lo">
                            <div class="border-2 solid border-white bg-red-400 rounded-full p-4 w-14 h-14 ml-14">
                                <a href="">
                                    <i class="fa-solid fa-location-crosshairs"></i>
                                </a>
                            </div>
                          
                            <h3 class="font-bold text-2xl mt-2">Store Locations</h3>
                            <p class="mt-4">
                                Lorem ipsum dolor sit amet consectetur
                            </p>
                            <div class="btn bg-red-500 p-2 rounded-md w-40 text-center font-bold mt-6">
                                <button>FIND STORE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
