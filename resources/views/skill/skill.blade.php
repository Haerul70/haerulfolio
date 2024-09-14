 <!-- Skill Start -->
 <div class="container-fluid py-5" id="skill">
     <div class="container">
         <div class="position-relative d-flex align-items-center justify-content-center">
             <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Skills</h1>
             <h1 class="position-absolute text-uppercase text-primary">My Skills</h1>
         </div>
         <div class="row align-items-between">

             <div class="col-md-4 mt-4">
                 <h3 class="mb-4">Technical Skills</h3>
                 <div class="border-left border-primary pt-2 pl-4 ml-2">
                     <div class="skills-container">
                         <div class="skills-column">
                             @foreach ($skillsTechnical->take(4) as $skill)
                                 <div class="skill">
                                     <div class="d-flex justify-content-between position-relative mb-1">
                                         <i class="far fa-dot-circle text-primary position-absolute"
                                             style="top: 2px; left: -32px;"></i>
                                         <h6 class="font-weight-bold">{{ $skill->title }}</h6>
                                     </div>
                                 </div>
                             @endforeach
                         </div>
                         <div class="skills-column">
                             @foreach ($skillsTechnical->slice(4) as $skill)
                                 <div class="skill">
                                     <div class="d-flex justify-content-between position-relative mb-1">
                                         <i class="far fa-dot-circle text-primary position-absolute"
                                             style="top: 2px; left: -32px;"></i>
                                         <h6 class="font-weight-bold">{{ $skill->title }}</h6>
                                     </div>
                                 </div>
                             @endforeach
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-md-4 mt-4">
                 <h3 class="mb-4">Non Technical Skills</h3>
                 <div class="border-left border-primary pt-2 pl-4 ml-2">
                     <div class="skills-container">
                         <div class="skills-column">
                             @foreach ($skillsNonTechnical->take(4) as $skill)
                                 <div class="skill">
                                     <div class="d-flex justify-content-between position-relative mb-1">
                                         <i class="far fa-dot-circle text-primary position-absolute"
                                             style="top: 2px; left: -32px;"></i>
                                         <h6 class="font-weight-bold">{{ $skill->title }}</h6>
                                     </div>
                                 </div>
                             @endforeach
                         </div>
                         <div class="skills-column">
                             @foreach ($skillsNonTechnical->slice(4) as $skill)
                                 <div class="skill">
                                     <div class="d-flex justify-content-between position-relative mb-1">
                                         <i class="far fa-dot-circle text-primary position-absolute"
                                             style="top: 2px; left: -32px;"></i>
                                         <h6 class="font-weight-bold">{{ $skill->title }}</h6>
                                     </div>
                                 </div>
                             @endforeach
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-4 mt-4">
                 <h3 class="mb-4">Software Skills</h3>
                 <div class="border-left border-primary pt-2 pl-4 ml-2">
                     <div class="skills-container">
                         <div class="skills-column">
                             @foreach ($skillsSoftware->take(4) as $skill)
                                 <div class="skill">
                                     <div class="d-flex justify-content-between position-relative mb-1">
                                         <i class="far fa-dot-circle text-primary position-absolute"
                                             style="top: 2px; left: -32px;"></i>
                                         <h6 class="font-weight-bold">{{ $skill->title }}</h6>
                                     </div>
                                 </div>
                             @endforeach
                         </div>
                         <div class="skills-column">
                             @foreach ($skillsSoftware->slice(4) as $skill)
                                 <div class="skill">
                                     <div class="d-flex justify-content-between position-relative mb-1">
                                         <i class="far fa-dot-circle text-primary position-absolute"
                                             style="top: 2px; left: -32px;"></i>
                                         <h6 class="font-weight-bold">{{ $skill->title }}</h6>
                                     </div>
                                 </div>
                             @endforeach
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Skill End -->
