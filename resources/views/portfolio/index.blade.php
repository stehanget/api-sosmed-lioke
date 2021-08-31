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
            background-color: #2083CA;
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
            background: linear-gradient(98.91deg, #E3EAF2 17.06%, #E0E4EB 92.64%);
            border-radius: 10px;
            width: 50.2%;
            min-height: 100px;
            position: absolute;
            right: 12px;
            padding: 1rem;
            font-size: .75em;
        }

        #team-work #reason-1 {
            top: 38px;
        }

        #team-work #reason-2 {
            top: 200px;
        }

        #team-work #reason-3 {
            top: 362px;
        }

        #team-work #reason-4 {
            right: auto;
            top: 607px;
            left: 61px;
        }

        #team-work #reason-5 {
            right: auto;
            top: 771px;
            left: 61px;
        }
        
    </style>
@endpush

@section('content')
    <div class="page">
        <div class="subpage" id="introduction">
            <div class="row">
                <div class="col">
                    <h3 class="fw-bold">Nadys Pratiwi</h3>
                    <h5 class="mb-4 text-justify">UI Designer</h5>
                    <p class="ms-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pellentesque viverra tortor sit lectus eget habitasse scelerisque duis. Non ornare id sodales adipiscing commodo tortor mi donec lacus. Aliquet amet nascetur purus maecenas netus malesuada amet, duis. Justo convallis pretium nibh tortor. Tincidunt tellus bibendum vehicula interdum fermentum quis vitae tortor augue. Viverra ullamcorper sit condimentum egestas. </p>
                </div>
                <div class="col">
                    <img src="https://dummyimage.com/350x500/000/fff" class="w-100">
                </div>  
            </div>
            <div class="row mt-1">
                <div class="col-auto linkedIn d-flex align-items-center gap-2">
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.8438 12.2804H10.7695V9.03181C10.7695 8.25717 10.7556 7.25994 9.69059 7.25994C8.61018 7.25994 8.44486 8.10399 8.44486 8.97543V12.2802H6.37057V5.59979H8.3619V6.51275H8.38979C8.58908 6.17199 8.87706 5.89166 9.22306 5.70163C9.56906 5.51159 9.96012 5.41896 10.3546 5.4336C12.4571 5.4336 12.8447 6.81653 12.8447 8.61564L12.8438 12.2804ZM4.02994 4.68667C3.36511 4.68678 2.82605 4.14789 2.82594 3.48306C2.82583 2.81822 3.36467 2.27917 4.0295 2.27906C4.69434 2.27889 5.23339 2.81778 5.2335 3.48262C5.23356 3.80189 5.10679 4.1081 4.88108 4.33391C4.65537 4.55971 4.34921 4.6866 4.02994 4.68667ZM5.06714 12.2805H2.99061V5.59979H5.06709V12.2804L5.06714 12.2805ZM13.878 0.352581H1.94826C1.38443 0.346238 0.922052 0.797902 0.915161 1.36173V13.3412C0.921833 13.9053 1.38416 14.3574 1.94821 14.3515H13.878C14.4432 14.3585 14.9073 13.9064 14.9152 13.3412V1.3608C14.9071 0.795878 14.4429 0.344269 13.878 0.351652" fill="#0A66C2"/>
                    </svg>         
                    <span class="small">linked.in/asadi7z</span>               
                </div>
                <div class="col-auto dribbble d-flex align-items-center gap-2">
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.4161 12.4077C14.4161 12.9234 14.2113 13.418 13.8466 13.7827C13.482 14.1473 12.9874 14.3522 12.4717 14.3522H2.36058C1.84488 14.3522 1.35031 14.1473 0.985652 13.7827C0.620998 13.418 0.416138 12.9234 0.416138 12.4077V2.29662C0.416138 1.78092 0.620998 1.28634 0.985652 0.921687C1.35031 0.557033 1.84488 0.352173 2.36058 0.352173H12.4717C12.9874 0.352173 13.482 0.557033 13.8466 0.921687C14.2113 1.28634 14.4161 1.78092 14.4161 2.29662V12.4077Z" fill="#FF4081"/>
                        <path d="M10.9398 8.2361C10.8739 8.21576 10.8047 8.20863 10.736 8.21512C10.6673 8.22162 10.6006 8.24161 10.5397 8.27395C10.4788 8.30628 10.4249 8.35034 10.381 8.40357C10.3371 8.4568 10.3042 8.51817 10.2842 8.58416C9.96372 9.61783 9.3835 10.6915 9.12022 10.7503C8.92305 10.7503 8.63955 10.583 8.35878 10.1903C9.00978 8.7926 9.35083 7.03794 9.35083 5.8666C9.35083 2.59488 8.52483 1.90771 7.83105 1.90771C6.37 1.90771 6.35328 5.76238 6.35328 5.80127C6.35328 6.25471 6.36961 6.67549 6.40033 7.06749C6.17994 6.98608 5.94694 6.94409 5.712 6.94344C4.21089 6.94344 3.52722 8.42471 3.52722 9.8006C3.52722 11.0972 4.25483 12.4077 5.87844 12.4077C6.64533 12.4077 7.29167 11.9057 7.81317 11.1551C8.27517 11.6354 8.75894 11.8147 9.11983 11.8147C10.2566 11.8147 11.0091 9.7796 11.2805 8.90344C11.3225 8.76975 11.3103 8.62493 11.2466 8.50013C11.1829 8.37533 11.0727 8.28052 10.9398 8.2361ZM5.87922 11.3437C4.7005 11.3437 4.57255 10.2645 4.57255 9.80021C4.57255 9.7271 4.58578 8.00705 5.71278 8.00705C6.15767 8.00705 6.49911 8.35121 6.49911 8.35121C6.52439 8.37844 6.55239 8.40216 6.58155 8.42277C6.72739 9.16321 6.93311 9.7551 7.17111 10.2241C6.78067 10.9 6.32839 11.3437 5.87922 11.3437ZM7.7665 8.87894C7.54911 8.12838 7.39861 7.12077 7.39861 5.80127C7.39861 4.5856 7.65761 3.44149 7.87267 3.05066C8.03755 3.3011 8.30628 4.08121 8.30628 5.8666C8.30628 6.81394 8.09667 7.91449 7.7665 8.87894Z" fill="white"/>
                    </svg>                                                            
                    <span class="small">dribbble.com/asadiiefji</span>
                </div>
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
            <div class="row border-start border-primary">
                <div class="col-12">
                    <div class="row position-relative">
                        <div class="col-auto ex-time">
                            <span>Now</span>
                        </div>
                        <div class="col ms-4">
                            <div><span class="fw-bold">CODES.ID</span> - Malang, East Java</div>
                            <div class="text-primary">July 2020 - Present</div>
                        </div>
                    </div>
                </div>
                <div class="col ms-4 mt-3">
                    <ul>
                        <li>Grew my startup by a total of 13 projects with initiating from only two-person until seven workers now as a freelancer by fulfilling the need of mobile and website development for student’s research and community dedication by handling UI design, marketing strategy, and promotion.</li>
                        <li>Assisted a lecturer’s research with created a mobile learning application for decision support system subjects v1.0. Emphatize with users, define the problem, and ideate the app by making UI design, UX process, and front-end coding.</li>
                        <li>Mentoring "Workshop Design" by the Department of Talent and Interest of Electrical Engineering's student organization to discuss with other students as a newcomer designer about UI design.</li>
                    </ul>
                </div>
            </div>
            <div class="row border-start border-primary ">
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
            </div>
            {{-- HARD SKILLS --}}
            <div class="row mt-3">
                <div class="col"><h3 class="text-primary fw-bold text-end">Hard Skills</h3></div>
            </div>
            <div class="row row-cols-1 justify-content-end hard-skill">
                <div class="col">Figma - Able to identify the user story, managing the strategy as well as arranging wireframe and create a good UI Design</div>
                <div class="col">Photoshop - Able to identify the user story </div>
            </div>
            {{-- SOFT SKILLS --}}
            <div class="row mt-3 mb-3">
                <div class="col"><h3 class="text-primary fw-bold">Soft Skills</h3></div>
            </div>
            <div class="row justify-content-center soft-skill">
                <div class="col">
                    <span>Native Indonesian Speaker</span>
                    <div class="text-center bg-primary rounded-circle num-soft-skill">01</div>
                </div>
                <div class="col">
                    <span>Native Indonesian Speaker</span>
                    <div class="text-center bg-primary rounded-circle num-soft-skill">02</div>
                </div>
                <div class="col">
                    <span>Native Indonesian Speaker</span>
                    <div class="text-center bg-primary rounded-circle num-soft-skill">03</div>
                </div>
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
                    <h3 class="fw-bold">Team Work Benefits</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-5">
                    <img src="https://dummyimage.com/250x500/000/fff" class="w-100">
                </div>
                <div class="col position-relative">
                    <svg width="175" height="500" viewBox="0 0 122 345" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M117.632 59.8561L43.8289 59.8561" stroke="#2083CA"/>
                        <path d="M117.632 172.589L73.7503 172.589" stroke="#2083CA"/>
                        <path d="M117.632 285.321L57.3898 285.321" stroke="#2083CA"/>
                        <path d="M27.708 344C44.585 319.533 57.3052 291.135 65.1141 260.492C72.923 229.849 75.6616 197.584 73.1674 165.611C70.6733 133.638 62.9972 102.609 50.5944 74.3625C38.1917 46.1166 21.3148 21.2295 0.964966 1.17749" stroke="#2083CA"/>
                        <path d="M117.632 56.0554C116.624 56.0554 115.657 56.4559 114.944 57.1687C114.231 57.8814 113.831 58.8482 113.831 59.8562C113.831 60.8643 114.231 61.831 114.944 62.5438C115.657 63.2566 116.624 63.657 117.632 63.657L117.632 59.8562V56.0554Z" fill="#995EC7"/>
                        <path d="M117.632 168.788C116.624 168.788 115.657 169.189 114.944 169.901C114.231 170.614 113.831 171.581 113.831 172.589C113.831 173.597 114.231 174.564 114.944 175.276C115.657 175.989 116.624 176.39 117.632 176.39L117.632 172.589V168.788Z" fill="#FF9200"/>
                        <path d="M117.632 281.521C116.624 281.521 115.657 281.921 114.944 282.634C114.231 283.347 113.831 284.313 113.831 285.321C113.831 286.329 114.231 287.296 114.944 288.009C115.657 288.722 116.624 289.122 117.632 289.122L117.632 285.321V281.521Z" fill="#3ED170"/>
                    </svg>
                    <div class="reason" id="reason-1">
                        <h6 class="text-primary mb-1">1st Reason Title</h6>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="reason" id="reason-2">
                        <h6 class="text-primary mb-1">2nd Reason Title</h6>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad?</p>
                    </div>
                    <div class="reason" id="reason-3">
                        <h6 class="text-primary mb-1">3rd Reason Title</h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <svg class="mt-5" width="100" height="239" viewBox="0 0 23 165" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.2879 48.5658L0.628662 48.5657L0.628699 0.357765" stroke="#2083CA"/>
                        <path d="M15.2879 160.921L0.628662 160.921L0.628662 47.68" stroke="#2083CA"/>
                        <path d="M19.0888 44.7651C18.0807 44.7651 17.114 45.1655 16.4012 45.8783C15.6884 46.5911 15.288 47.5578 15.288 48.5659C15.288 49.5739 15.6884 50.5407 16.4012 51.2535C17.114 51.9663 18.0807 52.3667 19.0888 52.3667L19.0888 48.5659V44.7651Z" fill="#995EC7"/>
                        <path d="M19.0888 157.12C18.0807 157.12 17.114 157.52 16.4012 158.233C15.6884 158.946 15.288 159.913 15.288 160.921C15.288 161.929 15.6884 162.895 16.4012 163.608C17.114 164.321 18.0807 164.721 19.0888 164.721L19.0888 160.921V157.12Z" fill="#FF9200"/>
                    </svg>
                    <div class="reason" id="reason-4">
                        <h6 class="text-primary mb-1">4th Reason Title</h6>
                        <p>Lorem ipsum dolor sit.</p>
                    </div>
                    <div class="reason" id="reason-5">
                        <h6 class="text-primary mb-1">5th Reason Title</h6>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                </div>
            </div>
            <div class="num-page d-flex ms-auto justify-content-end">
                <div></div>
                <span>03 Team Work</span>
            </div>
        </div>
    </div>
@endsection