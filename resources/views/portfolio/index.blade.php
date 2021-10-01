@extends('layouts.portfolio')

@push('custom-css')
    <style>
        .page {
            width: 210mm;
            min-height: 297mm;
            padding: 20mm;
            margin: 10mm auto;
            border: 1px #D3D3D3 solid;
            border-radius: 5px;
            background: linear-gradient(#F2F4F9, #E0E6EF);
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .subpage {
            height: 257mm;
            position: relative;
        }

        @page {
            size: A4;
            margin: 0;
        }
        @media print {
            html, body {
                width: 210mm;
                height: 297mm;
                -webkit-print-color-adjust: exact;
            }
            .page {
                margin: 0;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
            }
        }

        .subpage h3, #introduction h5 {
            color: #2083CA;
            position: relative;
        }

        #introduction img {
            border-radius: 0px 90px;
            height: 500px;
            object-fit: cover;
        }

        #introduction h3::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            background-color: #2083CA;
            bottom: -8px;
        }

        #introduction p {
            text-align: justify;
        }

        #introduction .row:first-child::after {
            content: '';
            width: 100%;
            height: 2px;
            /* background-color: #2083CA; */
            margin: 4rem 12px 0;
        }

        .num-page {
            color: #2083CA;
            position: absolute;
            right: 0;
            bottom: 0;
        }

        .num-page div:first-child {
            width: 80px;
            height: 2px;
            background-color: #2083CA;
            align-self: center;
            margin-right: 8px;
        }

        .num-my-project div:first-child {
            width: 80px;
            height: 2px;
            background-color: #2083CA;
            margin-top: 12px;
            margin-right: 8px;
        }

        .num-my-project {
            color: #2083CA;
        }

        .num-my-project .my-project-content{
            color: #404040;
        }

        #experience .ex-time {
            background-color: #2083CA;
            color: white;
            border-radius: 100%;
            position: absolute;
            height: 50px;
            width: 50px;
            left: -25px;
        }

        #experience .ex-time span {
            position: relative;
            top: 12px;
            left: -4px;
        }

        #experience .hard-skill .col {
            max-width: 90%;
            margin-bottom: 12px;
            padding: 8px 12px;
            border-radius: 4px;
            font-weight: 600;
            background: linear-gradient(90.45deg, #9CBDFC 21.6%, #A6DDF3 79.81%);
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            width: auto;
        }

        #experience .soft-skill .col {
            color: #9E20CA;
        }

        #experience .soft-skill .num-soft-skill {
            width:40px; 
            height:40px;
            margin: 8px auto 0px;
            line-height: 2.3;
            color: white;
            background: linear-gradient(139.29deg, #ABA3F5 20.81%, #D6C3FC 81.92%);
        }

        .border-primary {
            border-color: #2083CA!important;
        }

        .text-primary {
            color: #2083CA!important;
        }

        #team-work img {
            object-fit: cover;
            height: 500px;
        }

        #team-work .reason {
            margin-bottom: 24px;
            border: 0.2px solid #12A4B6;
            box-shadow: 3px 4px 4px rgba(0, 0, 0, 0.07);
            border-radius: 6px;
        }

        .sosmed {
            color: #12A4B6;
        }

        #introduction .linkedIn, .dribbble {
            background-color: #E0F3F6;
            padding: 8px 16px;
            border-radius: 8px;
            margin-right: 8px;
        }

        .my-project-ico span:first-child {
            position: absolute;
            left: 69px;
            top: 40px;
            font-weight: bold;
            font-size: 54px;
            color: #12A4B6;
        }

        .my-project-ico span:last-child {
            position: absolute;
            left: 76px;
            top: 110px;
            font-weight: bold;
            color: #12A4B6;
        }

        #testimoni .card::before {
            content: "";
            background-image: url({{ asset("img/portfolio/testimoni/bg-before.svg") }});
            position: absolute;
            background-size: contain;
            width: 100%;
            height: 100%;
            z-index: 0;
            background-repeat: no-repeat;
        }

        #testimoni .card::after {
            content: "";
            background-image: url({{ asset("img/portfolio/testimoni/bg-after.svg") }});
            position: absolute;
            background-size: contain;
            width: 100%;
            height: 100%;
            z-index: 0;
            background-repeat: no-repeat;
            top: 172px;
        }

        #testimoni .card {
            border: 0.617801px solid rgba(73, 154, 212, 0.46);
            border-radius: 16px;
            height: 310px;
        }

        #testimoni .card .card-body {
            z-index: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
    </style>
@endpush

