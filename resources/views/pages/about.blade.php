@extends('layouts.app')
@section('content')
    <section>
        <div class="abt w-[40%] mx-auto mt-32">
            <div class="hea">
                <h1 class="font-bold text-6xl text-center">About us</h1>
            </div>
            <div class="dets">
                <h3 class="font-bold text-3xl text-center mt-8">The joy of easy and hassle free travel using electric
                    scooters
                    made us dream about starting this business.</h3>
            </div>
        </div>
        <section class="w-[80%] mx-auto mt-52">
            <div class="out flex">
                <div class="in1 w-[40%] pr-12 pt-20">
                    <div class="inff">
                        <div>
                            <h6>A FEW WORDS</h6>
                        </div>
                        <div class="hea mt-10">
                            <h2 class="font-bold text-6xl">About the founders</h2>
                        </div>
                        <div class="dets ">
                            <h5 class="  text-2xl mt-6">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam viverra lacus eget ornare
                                hendrerit. Quisque tempus bibendum elementum. Donec eget urna nisi. In non nunc mauris.
                                Suspendisse in sem sed lacus.

                                Blandit at ornare nibh. Sed bibendum, metus vitae aliquet dignissim, sem lorem pretium
                                ipsum.
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="in2">
                    <div class="img ml-28">
                        <img src="{{ asset('images/couple.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section>
        <div class="outer">
            <div class="inner">
                <div class="element">
                    <div class="line border-2 w-0 border-red-600 mx-auto mt-48 h-24"></div>
                    <div class="us">
                        <p class="ab text-center text-xs font-bold mt-10">WE VALUE OUR CLIENTS</p>
                    </div>
                    <div class="quote">
                        <h2 class="font-bold text-5xl text-center  mt-8">
                            Customer service is at the</br> core of our business
                        </h2>
                    </div>
                    <div class="lor mt-8 ">
                        <p class="text-center ">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. </br>Atque consectetur expedita
                            dolore. Vitae dicta ab quaerat nobis, corporis doloremque eos quos</br>
                        </p>
                        <p  class="text-center mt-14 ">
                            libero! Non quibusdam facilis necessitatibus,</br> tenetur fugiat dignissimos repellendus.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="bg-center  bg-no-repeat h-screen bg-fixed mt-20"
        style="background-image: url('{{ asset('images/man.jpg') }}');">
        
    </div>
    </section>
@endsection
