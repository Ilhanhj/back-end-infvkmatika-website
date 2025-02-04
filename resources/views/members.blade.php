@extends('layouts.main')

@section('container')
    <!-- The Member Section START -->
    <section id="member" class="pt-32 pb-5">
        <h1 class="title-section">Member <span class="text-sky-500 font-outline-0">Kami</span></h1>
        <h1 class=" text-center text-neutral-500 text-sm mt-2">Keberagaman anggota kami menciptakan kreativitas dan <br>
          keahlian
          berbeda untuk mencapai tujuan bersama.
        </h1>
        <section class="container mt-10  mx-auto flex flex-wrap justify-center items-center gap-8">
          @foreach ($members as $member)
          <!-- Members -->
          <div class="relative overflow-hidden w-60 h-80  cursor-pointer text-2xl font-bold bg-gradient-to-bl from-gray-400 via-gray-200 to-slate-100 ">
          <div class="z-10 absolute w-full h-full peer"></div>
          <div
            class="absolute peer-hover:-top-20 peer-hover:-left-16 peer-hover:w-[140%] peer-hover:h-[140%] -top-32 -left-28 w-32 h-44  bg-sky-800 transition-all duration-500"
          ></div>
          <div
            class="absolute flex flex-col text-xl text-center items-end justify-end peer-hover:right-0 peer-hover:rounded-b-none peer-hover:bottom-0 peer-hover:items-center peer-hover:justify-center peer-hover:w-full peer-hover:h-full -bottom-32 -right-36 w-36 h-44  bg-gradient-to-t from-sky-500 to-sky-800 transition-all duration-500 space-y-2 p-2"
          >
          <h4 class="text-lg font-semibold font-poppins text-white">{{ $member->member }}</h4>
          <h4 class="block text-sm text-gray-300 font-normal">{{ $member->nickname }}</h4>
          <p class="mt-4 font-normal text-sm text-white">"{{ $member->quotes }}"</p>
          </div>
          <div class="w-full h-full items-center justify-center flex uppercase">
            <img src="{{ asset('storage/' . $member->image) }}">
          </div>
        </div>
        
          @endforeach

        </section>
    </section>
    <!-- The Member Section END -->

    <!-- The Contact Section START -->
    <section id="contact" class="pt-32 pb-36">
        <div class="container mx-auto md:mx-auto md:px-4 lg:mx-auto">
            <div class="p-10 text-center lg:text-center">
                <div class="w-full flex flex-col justify-center lg:justify-center p-5">
                    <h1 class="text-5xl lg:text-6xl font-bold text-transparent text-center lg:text-center bg-sky-500 bg-clip-text"
                        data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-offset="300"
                        data-aos-once="true">
                        Punya
                        pertanyaan tentang kelas kami ?
                        <h2 class=" text-neutral-500 text-lg lg:text-xl mt-5 text-center lg:text-center"
                            data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out"
                            data-aos-offset="300" data-aos-once="true">Mau
                            nanya-nanya soal
                            kelas, butuh
                            bantuan, atau sekadar pengen
                            ngobrol santai, kami siap ngebantu dan ngasih tau info yang kamu butuhin. 🌟
                        </h2>
                </div>
                <div class="flex  justify-center lg:justify-center p-5 pt-10">
                    <div class="w-52 h-12 bg-sky-800 hover:bg-sky-900 flex justify-center " id="btn-confetti"
                        data-aos="fade-up" data-aos-duration="1500" data-aos-easing="ease-in-out" data-aos-offset="300"
                        data-aos-once="true">
                        <a href="mailto:infvckmatika@gmail.com"
                            class="flex text-white justify-center items-center text-sm">Mari ngobrol
                            bareng!
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="ml-2" width="24"
                                height="24">
                                <path
                                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                                    fill="rgba(255,255,255,1)"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- The Contact Section END -->


    <!-- The Footer Section START -->
    <section id="footer" class="bg-white">
        <div class="container p-4 mx-auto md:mx-auto md:px-4 lg:mx-auto">
            <div class="flex flex-wrap items-center mx-auto">
                <div class="flex flex-col justify-center lg:flex-row lg:justify-between w-full text-start py-3">
                    <div class="flex justify-center lg:justify-normal">
                        <a href="/"
                            class="text-sky-500 font-bold text-5xl  lg:text-2xl after:content-['>'] after:text-sky-800 before:content-['</'] before:text-sky-800">Hello Fvcker</a>
                    </div>
                    <div class="w-full flex justify-center pt-10 lg:pt-0 lg:justify-end lg:w-1/2">
                        <div class="flex gap-40 lg:gap-10">
                            <div class="flex flex-row gap-5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20">
                                    <path
                                        d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM20 7.23792L12.0718 14.338L4 7.21594V19H20V7.23792ZM4.51146 5L12.0619 11.662L19.501 5H4.51146Z"
                                        fill="rgba(21, 94, 117, 1)"></path>
                                </svg><a href="mailto:infvckmatika@gmail.com"
                                    class="text-sky-800 hover:text-sky-300">Email</a>
                            </div>
                            <div class="flex flex-row gap-5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20">
                                    <path
                                        d="M12.001 9C10.3436 9 9.00098 10.3431 9.00098 12C9.00098 13.6573 10.3441 15 12.001 15C13.6583 15 15.001 13.6569 15.001 12C15.001 10.3427 13.6579 9 12.001 9ZM12.001 7C14.7614 7 17.001 9.2371 17.001 12C17.001 14.7605 14.7639 17 12.001 17C9.24051 17 7.00098 14.7629 7.00098 12C7.00098 9.23953 9.23808 7 12.001 7ZM18.501 6.74915C18.501 7.43926 17.9402 7.99917 17.251 7.99917C16.5609 7.99917 16.001 7.4384 16.001 6.74915C16.001 6.0599 16.5617 5.5 17.251 5.5C17.9393 5.49913 18.501 6.0599 18.501 6.74915ZM12.001 4C9.5265 4 9.12318 4.00655 7.97227 4.0578C7.18815 4.09461 6.66253 4.20007 6.17416 4.38967C5.74016 4.55799 5.42709 4.75898 5.09352 5.09255C4.75867 5.4274 4.55804 5.73963 4.3904 6.17383C4.20036 6.66332 4.09493 7.18811 4.05878 7.97115C4.00703 9.0752 4.00098 9.46105 4.00098 12C4.00098 14.4745 4.00753 14.8778 4.05877 16.0286C4.0956 16.8124 4.2012 17.3388 4.39034 17.826C4.5591 18.2606 4.7605 18.5744 5.09246 18.9064C5.42863 19.2421 5.74179 19.4434 6.17187 19.6094C6.66619 19.8005 7.19148 19.9061 7.97212 19.9422C9.07618 19.9939 9.46203 20 12.001 20C14.4755 20 14.8788 19.9934 16.0296 19.9422C16.8117 19.9055 17.3385 19.7996 17.827 19.6106C18.2604 19.4423 18.5752 19.2402 18.9074 18.9085C19.2436 18.5718 19.4445 18.2594 19.6107 17.8283C19.8013 17.3358 19.9071 16.8098 19.9432 16.0289C19.9949 14.9248 20.001 14.5389 20.001 12C20.001 9.52552 19.9944 9.12221 19.9432 7.97137C19.9064 7.18906 19.8005 6.66149 19.6113 6.17318C19.4434 5.74038 19.2417 5.42635 18.9084 5.09255C18.573 4.75715 18.2616 4.55693 17.8271 4.38942C17.338 4.19954 16.8124 4.09396 16.0298 4.05781C14.9258 4.00605 14.5399 4 12.001 4ZM12.001 2C14.7176 2 15.0568 2.01 16.1235 2.06C17.1876 2.10917 17.9135 2.2775 18.551 2.525C19.2101 2.77917 19.7668 3.1225 20.3226 3.67833C20.8776 4.23417 21.221 4.7925 21.476 5.45C21.7226 6.08667 21.891 6.81333 21.941 7.8775C21.9885 8.94417 22.001 9.28333 22.001 12C22.001 14.7167 21.991 15.0558 21.941 16.1225C21.8918 17.1867 21.7226 17.9125 21.476 18.55C21.2218 19.2092 20.8776 19.7658 20.3226 20.3217C19.7668 20.8767 19.2076 21.22 18.551 21.475C17.9135 21.7217 17.1876 21.89 16.1235 21.94C15.0568 21.9875 14.7176 22 12.001 22C9.28431 22 8.94514 21.99 7.87848 21.94C6.81431 21.8908 6.08931 21.7217 5.45098 21.475C4.79264 21.2208 4.23514 20.8767 3.67931 20.3217C3.12348 19.7658 2.78098 19.2067 2.52598 18.55C2.27848 17.9125 2.11098 17.1867 2.06098 16.1225C2.01348 15.0558 2.00098 14.7167 2.00098 12C2.00098 9.28333 2.01098 8.94417 2.06098 7.8775C2.11014 6.8125 2.27848 6.0875 2.52598 5.45C2.78014 4.79167 3.12348 4.23417 3.67931 3.67833C4.23514 3.1225 4.79348 2.78 5.45098 2.525C6.08848 2.2775 6.81348 2.11 7.87848 2.06C8.94514 2.0125 9.28431 2 12.001 2Z"
                                        fill="rgba(21, 94, 117, 1)"></path>
                                </svg><a href="https://www.instagram.com/infvckmatika_"
                                    class="text-sky-800 hover:text-sky-300">Instagram</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- The Footer Section END -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script>
      gsap.from('#navnav', { y: -100, opacity: 0, duration: 1, ease: "circ.inOut" });
      gsap.from("#members-img", {
        stagger: 0.5,
        clipPath: "inset(100% 0 0 0",
        duration: 3,
        ease: "power4.out",
      })
      gsap.from("#members", {
        y: 100,
        stagger: 0.5, // 0.1 seconds between when each ".box" element starts animating
        duration: 1.5,
        ease: "power4.out",
      });    
    </script>
  
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="js/script.js"></script>

@endsection