<template>
<landing-layout>
<banner-component/>


 <!--Developer events start-->
 <section class="my-xl-9 my-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="mb-5">
                    <h2 class="mb-3">
                        Be a part of the first official
                        <span class="text-primary">#1 developer</span>
                        event.
                    </h2>
                    <p class="lead mb-0">
                        Developer productivity significantly impacts
                        software quality. Reduced productivity can leave
                        room for bugs and technical errors that affect a
                        product’s quality.
                    </p>
                </div>
                <ul class="mb-5 list-unstyled">
                    <li class="mb-3 d-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor"
                            class="bi bi-check-circle-fill text-primary mt-1"
                            viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                        <span class="ms-2">Attendance is free. Join the
                            event from anywhere.</span>
                    </li>
                    <li class="mb-3 d-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor"
                            class="bi bi-check-circle-fill text-primary mt-1"
                            viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                        <span class="ms-2">Enjoy technical, code-driven
                            sessions for developers.</span>
                    </li>
                    <li class="mb-3 d-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor"
                            class="bi bi-check-circle-fill text-primary mt-1"
                            viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                        <span class="ms-2">Join live Q&A in the events with
                            industry experts.</span>
                    </li>
                </ul>
                <a href="#speaker">
                    See Speakers
                    <span class="ms-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor"
                            class="bi bi-chevron-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </span>
                </a>
            </div>
            <div class="col-lg-6">
                <figure>
                    <img src="http://localhost/carbon/public/images/deforestation.jpeg"
                        alt="events" class="img-fluid rounded-3" />
                </figure>
            </div>
        </div>
       </div>
</section>
<!--Developer events end-->



</landing-layout>
</template>
<script>
import BannerComponent from '@/components/BannerComponent.vue';
import LandingLayout from '@/Layouts/LandingLayout.vue';
export default {
    components:{
BannerComponent,
LandingLayout

    }
}
</script>