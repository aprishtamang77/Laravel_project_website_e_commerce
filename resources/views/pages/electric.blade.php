@extends('layouts.app')
@section('content')
    <main class="main mt-20 ">
        <div class="container w-[1200px] mx-auto">
            <nav class="nav block ">
                <a href="../">Home</a>
                &nbsp;/&nbsp;Electric Scooters
            </nav>
            <div>
                <div class="grid grid-cols-5 mt-12">

                    <div class="left flex w-96">
                        <p>Showing 1-12 of 18 results</p>
                        <span class="ml-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path
                                    d="M18.75 12.75h1.5a.75.75 0 0 0 0-1.5h-1.5a.75.75 0 0 0 0 1.5ZM12 6a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 12 6ZM12 18a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 12 18ZM3.75 6.75h1.5a.75.75 0 1 0 0-1.5h-1.5a.75.75 0 0 0 0 1.5ZM5.25 18.75h-1.5a.75.75 0 0 1 0-1.5h1.5a.75.75 0 0 1 0 1.5ZM3 12a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 3 12ZM9 3.75a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM12.75 12a2.25 2.25 0 1 1 4.5 0 2.25 2.25 0 0 1-4.5 0ZM9 15.75a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
                            </svg>
                        </span>
                        <span>Filter</span>
                        </a>
                    </div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div class="right flex">
                        <form action="">
                            <select name="" id="">
                                <option value="">Default Sporting</option>
                                <option value="">Sort by popularity</option>
                                <option value="">Sort by average rating</option>
                                <option value="">Sort by latest</option>
                                <option value="">Sort by price: low to high</option>
                                <option value="">Sort by price: high to low</option>
                            </select>
                            <input type="text">
                        </form>
                        <div class="flex gap-4">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6">
                                    <path fill-rule="evenodd"
                                        d="M2.625 6.75a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Zm4.875 0A.75.75 0 0 1 8.25 6h12a.75.75 0 0 1 0 1.5h-12a.75.75 0 0 1-.75-.75ZM2.625 12a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0ZM7.5 12a.75.75 0 0 1 .75-.75h12a.75.75 0 0 1 0 1.5h-12A.75.75 0 0 1 7.5 12Zm-4.875 5.25a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Zm4.875 0a.75.75 0 0 1 .75-.75h12a.75.75 0 0 1 0 1.5h-12a.75.75 0 0 1-.75-.75Z"
                                        clip-rule="evenodd" />
                                </svg>

                            </span>
                            <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6">
                                    <path fill-rule="evenodd"
                                        d="M3 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 5.25Zm0 4.5A.75.75 0 0 1 3.75 9h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 9.75Zm0 4.5a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Zm0 4.5a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-4 grid-rows-3 gap-10">
                <div>
                    <div class="img">
                        <img src="{{ asset('images/lightg.jpg') }}" alt="">
                    </div>
                    <div class="det">
                        <div>
                            <a href="">
                                <h4>Booster Brave F1</h4>
                            </a>
                            <span>$490.00</span>
                        </div>
                        <table>
                            <tr>
                                <td class="flex gap-5">
                                    <div>LG</div>
                                    <div>MD</div>
                                    <div class="border-red-700 border-2 border-dashed">SM</div>
                                    <div>XL</div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                
                
                <div>
                    <div class="img">
                        <img src="{{ asset('images/sblue.jpg') }}" alt="">
                    </div>
                    <div class="det">
                        <div>
                            <a href="">
                                <h4>Booster Brave F1</h4>
                            </a>
                            <span>$490.00</span>
                        </div>
                        <table class="hidden">
                            <tr>
                                <td class="flex gap-5">
                                    <div>LG</div>
                                    <div>MD</div>
                                    <div>SM</div>
                                    <div>XL</div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div>
                    <div class="img">
                        <img src="{{ asset('images/gr.jpg') }}" alt="">
                    </div>
                    <div class="det">
                        <div>
                            <a href="">
                                <h4>Booster Brave F1</h4>
                            </a>
                            <span>$490.00</span>
                        </div>
                        <table class="hidden">
                            <tr>
                                <td class="flex gap-5">
                                    <div>LG</div>
                                    <div>MD</div>
                                    <div>SM</div>
                                    <div>XL</div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div>
                    <div class="img">
                        <img src="{{ asset('images/ye.jpg') }}" alt="">
                    </div>
                    <div class="det">
                        <div>
                            <a href="">
                                <h4>Booster Brave F1</h4>
                            </a>
                            <span>$490.00</span>
                        </div>
                        <table class="hidden">
                            <tr>
                                <td class="flex gap-5">
                                    <div>LG</div>
                                    <div>MD</div>
                                    <div>SM</div>
                                    <div>XL</div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div>
                    <div class="img">
                        <img src="{{ asset('images/pu.jpg') }}" alt="">
                    </div>
                    <div class="det">
                        <div>
                            <a href="">
                                <h4>Booster Brave F1</h4>
                            </a>
                            <span>$490.00</span>
                        </div>
                        <table class="hidden">
                            <tr>
                                <td class="flex gap-5">
                                    <div>LG</div>
                                    <div>MD</div>
                                    <div>SM</div>
                                    <div>XL</div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div>
                    <div class="img">
                        <img src="{{ asset('images/or.jpg') }}" alt="">
                    </div>
                    <div class="det">
                        <div>
                            <a href="">
                                <h4>Booster Brave F1</h4>
                            </a>
                            <span>$490.00</span>
                        </div>
                        <table class="hidden">
                            <tr>
                                <td class="flex gap-5">
                                    <div>LG</div>
                                    <div>MD</div>
                                    <div>SM</div>
                                    <div>XL</div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div>
                    <div class="img">
                        <img src="{{ asset('images/lightb.jpg') }}" alt="">
                    </div>
                    <div class="det">
                        <div>
                            <a href="">
                                <h4>Booster Brave F1</h4>
                            </a>
                            <span>$490.00</span>
                        </div>
                        <table class="hidden">
                            <tr>
                                <td class="flex gap-5">
                                    <div>LG</div>
                                    <div>MD</div>
                                    <div>SM</div>
                                    <div>XL</div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div>
                    <div class="img">
                        <img src="{{ asset('images/re1.jpg') }}" alt="">
                    </div>
                    <div class="det">
                        <div>
                            <a href="">
                                <h4>Booster Brave F1</h4>
                            </a>
                            <span>$490.00</span>
                        </div>
                        <table class="hidden">
                            <tr>
                                <td class="flex gap-5">
                                    <div>LG</div>
                                    <div>MD</div>
                                    <div>SM</div>
                                    <div>XL</div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div>
                    <div class="img">
                        <img src="{{ asset('images/wh.jpg') }}" alt="">
                    </div>
                    <div class="det">
                        <div>
                            <a href="">
                                <h4>Booster Brave F1</h4>
                            </a>
                            <span>$490.00</span>
                        </div>
                        <table class="hidden">
                            <tr>
                                <td class="flex gap-5 ">
                                    <div>LG</div>
                                    <div>MD</div>
                                    <div>SM</div>
                                    <div>XL</div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