@section('content')
    <div class="page">
        <div class="subpage" id="introduction">
            <div class="row">
                <div class="col">
                    <h3 class="fw-bold">{{ $name }}</h3>
                    <h5 class="mb-4 text-justify">{{ $profesi }}</h5>
                    <p class="ms-3">{{ $self_desc }}</p>
                </div>
                <div class="col">
                    <img src="{{ Auth::user()->photo_profile }}" class="w-100">
                </div>  
            </div>
            <div class="row mt-1">
                <h2 class="sosmed">Social Media</h2>
                <div class="col-auto linkedIn d-flex align-items-center gap-2">
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.8438 12.2804H10.7695V9.03181C10.7695 8.25717 10.7556 7.25994 9.69059 7.25994C8.61018 7.25994 8.44486 8.10399 8.44486 8.97543V12.2802H6.37057V5.59979H8.3619V6.51275H8.38979C8.58908 6.17199 8.87706 5.89166 9.22306 5.70163C9.56906 5.51159 9.96012 5.41896 10.3546 5.4336C12.4571 5.4336 12.8447 6.81653 12.8447 8.61564L12.8438 12.2804ZM4.02994 4.68667C3.36511 4.68678 2.82605 4.14789 2.82594 3.48306C2.82583 2.81822 3.36467 2.27917 4.0295 2.27906C4.69434 2.27889 5.23339 2.81778 5.2335 3.48262C5.23356 3.80189 5.10679 4.1081 4.88108 4.33391C4.65537 4.55971 4.34921 4.6866 4.02994 4.68667ZM5.06714 12.2805H2.99061V5.59979H5.06709V12.2804L5.06714 12.2805ZM13.878 0.352581H1.94826C1.38443 0.346238 0.922052 0.797902 0.915161 1.36173V13.3412C0.921833 13.9053 1.38416 14.3574 1.94821 14.3515H13.878C14.4432 14.3585 14.9073 13.9064 14.9152 13.3412V1.3608C14.9071 0.795878 14.4429 0.344269 13.878 0.351652" fill="#0A66C2"/>
                    </svg>         
                    <span class="small">{{ $instagram }}</span>
                </div>
                {{-- <div class="col-auto dribbble d-flex align-items-center gap-2">
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.4161 12.4077C14.4161 12.9234 14.2113 13.418 13.8466 13.7827C13.482 14.1473 12.9874 14.3522 12.4717 14.3522H2.36058C1.84488 14.3522 1.35031 14.1473 0.985652 13.7827C0.620998 13.418 0.416138 12.9234 0.416138 12.4077V2.29662C0.416138 1.78092 0.620998 1.28634 0.985652 0.921687C1.35031 0.557033 1.84488 0.352173 2.36058 0.352173H12.4717C12.9874 0.352173 13.482 0.557033 13.8466 0.921687C14.2113 1.28634 14.4161 1.78092 14.4161 2.29662V12.4077Z" fill="#FF4081"/>
                        <path d="M10.9398 8.2361C10.8739 8.21576 10.8047 8.20863 10.736 8.21512C10.6673 8.22162 10.6006 8.24161 10.5397 8.27395C10.4788 8.30628 10.4249 8.35034 10.381 8.40357C10.3371 8.4568 10.3042 8.51817 10.2842 8.58416C9.96372 9.61783 9.3835 10.6915 9.12022 10.7503C8.92305 10.7503 8.63955 10.583 8.35878 10.1903C9.00978 8.7926 9.35083 7.03794 9.35083 5.8666C9.35083 2.59488 8.52483 1.90771 7.83105 1.90771C6.37 1.90771 6.35328 5.76238 6.35328 5.80127C6.35328 6.25471 6.36961 6.67549 6.40033 7.06749C6.17994 6.98608 5.94694 6.94409 5.712 6.94344C4.21089 6.94344 3.52722 8.42471 3.52722 9.8006C3.52722 11.0972 4.25483 12.4077 5.87844 12.4077C6.64533 12.4077 7.29167 11.9057 7.81317 11.1551C8.27517 11.6354 8.75894 11.8147 9.11983 11.8147C10.2566 11.8147 11.0091 9.7796 11.2805 8.90344C11.3225 8.76975 11.3103 8.62493 11.2466 8.50013C11.1829 8.37533 11.0727 8.28052 10.9398 8.2361ZM5.87922 11.3437C4.7005 11.3437 4.57255 10.2645 4.57255 9.80021C4.57255 9.7271 4.58578 8.00705 5.71278 8.00705C6.15767 8.00705 6.49911 8.35121 6.49911 8.35121C6.52439 8.37844 6.55239 8.40216 6.58155 8.42277C6.72739 9.16321 6.93311 9.7551 7.17111 10.2241C6.78067 10.9 6.32839 11.3437 5.87922 11.3437ZM7.7665 8.87894C7.54911 8.12838 7.39861 7.12077 7.39861 5.80127C7.39861 4.5856 7.65761 3.44149 7.87267 3.05066C8.03755 3.3011 8.30628 4.08121 8.30628 5.8666C8.30628 6.81394 8.09667 7.91449 7.7665 8.87894Z" fill="white"/>
                    </svg>                                                            
                    <span class="small">dribbble.com/asadiiefji</span>
                </div> --}}
            </div>
            <div class="num-page d-flex ms-auto justify-content-end">
                <div></div>
                <span>01 Introduction</span>
            </div>
        </div>    
    </div>
    <div class="page">
        <div class="subpage" id="experience">
            {{-- Experiences --}}
            <div class="row">
                <div class="col"><h3 class="fw-bold">Experiences</h3></div>
            </div>
            @foreach ($work_exps as $work_exp)
                <div class="row border-start border-primary">
                    <div class="col-12">
                        <div class="row position-relative">
                            <div class="col-auto ex-time">
                                <span>Now</span>
                            </div>
                            <div class="col ms-4">
                                <div><span class="fw-bold">{{ $work_exp->work_place }}</span> - {{ $work_exp->work_city }}</div>
                                <div class="text-primary">{{ $work_exp->year_start }} - {{ $work_exp->year_end }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col ms-4 mt-3">
                        <p>{{ $work_exp->desc_exp }}</p>
                    </div>
                </div>
            @endforeach
            {{-- <div class="row border-start border-primary ">
                <div class="col-12">
                    <div class="row position-relative">
                        <div class="col-auto ex-time">
                            <span></span>
                        </div>
                        <div class="col ms-4">
                            <div><span class="fw-bold">Fingerspot</span> - Denpasar, Bali</div>
                            <div class="text-primary">July 2020 - Present</div>
                        </div>
                    </div>
                </div>
                <div class="col ms-4 mt-3">
                    <ul>
                        <li>Grew my startup by a total of 13 projects with initiating from only two-person until seven workers now as a freelancer by fulfilling the need of mobile and website development for student’s research and community dedication by handling UI design, marketing strategy, and promotion.</li>
                    </ul>
                </div>
            </div> --}}
            {{-- HARD SKILLS --}}
            <div class="row mt-3">
                <div class="col"><h3 class="text-primary fw-bold text-end">Hard Skills</h3></div>
            </div>
            <div class="row row-cols-1 justify-content-end hard-skill">
                @foreach ($hard_skills as $hard_skill)
                    <div class="col">{{ $hard_skill }}</div>
                @endforeach
            </div>
            {{-- SOFT SKILLS --}}
            <div class="row mt-3 mb-3">
                <div class="col"><h3 class="text-primary fw-bold">Soft Skills</h3></div>
            </div>
            <div class="row justify-content-center soft-skill">
                @foreach ($soft_skills as $soft_skill)
                    <div class="col">
                        <span>{{ $soft_skill }}</span>
                        <div class="text-center bg-primary rounded-circle num-soft-skill">0{{ $loop->iteration }}</div>
                    </div>
                @endforeach
            </div>
            <div class="num-page d-flex ms-auto justify-content-end">
                <div></div>
                <span>02 Key Competencies</span>
            </div>
        </div>
    </div>
    <div class="page">
        <div class="subpage" id="team-work">
            <div class="row">
                <div class="col">
                    <h3 class="fw-bold text-center">Team Work Benefits</h3>
                </div>
            </div>
            <div class="row mb-5 mt-4">
                <div class="col-6 m-auto">
                    <img src="{{ Auth::user()->photo_profile }}" class="w-100">
                </div>
            </div>
            <div class="row row-cols-3 justify-content-center">
                <div class="col">
                    <div class="card reason">
                        <div class="card-body">
                            <h5 class="card-title">1st Reason Title</h5>
                            <p class="card-text">why why why why why shy shy</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card reason">
                        <div class="card-body">
                            <h5 class="card-title">2nd Reason Title</h5>
                            <p class="card-text">why why why why why shy shy</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card reason">
                        <div class="card-body">
                            <h5 class="card-title">3rd Reason Title</h5>
                            <p class="card-text">why why why why why shy shy</p>
                        </div>
                        </div>
                </div>
                <div class="col">
                    <div class="card reason">
                        <div class="card-body">
                            <h5 class="card-title">4th Reason Title</h5>
                            <p class="card-text">why why why why why shy shy</p>
                        </div>
                        </div>
                </div>
                <div class="col">
                    <div class="card reason">
                        <div class="card-body">
                            <h5 class="card-title">5th Reason Title</h5>
                            <p class="card-text">why why why why why shy shy</p>
                        </div>
                        </div>
                </div>
            </div>
            <div class="num-page d-flex ms-auto justify-content-end">
                <div></div>
                <span>03 Team Work</span>
            </div>
        </div>
    </div>

    <div class="page">
        <div class="subpage" id="my-project">
            <div class="row">
                <div class="col">
                    <h3 class="fw-bold">My Project</h3>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <div style="position: relative; display: flex; flex-direction: column; align-items: center;">
                        <svg viewBox="0 0 536 257" fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute; top: -8px;">
                            <g filter="url(#filter0_d)">
                                
                            </g>
                            <path d="M9.47339 19.1328C9.47339 11.9531 15.2937 6.13281 22.4734 6.13281H513.839C521.019 6.13281 526.839 11.9531 526.839 19.1328V26.1328H9.47339V19.1328Z" fill="#E8E8E8"/>
                            <circle cx="32.8799" cy="16.1328" r="4" fill="#FF6057"/>
                            <circle cx="48.8799" cy="16.1328" r="4" fill="#FFBD2E"/>
                            <circle cx="64.8799" cy="16.1328" r="4" fill="#28CB42"/>
                            <defs>
                                <filter id="filter0_d" x="0.473389" y="0.132812" width="535.366" height="255.963" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="3"/>
                                    <feGaussianBlur stdDeviation="4.5"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.18 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                                </filter>
                            </defs>
                        </svg>
                        <img src="{{ Auth::user()->photo_profile }}" alt="" width="617.75" height="255.963" style="object-fit: cover; border-radius: 15px;">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col num-my-project d-flex">
                    <div></div>
                    <div>
                        <span>1st section’s title</span>
                        <p class="my-project-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae molestie tristique pharetra cursus . Leo dolor nunc egestas tristique odio a suspendisse donec et.</p>
                    </div>
                </div>                
            </div>

            <div class="row my-3">
                <div class="col">
                    <svg viewBox="0 0 536 257" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_d)">
                        <rect x="9.47339" y="6.13281" width="517.366" height="237.963" rx="13" fill="white"/>
                        <rect x="9.97339" y="6.63281" width="516.366" height="236.963" rx="12.5" stroke="#E8E8E8"/>
                        </g>
                        <path d="M9.47339 19.1328C9.47339 11.9531 15.2937 6.13281 22.4734 6.13281H513.839C521.019 6.13281 526.839 11.9531 526.839 19.1328V26.1328H9.47339V19.1328Z" fill="#E8E8E8"/>
                        <circle cx="32.8799" cy="16.1328" r="4" fill="#FF6057"/>
                        <circle cx="48.8799" cy="16.1328" r="4" fill="#FFBD2E"/>
                        <circle cx="64.8799" cy="16.1328" r="4" fill="#28CB42"/>
                        <defs>
                        <filter id="filter0_d" x="0.473389" y="0.132812" width="535.366" height="255.963" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dy="3"/>
                        <feGaussianBlur stdDeviation="4.5"/>
                        <feComposite in2="hardAlpha" operator="out"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.18 0"/>
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                        </filter>
                        </defs>
                        </svg>
                </div>
            </div>
            <div class="row">
                <div class="col num-my-project d-flex">
                    <div></div>
                    <div>
                        <span>2nd section’s title</span>
                        <p class="my-project-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae molestie tristique pharetra cursus . Leo dolor nunc egestas tristique odio a suspendisse donec et.</p>
                    </div>
                </div>                
            </div>
            <div class="num-page d-flex ms-auto justify-content-end">
                <div></div>
                <span>04 My Project</span>
            </div>
        </div>
    </div>

    <div class="page">
        <div class="subpage" id="my-project">
            <div class="row my-3">
                <div class="col">
                    <svg viewBox="0 0 536 257" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_d)">
                        <rect x="9.47339" y="6.13281" width="517.366" height="237.963" rx="13" fill="white"/>
                        <rect x="9.97339" y="6.63281" width="516.366" height="236.963" rx="12.5" stroke="#E8E8E8"/>
                        </g>
                        <path d="M9.47339 19.1328C9.47339 11.9531 15.2937 6.13281 22.4734 6.13281H513.839C521.019 6.13281 526.839 11.9531 526.839 19.1328V26.1328H9.47339V19.1328Z" fill="#E8E8E8"/>
                        <circle cx="32.8799" cy="16.1328" r="4" fill="#FF6057"/>
                        <circle cx="48.8799" cy="16.1328" r="4" fill="#FFBD2E"/>
                        <circle cx="64.8799" cy="16.1328" r="4" fill="#28CB42"/>
                        <defs>
                        <filter id="filter0_d" x="0.473389" y="0.132812" width="535.366" height="255.963" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dy="3"/>
                        <feGaussianBlur stdDeviation="4.5"/>
                        <feComposite in2="hardAlpha" operator="out"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.18 0"/>
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                        </filter>
                        </defs>
                        </svg>
                </div>
            </div>
            <div class="row">
                <div class="col num-my-project d-flex">
                    <div></div>
                    <div>
                        <span>3rd section’s title</span>
                        <p class="my-project-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae molestie tristique pharetra cursus . Leo dolor nunc egestas tristique odio a suspendisse donec et.</p>
                    </div>
                </div>                
            </div>

            <div class="row mt-5">
                <div class="col mt-5">
                    <div class="my-project-ico position-relative">
                        <span>21</span>
                        <span>Client</span>
                    </div>
                    <svg viewBox="0 0 141 136" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M140.592 68.1228C140.592 100.74 118.283 128.147 88.0916 135.918V120.28C89.2951 119.877 90.4801 119.432 91.6449 118.949L90.8788 117.102L90.1127 115.254C89.446 115.531 88.7721 115.794 88.0916 116.042V20.2033C88.7721 20.452 89.446 20.7147 90.1127 20.9911L90.8788 19.1437L91.6449 17.2962C90.4801 16.8132 89.2951 16.3691 88.0916 15.9654V0.328125C118.283 8.09887 140.592 35.5056 140.592 68.1228ZM53.0916 120.28V135.918C22.9001 128.147 0.591553 100.74 0.591553 68.1228C0.591553 35.5056 22.9001 8.09887 53.0916 0.328125V15.9654C51.888 16.3691 50.703 16.8132 49.5382 17.2962L50.3043 19.1437L51.0704 20.9912C51.7371 20.7147 52.411 20.452 53.0916 20.2033V116.042C52.411 115.794 51.7371 115.531 51.0704 115.254L50.3043 117.102L49.5382 118.949C50.703 119.432 51.888 119.877 53.0916 120.28ZM123.43 72.2874L125.424 72.4423C125.535 71.017 125.592 69.5765 125.592 68.1228C125.592 66.6691 125.535 65.2286 125.424 63.8033L123.43 63.9582L121.436 64.1131C121.539 65.4354 121.592 66.7726 121.592 68.1228C121.592 69.473 121.539 70.8102 121.436 72.1325L123.43 72.2874ZM122.138 55.7431L124.084 55.2778C123.407 52.4506 122.512 49.7082 121.418 47.0695L119.571 47.8356L117.723 48.6017C118.737 51.0472 119.566 53.5885 120.193 56.2085L122.138 55.7431ZM115.79 40.4286L117.494 39.382C115.982 36.9209 114.283 34.5878 112.415 32.4028L110.895 33.7024L109.374 35.002C111.107 37.029 112.684 39.193 114.085 41.4752L115.79 40.4286ZM105.012 27.8197L106.312 26.2995C104.127 24.4316 101.794 22.7319 99.3323 21.2205L98.2857 22.9248L97.2392 24.6291C99.5214 26.0306 101.685 27.6071 103.712 29.3399L105.012 27.8197ZM42.8974 22.9248L41.8508 21.2205C39.3896 22.7319 37.0565 24.4316 34.8715 26.2995L36.1711 27.8197L37.4707 29.3399C39.4977 27.6071 41.6617 26.0306 43.944 24.6291L42.8974 22.9248ZM30.2884 33.7024L28.7682 32.4028C26.9003 34.5878 25.2006 36.9209 23.6893 39.382L25.3936 40.4286L27.0979 41.4752C28.4994 39.193 30.0758 37.029 31.8086 35.002L30.2884 33.7024ZM21.6124 47.8356L19.765 47.0695C18.6707 49.7082 17.776 52.4506 17.0996 55.2778L19.0447 55.7432L20.9898 56.2085C21.6166 53.5885 22.4458 51.0472 23.4599 48.6017L21.6124 47.8356ZM15.5916 68.1228C15.5916 66.6691 15.648 65.2286 15.7587 63.8033L17.7527 63.9582L19.7467 64.1131C19.6439 65.4354 19.5916 66.7726 19.5916 68.1228C19.5916 69.473 19.6439 70.8102 19.7467 72.1325L17.7527 72.2874L15.7587 72.4423C15.648 71.017 15.5916 69.5765 15.5916 68.1228ZM19.0447 80.5025L17.0996 80.9679C17.776 83.7951 18.6707 86.5374 19.765 89.1761L21.6124 88.41L23.4599 87.6439C22.4458 85.1985 21.6166 82.6571 20.9898 80.0371L19.0447 80.5025ZM25.3936 95.817L23.6893 96.8636C25.2006 99.3248 26.9003 101.658 28.7682 103.843L30.2884 102.543L31.8086 101.244C30.0758 99.2167 28.4994 97.0527 27.0979 94.7704L25.3936 95.817ZM36.1711 108.426L34.8715 109.946C37.0565 111.814 39.3896 113.514 41.8508 115.025L42.8974 113.321L43.944 111.617C41.6617 110.215 39.4977 108.639 37.4707 106.906L36.1711 108.426ZM98.2857 113.321L99.3323 115.025C101.794 113.514 104.127 111.814 106.312 109.946L105.012 108.426L103.712 106.906C101.685 108.639 99.5214 110.215 97.2392 111.617L98.2857 113.321ZM110.895 102.543L112.415 103.843C114.283 101.658 115.982 99.3248 117.494 96.8636L115.79 95.817L114.085 94.7704C112.684 97.0527 111.107 99.2167 109.374 101.244L110.895 102.543ZM119.571 88.41L121.418 89.1761C122.512 86.5374 123.407 83.795 124.084 80.9678L122.138 80.5025L120.193 80.0371C119.566 82.6571 118.737 85.1984 117.723 87.6439L119.571 88.41Z" fill="#12A4B6"/>
                        <g filter="url(#filter0_d)">
                        <circle cx="70.5916" cy="68.1228" r="40" fill="white"/>
                        </g>
                        <defs>
                        <filter id="filter0_d" x="27.5916" y="28.1228" width="86" height="86" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dy="3"/>
                        <feGaussianBlur stdDeviation="1.5"/>
                        <feComposite in2="hardAlpha" operator="out"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.27 0"/>
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                        </filter>
                        </defs>
                        </svg>                        
                </div>
                <div class="col">
                    <div class="my-project-ico position-relative">
                        <span>32</span>
                        <span>Project</span>
                    </div>
                    <svg viewBox="0 0 141 136" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M140.592 68.1228C140.592 100.74 118.283 128.147 88.0916 135.918V120.28C89.2951 119.877 90.4801 119.432 91.6449 118.949L90.8788 117.102L90.1127 115.254C89.446 115.531 88.7721 115.794 88.0916 116.042V20.2033C88.7721 20.452 89.446 20.7147 90.1127 20.9911L90.8788 19.1437L91.6449 17.2962C90.4801 16.8132 89.2951 16.3691 88.0916 15.9654V0.328125C118.283 8.09887 140.592 35.5056 140.592 68.1228ZM53.0916 120.28V135.918C22.9001 128.147 0.591553 100.74 0.591553 68.1228C0.591553 35.5056 22.9001 8.09887 53.0916 0.328125V15.9654C51.888 16.3691 50.703 16.8132 49.5382 17.2962L50.3043 19.1437L51.0704 20.9912C51.7371 20.7147 52.411 20.452 53.0916 20.2033V116.042C52.411 115.794 51.7371 115.531 51.0704 115.254L50.3043 117.102L49.5382 118.949C50.703 119.432 51.888 119.877 53.0916 120.28ZM123.43 72.2874L125.424 72.4423C125.535 71.017 125.592 69.5765 125.592 68.1228C125.592 66.6691 125.535 65.2286 125.424 63.8033L123.43 63.9582L121.436 64.1131C121.539 65.4354 121.592 66.7726 121.592 68.1228C121.592 69.473 121.539 70.8102 121.436 72.1325L123.43 72.2874ZM122.138 55.7431L124.084 55.2778C123.407 52.4506 122.512 49.7082 121.418 47.0695L119.571 47.8356L117.723 48.6017C118.737 51.0472 119.566 53.5885 120.193 56.2085L122.138 55.7431ZM115.79 40.4286L117.494 39.382C115.982 36.9209 114.283 34.5878 112.415 32.4028L110.895 33.7024L109.374 35.002C111.107 37.029 112.684 39.193 114.085 41.4752L115.79 40.4286ZM105.012 27.8197L106.312 26.2995C104.127 24.4316 101.794 22.7319 99.3323 21.2205L98.2857 22.9248L97.2392 24.6291C99.5214 26.0306 101.685 27.6071 103.712 29.3399L105.012 27.8197ZM42.8974 22.9248L41.8508 21.2205C39.3896 22.7319 37.0565 24.4316 34.8715 26.2995L36.1711 27.8197L37.4707 29.3399C39.4977 27.6071 41.6617 26.0306 43.944 24.6291L42.8974 22.9248ZM30.2884 33.7024L28.7682 32.4028C26.9003 34.5878 25.2006 36.9209 23.6893 39.382L25.3936 40.4286L27.0979 41.4752C28.4994 39.193 30.0758 37.029 31.8086 35.002L30.2884 33.7024ZM21.6124 47.8356L19.765 47.0695C18.6707 49.7082 17.776 52.4506 17.0996 55.2778L19.0447 55.7432L20.9898 56.2085C21.6166 53.5885 22.4458 51.0472 23.4599 48.6017L21.6124 47.8356ZM15.5916 68.1228C15.5916 66.6691 15.648 65.2286 15.7587 63.8033L17.7527 63.9582L19.7467 64.1131C19.6439 65.4354 19.5916 66.7726 19.5916 68.1228C19.5916 69.473 19.6439 70.8102 19.7467 72.1325L17.7527 72.2874L15.7587 72.4423C15.648 71.017 15.5916 69.5765 15.5916 68.1228ZM19.0447 80.5025L17.0996 80.9679C17.776 83.7951 18.6707 86.5374 19.765 89.1761L21.6124 88.41L23.4599 87.6439C22.4458 85.1985 21.6166 82.6571 20.9898 80.0371L19.0447 80.5025ZM25.3936 95.817L23.6893 96.8636C25.2006 99.3248 26.9003 101.658 28.7682 103.843L30.2884 102.543L31.8086 101.244C30.0758 99.2167 28.4994 97.0527 27.0979 94.7704L25.3936 95.817ZM36.1711 108.426L34.8715 109.946C37.0565 111.814 39.3896 113.514 41.8508 115.025L42.8974 113.321L43.944 111.617C41.6617 110.215 39.4977 108.639 37.4707 106.906L36.1711 108.426ZM98.2857 113.321L99.3323 115.025C101.794 113.514 104.127 111.814 106.312 109.946L105.012 108.426L103.712 106.906C101.685 108.639 99.5214 110.215 97.2392 111.617L98.2857 113.321ZM110.895 102.543L112.415 103.843C114.283 101.658 115.982 99.3248 117.494 96.8636L115.79 95.817L114.085 94.7704C112.684 97.0527 111.107 99.2167 109.374 101.244L110.895 102.543ZM119.571 88.41L121.418 89.1761C122.512 86.5374 123.407 83.795 124.084 80.9678L122.138 80.5025L120.193 80.0371C119.566 82.6571 118.737 85.1984 117.723 87.6439L119.571 88.41Z" fill="#12A4B6"/>
                        <g filter="url(#filter0_d)">
                        <circle cx="70.5916" cy="68.1228" r="40" fill="white"/>
                        </g>
                        <defs>
                        <filter id="filter0_d" x="27.5916" y="28.1228" width="86" height="86" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dy="3"/>
                        <feGaussianBlur stdDeviation="1.5"/>
                        <feComposite in2="hardAlpha" operator="out"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.27 0"/>
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                        </filter>
                        </defs>
                        </svg>                        
                </div>
                <div class="col mt-5">
                    <div class="my-project-ico position-relative">
                        <span>5jt</span>
                        <span>Profit</span>
                    </div>
                    <svg viewBox="0 0 141 136" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M140.592 68.1228C140.592 100.74 118.283 128.147 88.0916 135.918V120.28C89.2951 119.877 90.4801 119.432 91.6449 118.949L90.8788 117.102L90.1127 115.254C89.446 115.531 88.7721 115.794 88.0916 116.042V20.2033C88.7721 20.452 89.446 20.7147 90.1127 20.9911L90.8788 19.1437L91.6449 17.2962C90.4801 16.8132 89.2951 16.3691 88.0916 15.9654V0.328125C118.283 8.09887 140.592 35.5056 140.592 68.1228ZM53.0916 120.28V135.918C22.9001 128.147 0.591553 100.74 0.591553 68.1228C0.591553 35.5056 22.9001 8.09887 53.0916 0.328125V15.9654C51.888 16.3691 50.703 16.8132 49.5382 17.2962L50.3043 19.1437L51.0704 20.9912C51.7371 20.7147 52.411 20.452 53.0916 20.2033V116.042C52.411 115.794 51.7371 115.531 51.0704 115.254L50.3043 117.102L49.5382 118.949C50.703 119.432 51.888 119.877 53.0916 120.28ZM123.43 72.2874L125.424 72.4423C125.535 71.017 125.592 69.5765 125.592 68.1228C125.592 66.6691 125.535 65.2286 125.424 63.8033L123.43 63.9582L121.436 64.1131C121.539 65.4354 121.592 66.7726 121.592 68.1228C121.592 69.473 121.539 70.8102 121.436 72.1325L123.43 72.2874ZM122.138 55.7431L124.084 55.2778C123.407 52.4506 122.512 49.7082 121.418 47.0695L119.571 47.8356L117.723 48.6017C118.737 51.0472 119.566 53.5885 120.193 56.2085L122.138 55.7431ZM115.79 40.4286L117.494 39.382C115.982 36.9209 114.283 34.5878 112.415 32.4028L110.895 33.7024L109.374 35.002C111.107 37.029 112.684 39.193 114.085 41.4752L115.79 40.4286ZM105.012 27.8197L106.312 26.2995C104.127 24.4316 101.794 22.7319 99.3323 21.2205L98.2857 22.9248L97.2392 24.6291C99.5214 26.0306 101.685 27.6071 103.712 29.3399L105.012 27.8197ZM42.8974 22.9248L41.8508 21.2205C39.3896 22.7319 37.0565 24.4316 34.8715 26.2995L36.1711 27.8197L37.4707 29.3399C39.4977 27.6071 41.6617 26.0306 43.944 24.6291L42.8974 22.9248ZM30.2884 33.7024L28.7682 32.4028C26.9003 34.5878 25.2006 36.9209 23.6893 39.382L25.3936 40.4286L27.0979 41.4752C28.4994 39.193 30.0758 37.029 31.8086 35.002L30.2884 33.7024ZM21.6124 47.8356L19.765 47.0695C18.6707 49.7082 17.776 52.4506 17.0996 55.2778L19.0447 55.7432L20.9898 56.2085C21.6166 53.5885 22.4458 51.0472 23.4599 48.6017L21.6124 47.8356ZM15.5916 68.1228C15.5916 66.6691 15.648 65.2286 15.7587 63.8033L17.7527 63.9582L19.7467 64.1131C19.6439 65.4354 19.5916 66.7726 19.5916 68.1228C19.5916 69.473 19.6439 70.8102 19.7467 72.1325L17.7527 72.2874L15.7587 72.4423C15.648 71.017 15.5916 69.5765 15.5916 68.1228ZM19.0447 80.5025L17.0996 80.9679C17.776 83.7951 18.6707 86.5374 19.765 89.1761L21.6124 88.41L23.4599 87.6439C22.4458 85.1985 21.6166 82.6571 20.9898 80.0371L19.0447 80.5025ZM25.3936 95.817L23.6893 96.8636C25.2006 99.3248 26.9003 101.658 28.7682 103.843L30.2884 102.543L31.8086 101.244C30.0758 99.2167 28.4994 97.0527 27.0979 94.7704L25.3936 95.817ZM36.1711 108.426L34.8715 109.946C37.0565 111.814 39.3896 113.514 41.8508 115.025L42.8974 113.321L43.944 111.617C41.6617 110.215 39.4977 108.639 37.4707 106.906L36.1711 108.426ZM98.2857 113.321L99.3323 115.025C101.794 113.514 104.127 111.814 106.312 109.946L105.012 108.426L103.712 106.906C101.685 108.639 99.5214 110.215 97.2392 111.617L98.2857 113.321ZM110.895 102.543L112.415 103.843C114.283 101.658 115.982 99.3248 117.494 96.8636L115.79 95.817L114.085 94.7704C112.684 97.0527 111.107 99.2167 109.374 101.244L110.895 102.543ZM119.571 88.41L121.418 89.1761C122.512 86.5374 123.407 83.795 124.084 80.9678L122.138 80.5025L120.193 80.0371C119.566 82.6571 118.737 85.1984 117.723 87.6439L119.571 88.41Z" fill="#12A4B6"/>
                        <g filter="url(#filter0_d)">
                        <circle cx="70.5916" cy="68.1228" r="40" fill="white"/>
                        </g>
                        <defs>
                        <filter id="filter0_d" x="27.5916" y="28.1228" width="86" height="86" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dy="3"/>
                        <feGaussianBlur stdDeviation="1.5"/>
                        <feComposite in2="hardAlpha" operator="out"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.27 0"/>
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                        </filter>
                        </defs>
                        </svg>                        
                </div>
            </div>

            <div class="num-page d-flex ms-auto justify-content-end">
                <div></div>
                <span>04 My Project</span>
            </div>
        </div>
    </div>

    <div class="page">
        <div class="subpage" id="testimoni">
            <div class="row">
                <div class="col">
                    <h3 class="fw-bold">Testimoni</h3>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <div class="card">
                        <div class="card-body text-center">
                          <h5 class="card-title">Kustandy Haryo</h5>
                          <p class="card-text">Rest areanya sangat menarik dengan banyak toko oleh-oleh khas desa, cocok buat isitirahat saat lelah perjalanan, apalagi bisa pesen dulu sebelum datang</p>
                        </div>
                      </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <div class="card">
                        <div class="card-body text-center">
                          <h5 class="card-title">Kustandy Haryo</h5>
                          <p class="card-text">Rest areanya sangat menarik dengan banyak toko oleh-oleh khas desa, cocok buat isitirahat saat lelah perjalanan, apalagi bisa pesen dulu sebelum datang</p>
                        </div>
                      </div>
                </div>
            </div>
            
            <div class="num-page d-flex ms-auto justify-content-end">
                <div></div>
                <span>05 Testimoni</span>
            </div>
        </div>
    </div>
@endsection