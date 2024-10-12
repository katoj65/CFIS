<template>
<app-layout>
<div class="container">
<div class="row">
<div class="col-12 col-md-3"></div>
<div class="col-12 col-md-6">


    <div class="card card-bordered">
        <div class="card-inner">
            <div class="team">
                <div class="team-status bg-danger text-white"><em class="icon ni ni-na"></em></div>
                <div class="team-options">
                    <div class="drodown">
                        <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="link-list-opt no-bdr">
                                <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Email</span></a></li>
                                <li class="divider"></li>
                                <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li>
                                <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="user-card user-card-s2">
                    <div class="user-avatar md bg-success">
                        <span>AB</span>
                        <div class="status dot dot-lg dot-success"></div>
                    </div>
                    <div class="user-info">
                        <h6 style="text-transform:capitalize;">
                            {{ user.firstname +' '+user.lastname }}
                        </h6>
                        <span class="sub-text">{{ user.email }} </span>
                    </div>
                </div>
                <div class="team-details">
                    <p>I am an UI/UX Designer and Love to be creative.</p>
                </div>
                <!-- <ul class="team-statistics">
                    <li><span>213</span><span>Projects</span></li>
                    <li><span>87.5%</span><span>Performed</span></li>
                    <li><span>587</span><span>Tasks</span></li>
                </ul> -->





    <ul class="data-list is-compact" style="margin:0;padding:0;">
        <li class="data-item">
            <div class="data-col">
                <div class="data-label">Gender</div>
                <div class="data-value">{{ profile.gender }} </div>
            </div>
        </li>
        <li class="data-item">
            <div class="data-col">
                <div class="data-label">Date of Birth</div>
                <div class="data-value">{{ profile.dob }} </div>
            </div>
        </li>
        <li class="data-item">
            <div class="data-col">
                <div class="data-label">Role</div>
                <div class="data-value">{{ user.role }} </div>
            </div>
        </li>
        <li class="data-item">
            <div class="data-col">
                <div class="data-label">Phone Number</div>
                <div class="data-value text-soft"><em>Not available</em></div>
            </div>
        </li>
        <li class="data-item">
            <div class="data-col">
                <div class="data-label">Date of Birth</div>
                <div class="data-value">28 Oct, 2015</div>
            </div>
        </li>
        <li class="data-item">
            <div class="data-col">
                <div class="data-label">Full Address</div>
                <div class="data-value">6516, Eldoret, Uasin Gishu, 30100</div>
            </div>
        </li>
        <li class="data-item">
            <div class="data-col">
                <div class="data-label">Country of Residence</div>
                <div class="data-value">Kenya</div>
            </div>
        </li>
        <li class="data-item">
            <div class="data-col">
                <div class="data-label">Full Address</div>
                <div class="data-value">6516, Eldoret, Uasin Gishu, 30100</div>
            </div>
        </li>
        <li class="data-item">
            <div class="data-col">
                <div class="data-label">Wallet Type</div>
                <div class="data-value">Bitcoin</div>
            </div>
        </li>
        <li class="data-item">
            <div class="data-col">
                <div class="data-label">Wallet Address</div>
                <div class="data-value text-break">1F1tAaz5x1HUXrCNLbtMDqcw6o5GNn4xqX</div>
            </div>
        </li>
        <li class="data-item">
            <div class="data-col">
                <div class="data-label">Telegram</div>
                <div class="data-value">
                    <span>@tokenlite</span> <a href="https://t.me/tokenlite" target="_blank"><em class="icon ni ni-telegram"></em></a>
                </div>
            </div>
        </li>
    </ul>





            </div><!-- .team -->
        </div><!-- .card-inner -->
    </div>



</div>
<div class="col-12 col-md-3"></div>
</div>
</div>
</app-layout>
</template>
<script>
import AppLayout from '../Layouts/AppLayout.vue'
export default {
    props:{
    title:{},
    user:{},
    profile:{},

    },
    components: { AppLayout },
     data(){return{






  }}

}
</script>